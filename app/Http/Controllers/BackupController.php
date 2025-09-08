<?php

namespace App\Http\Controllers;

use App\Http\Traits\LogsActivity;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Log;
use Spatie\Backup\Commands\ListCommand;
use Spatie\Backup\Helpers\Format;
use Spatie\Backup\Tasks\Monitor\BackupDestinationStatus;
use Spatie\Backup\Tasks\Monitor\BackupDestinationStatusFactory;
use App\Http\Traits\SchoolTrait;

class BackupController extends Controller
{
    use LogsActivity, SchoolTrait;

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
        $school=$this->getSchool();

        return view('backend.backup.index', compact('backups', 'rows','school'));
    }

    public function create()
    {
        try {
            // start the backup process
            Artisan::call('backup:run', ['--only-db' => 'true']);
            $output = Artisan::output();
            // log the results
            Log::info("Backpack\BackupManager -- new backup started from admin interface \r\n".$output);
            session()->flash('success', trans('notifications.backup_successful_body', ['application_name' => config('app.name'), 'disk_name' => config('backup.backup.destination.disks')[0]]));
            $this->logActivity('نسخه إحتياطية', 'بتاريخ'.Carbon::parse()->format('Y-M-d'));

            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }
    }

    public function download($file_name)
    {
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
        try {

            $disk = Storage::disk(config('backup.backup.destination.disks')[0]);
            if ($disk->exists(config('backup.backup.name').'/'.$file_name)) {
                $disk->delete(config('backup.backup.name').'/'.$file_name);
                session()->flash('success', trans('notifications.cleanup_successful_subject_title'));
                $this->logActivity('حذف نسخه إحتياطية', 'بتاريخ'.Carbon::parse()->format('Y-m-d'));

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