<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use App\Http\Traits\SchoolTrait;
use App\Jobs\CreateBackupJob;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Spatie\Backup\Commands\ListCommand;
use Spatie\Backup\Helpers\Format;
use Spatie\Backup\Tasks\Monitor\BackupDestinationStatus;
use Spatie\Backup\Tasks\Monitor\BackupDestinationStatusFactory;

class BackupController extends Controller
{
    use LogsActivity, SchoolTrait;

    public function __construct()
    {
        $this->middleware('permission:backup-list', ['only' => ['index']]);
        $this->middleware('permission:backup-create', ['only' => ['create']]);
        $this->middleware('permission:backup-delete', ['only' => ['delete']]);
        $this->middleware('permission:backup-download', ['only' => ['download']]);
    }

    public function index()
    {
        $disk = Storage::disk('backup');
        $files = $disk->files(config('backup.backup.name'));
        $backups = [];
        foreach ($files as $k => $f) {
            if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                $backups[] = [
                    'file_path' => $f,
                    'file_name' => str_replace(config('backup.backup.name').'/', '', $f),
                    'file_size' => Format::humanReadableSize($disk->size($f)),
                    'file_date' => Carbon::createFromTimestamp($disk->lastModified($f)), ];
            }
        }
        $backups = array_reverse($backups);

        $statuses = BackupDestinationStatusFactory::createForMonitorConfig(config('backup.monitor_backups'));

        $listCommand = new ListCommand;

        $rows = $statuses->map(function (BackupDestinationStatus $backupDestinationStatus) use ($listCommand) {
            return $listCommand->convertToRow($backupDestinationStatus);
        })->all();
        foreach ($statuses as $index => $status) {
            $name = $status->backupDestination()->backupName();
            $files = array_map('basename', $status->backupDestination()->disk()->files($name));
            $rows[$index]['files'] = array_slice(array_reverse($files), 0, 30);
        }
        $school = $this->getSchool();

        return view('backend.backup.index', compact('backups', 'rows', 'school'));
    }

    public function create()
    {
        try {
            CreateBackupJob::dispatch();

            session()->flash('success', trans('notifications.backup_successful_body', ['application_name' => config('app.name'), 'disk_name' => config('backup.backup.destination.disks')[0]]));
            $this->logActivity(trans('log.actions.added'), trans('log.models.backup.created', ['date' => Carbon::parse()->format('Y-M-d')]));

            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function download($file_name)
    {
        $file_name = str_replace(['../', '..\\'], '', $file_name);
        $file = config('backup.backup.name').'/'.$file_name;
        $disk = Storage::disk(config('backup.backup.destination.disks')[0]);
        if ($disk->exists($file)) {
            $fs = Storage::disk(config('backup.backup.destination.disks')[0])->getDriver();
            $stream = $fs->readStream($file);

            return \Response::stream(function () use ($stream) {
                fpassthru($stream);
            }, 200, [
                'Content-Type' => $disk->mimeType($file),
                'Content-Length' => $disk->size($file),
                'Content-disposition' => 'attachment; filename="'.basename($file).'"',
            ]);
        } else {
            abort(404, "The backup file doesn't exist.");
        }
    }

    public function delete($file_name)
    {
        $file_name = str_replace(['../', '..\\'], '', $file_name);
        try {

            $disk = Storage::disk(config('backup.backup.destination.disks')[0]);
            $filePath = config('backup.backup.name').'/'.$file_name;
            if ($disk->exists($filePath)) {
                $files = collect($disk->files(config('backup.backup.name')))
                    ->filter(fn ($f) => str_ends_with($f, '.zip'))
                    ->sortByDesc(fn ($f) => $disk->lastModified($f))
                    ->values();

                $newestFile = $files->first();
                if ($newestFile && $newestFile === $filePath) {
                    session()->flash('error', trans('notifications.backup_is_active'));

                    return redirect()->back();
                }

                $disk->delete($filePath);
                session()->flash('success', trans('notifications.cleanup_successful_subject_title'));
                $this->logActivity(trans('log.actions.deleted'), trans('log.models.backup.deleted', ['date' => Carbon::parse()->format('Y-m-d')]));

                return redirect()->back();
            } else {
                abort(404, "The backup file doesn't exist.");
            }

        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }
}
