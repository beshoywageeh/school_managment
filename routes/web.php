<?php

use App\Http\Controllers\{AcadmiceYearController,
    AdminEraControllerController,
    BackupController,
    ClassRooms\ClassRoomsController,
    ExcptionFeesController,
    fee_invoiceController,
    Grades\GradesController,
    HomeController,
    JobController,
    MonitorSystemController,
    Parents\MyParentsController,
    ProfileController,
    promotionController,
    ReciptPaymentController,
    SchoolFeeController,
    SettingsController,
    SetupController,
    Students\StudentsController,
    UserController,PaymentPartsController,ReportController,RoleController,AdminEraController};
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/*
 |
 | Web Routes
 |
 |
 | Here is where you can register web routes for your application. These
 | routes are loaded by the RouteServiceProvider and all of them will
 | be assigned to the "web" middleware group. Make something great!
 |
 */


Route::group(

    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });


        Route::middleware('auth')->group(function () {

            Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
            Route::group(['controller' => ProfileController::class], function () {
                Route::get('/profile', 'edit')->name('profile.edit');
                Route::patch('/profile', 'update')->name('profile.update');
                Route::delete('/profile', 'destroy')->name('profile.destroy');
            });

            Route::group(['prefix' => 'grade', 'controller' => GradesController::class], function () {
                Route::get('/index', 'index')->name('grade.index');
                Route::get('/{id}/destroy', 'destroy')->name('grade.destroy');
                Route::get('/{id}/show', 'show')->name('grade.show');
                Route::post('/store', 'store')->name('grade.store');
                Route::post('/update', 'update')->name('grade.update');
            });
            Route::group(['prefix' => 'class_rooms', 'controller' => ClassRoomsController::class], function () {
                Route::get('/index', 'index')->name('class_rooms.index');
                Route::get('/{id}/destroy', 'destroy')->name('class_rooms.destroy');
                Route::get('/{id}/show', 'show')->name('class_room.show');
                Route::post('/store', 'store')->name('class_rooms.store');
                Route::post('/update', 'update')->name('class_rooms.update');
            });
            Route::group(['prefix' => 'parents', 'controller' => MyParentsController::class], function () {
                Route::get('/index', 'index')->name('parents.index');
                Route::get('/create', 'create')->name('parents.create');
                Route::get('{id}/edit', 'edit')->name('parents.edit');
                Route::get('/{id}/destroy', 'destroy')->name('parents.destroy');
                Route::get('/{id}/show', 'show')->name('parent.show');
                Route::post('/store', 'store')->name('parents.store');
                Route::post('/update', 'update')->name('parents.update');
                Route::post('/Import_Excel','Excel_Import')->name('parents.import_excel');
            });
            Route::group(['prefix' => 'students', 'controller' => StudentsController::class], function () {
                Route::get('/index', 'index')->name('Students.index');
                Route::get('/create', 'create')->name('Students.create');
                Route::get('{id}/edit', 'edit')->name('Students.edit');
                Route::get('/{id}/destroy', 'destroy')->name('Students.destroy');
                Route::get('/{id}/show', 'show')->name('Students.show');
                Route::post('/store', 'store')->name('Students.store');
                Route::post('/update', 'update')->name('Students.update');
                Route::get('/{id?}/pdf', 'pdf')->name('Students.pdf');
                Route::post('/Import_Excel', 'Excel_Import')->name('Students.import_excel');

            });
            Route::group(['prefix' => 'academic_year', 'controller' => AcadmiceYearController::class], function () {
                Route::get('/index', 'index')->name('academic_year.index');
                Route::get('/{id}/destroy', 'destroy')->name('academic_year.destroy');
                Route::get('/{id}/show', 'show')->name('academic_year.show');
                Route::post('/store', 'store')->name('academic_year.store');
                Route::post('/update', 'update')->name('academic_year.update');
             });
            Route::group(['prefix' => 'jobs', 'controller' => JobController::class], function () {
                Route::get('/index', 'index')->name('jobs.index');
                Route::get('/create', 'create')->name('jobs.create');
                Route::get('{id}/edit', 'edit')->name('jobs.edit');
                Route::get('/{id}/destroy', 'destroy')->name('jobs.destroy');
                Route::get('/{id}/show', 'show')->name('jobs.show');
                Route::post('/store', 'store')->name('jobs.store');
                Route::post('/update', 'update')->name('jobs.update');
            });
            Route::group(['prefix' => 'employees', 'controller' => UserController::class], function () {
                Route::get('/index', 'index')->name('employees.index');
                Route::get('/create', 'create')->name('employees.create');
                Route::get('{id}/edit', 'edit')->name('employees.edit');
                Route::get('/{id}/destroy', 'destroy')->name('employees.destroy');
                Route::get('/{id}/show', 'show')->name('employees.show');
                Route::post('/store', 'store')->name('employees.store');
                Route::post('/update', 'update')->name('employees.update');
                Route::post('/Import_Excel', 'Excel_Import')->name('employees.import_excel');
            });
            Route::group(['prefix' => 'school_fees', 'controller' => SchoolFeeController::class], function () {
                Route::get('/index', 'index')->name('schoolfees.index');
                Route::get('/create', 'create')->name('schoolfees.create');
                Route::get('{id}/edit', 'edit')->name('schoolfees.edit');
                Route::get('/{id}/destroy', 'destroy')->name('schoolfees.destroy');
                Route::get('/{id}/show', 'show')->name('schoolfees.show');
                Route::post('/store', 'store')->name('schoolfees.store');
                Route::post('/update', 'update')->name('schoolfees.update');
            });
            Route::group(['prefix' => 'promotion', 'controller' => promotionController::class], function () {
                Route::get('/index', 'index')->name('promotion.index');
                Route::get('/create', 'create')->name('promotion.create');
                Route::post('/store', 'store')->name('promotion.store');
                Route::get('/{id}/destroy', 'destroy')->name('promotions.destroy');
            });
            Route::group(['prefix' => 'fee_invoice', 'controller' => fee_invoiceController::class], function () {
                Route::get('/index', 'index')->name('fee_invoice.index');
                Route::get('/{student_id}/create', 'create')->name('fee_invoice.create');
                Route::post('/store', 'store')->name('fee_invoice.store');
                Route::get('/{id}/edit', 'edit')->name('fee_invoice.edit');
                Route::post('/update', 'update')->name('fee_invoice.update');
                Route::get('/{id}/destroy', 'destroy')->name('fee_invoice.destroy');
                Route::get('/{id?}/show', 'show')->name('fee_invoice.show');

            });
            Route::group(['prefix' => 'Recipt_Payment', 'controller' => ReciptPaymentController::class], function () {
                Route::get('/index', 'index')->name('Recipt_Payment.index');
                Route::get('/{id}/create', 'create')->name('Recipt_Payment.create');
                Route::post('/store', 'store')->name('Recipt_Payment.store');
                Route::get('/{id}/edit', 'edit')->name('Recipt_Payment.edit');
                Route::post('/update', 'update')->name('Recipt_Payment.update');
                Route::get('/{id}/destroy', 'destroy')->name('Recipt_Payment.destroy');
                Route::get('/{id?}/show', 'show')->name('Recipt_Payment.show');
                Route::get('/{id?}/print', 'print')->name('Recipt_Payment.print');

            });
            Route::group(['prefix' => 'except_fee', 'controller' => ExcptionFeesController::class], function () {
                Route::get('/index', 'index')->name('except_fee.index');
                Route::get('{id}/create', 'create')->name('except_fee.create');
                Route::post('/store', 'store')->name('except_fee.store');
                Route::get('/{id}/edit', 'edit')->name('except_fee.edit');
                Route::post('/update', 'update')->name('except_fee.update');
                Route::get('/{id}/destroy', 'destroy')->name('except_fee.destroy');
                Route::get('/{id?}/show', 'show')->name('except_fee.show');
            });
            Route::group(['prefix' => 'payment_parts', 'controller' => PaymentPartsController::class], function () {
                Route::get('/index', 'index')->name('payment_parts.index');
                Route::get('{id}/create', 'create')->name('payment_parts.create');
                Route::post('/store', 'store')->name('payment_parts.store');
                Route::get('/{id}/edit', 'edit')->name('payment_parts.edit');
                Route::post('/update', 'update')->name('payment_parts.update');
                Route::get('/{id}/destroy', 'destroy')->name('payment_parts.destroy');
                Route::get('/{id?}/show', 'show')->name('payment_parts.show');
                Route::get('/{id?}/pay', 'pay')->name('payment_parts.pay');
                Route::post('/submit_pay', 'submit_pay')->name('payment_parts.submit_pay');
            });
            Route::group(['prefix'=>'reports','controller'=>ReportController::class],function (){
                Route::get('report','index')->name('report.index');
                Route::get('Students_export','ExportStudents')->name('reports.export_student');
                Route::post('/export','export_submit')->name('export.submit');
            });

            Route::group(['prefix' => 'ajax'], function () {
                Route::get('/get_classRooms/{id}', [StudentsController::class, 'getclasses']);
                Route::get('/get_classRooms_fee/{id}', [SchoolFeeController::class, 'getclasses']);
                Route::get('/get_jobs/{id}', [UserController::class, 'getjobs']);
            });
            Route::group(['prefix' => 'backup', 'controller' => BackupController::class], function () {
                Route::get('/index', 'index')->name('backup.index');
                Route::get('/create', 'create')->name('backup.create');
                Route::get('/download/{file_name}', 'download')->name('backup.download');
                Route::get('/delete/{file_name}', 'delete')->name('backup.delete');
            });
            Route::group(['prefix' => 'permission', 'controller' => RoleController::class], function () {
                Route::get('/index', 'index')->name('roles.index');
                Route::get('/create', 'create')->name('roles.create');
                Route::post('/store', 'store')->name('roles.store');
                Route::get('/{id}/edit', 'edit')->name('roles.edit');
                Route::post('/update', 'update')->name('roles.update');
                Route::get('/destroy/{id}', 'destroy')->name('roles.delete');

            });
            Route::group(['prefix'=>'admin_era','controller'=>AdminEraController::class],function(){
                Route::get('/index','index')->name('admin_era.index');
                Route::post('/employee/{id}', 'emp_active')->name('employee.update');
            });
            Route::group(['prefix' => 'settings', 'controller' => SettingsController::class], function () {
                Route::get('/index', 'index')->name('setting.index');
                Route::post('/update','update')->name('settings.update');
                Route::post('/update_password', 'update_password')->name('setting.update_password');
            });
            Route::get('/School_Setting', [SettingsController::class, 'index'])->name('create_new_school');
            Route::get('/monitor', MonitorSystemController::class)->name('system_lookup');
        });
    }
);
require __DIR__ . '/auth.php';
Route::get('/', [SetupController::class, 'showSetupForm'])->name('setup')->middleware('setup');
Route::post('/setup', [SetupController::class, 'processSetup'])->name('config')->middleware('setup');
if (config('app.env') == 'local') {
    require __DIR__ . '/local.php';
}
