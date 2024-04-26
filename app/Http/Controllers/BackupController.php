<?php

namespace App\Http\Controllers;


class BackupController extends Controller
{
    public function index()
    {
        $data['backs'] = [];

        foreach (\File::allFiles(public_path('/backup')) as $file) {
            $data['backs'][] = array(
                "filename" => $file->getFilename(),
                "filesize" => \Number::filesize(filesize($file->getRealPath()) * 1), // returns size in bytes
                "fileext" => $file->getExtension(),
                'filepath' => $file->getRealPath(),
                'filecreated' => \Carbon\Carbon::createFromTimestamp(filectime($file->getRealPath())),
            );
        }
        $data['backups'] = array_reverse($data['backs']);
        //        return $data['backups'];

        return view('backend.backup.index', ['data' => $data]);
    }
    public function create()
    {
        $name = \Carbon\Carbon::now()->format('Y-m-d-H-i-s');
        \Artisan::call('backup:run --only-db --filename=' . $name . '.zip');
        flash()->addSuccess('Backup created successfully');
        return redirect()->back();
    }
}
