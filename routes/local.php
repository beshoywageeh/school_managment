<?php
use Illuminate\Support\Facades\Route;
Route::get('fake', function () {
    $models = [
        'class_room',
        'Grade',
        'My_parents',
        'User',
        'settings',
        'Students',
        'Image'
    ];

    foreach ($models as $model) {
        \Artisan::call('make:factory', [
            'name' => $model . 'Factory',
            '--model' => $model
        ]);

        \Artisan::call('make:seeder', [
            'name' => $model . 'TableSeeder'
        ]);
        dd(\Artisan::output());
    }
});
Route::get('mif',function(){
    \Artisan::call('migrate:fresh --seed');
    dd(\Artisan::output());
});
?>