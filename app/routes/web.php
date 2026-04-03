<?php

use App\Http\Controllers\AcadmiceYearController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\AdminEraController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\BookSheetController;
use App\Http\Controllers\BookSheetsOrderController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ClassRooms\ClassRoomsController;
use App\Http\Controllers\ClothesController;
use App\Http\Controllers\ClothesOrderController;
use App\Http\Controllers\ExchangeBondController;
use App\Http\Controllers\ExcptionFeesController;
use App\Http\Controllers\fee_invoiceController;
use App\Http\Controllers\fund_accountsController;
use App\Http\Controllers\GardController;
use App\Http\Controllers\Grades\GradesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OutOrderController;
use App\Http\Controllers\Parents\MyParentsController;
use App\Http\Controllers\PaymentPartsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\promotionController;
use App\Http\Controllers\ReciptPaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\schedulesController;
use App\Http\Controllers\SchoolFeeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\Students\StudentsController;
use App\Http\Controllers\UserController;
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

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('/', [HomeController::class, 'index'])->name(
                'dashboard',
            );

            Route::name('profile.')
                ->prefix('profile')
                ->controller(ProfileController::class)
                ->group(function () {
                    Route::get('/profile', 'edit')->name('edit');
                    Route::patch('/profile', 'update')->name('update');
                    Route::delete('/profile', 'destroy')->name('destroy');
                });

            Route::name('grade.')
                ->prefix('grade')
                ->controller(GradesController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id}/show', 'show')->name('show');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                });
            Route::prefix('class-rooms')
                ->name('class-rooms.')
                ->controller(ClassRoomsController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id}/show', 'show')->name('show');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/tammen/{id}', 'tammen')->name('tammen');
                });
            Route::name('parents.')
                ->prefix('parents')
                ->controller(MyParentsController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::get('{id}/edit', 'edit')->name('edit');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id}/show', 'show')->name('show');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                    Route::post('/Import_Excel', 'Excel_Import')->name(
                        'import_excel',
                    );
                });
            Route::prefix('students')
                ->controller(StudentsController::class)
                ->name('students.')
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::get('{id}/edit', 'edit')->name('edit');
                    Route::get('{id}/destroy', 'softDelete')->name(
                        'destroy',
                    );
                    Route::get('/{id}/show', 'show')->name('show');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/graduated', 'graduated')->name(
                        'graduated',
                    );
                    Route::get('/restore/{id}', 'restore')->name(
                        'restore',
                    );
                    Route::get('/forceDelete/{id}', 'forceDelete')->name(
                        'forceDelete',
                    );
                    Route::post('/Import_Excel', 'Excel_Import')->name(
                        'import_excel',
                    );
                });
            Route::prefix('academic-year')
                ->name('academic_year.')
                ->controller(AcadmiceYearController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id}/show', 'show')->name('show');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                });
            Route::prefix('jobs')
                ->name('jobs.')
                ->controller(JobController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::get('{id}/edit', 'edit')->name('edit');
                    Route::get('/destroy/{id}', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id}/show', 'show')->name('show');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                });
            Route::prefix('employees')
                ->name('employees.')
                ->controller(UserController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::get('{id}/edit', 'edit')->name('edit');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id}/return', 'return_emp')->name(
                        'return',
                    );
                    Route::get('/{id}/show', 'show')->name('show');
                    Route::get('/return_list', 'return_list')->name(
                        'return_list',
                    );
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                    Route::post('/Import_Excel', 'Excel_Import')->name(
                        'import_excel',
                    );
                });
            Route::prefix('school-fees')
                ->name('school-fees.')
                ->controller(SchoolFeeController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/{id}/edit', 'edit')->name('edit');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id}/show', 'show')->name('show');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                });
            Route::prefix('promotion')
                ->name('promotion.')
                ->controller(PromotionController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/store', 'store')->name('store');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                });
            Route::prefix('fee-invoice')
                ->name('fee-invoice.')
                ->controller(fee_invoiceController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/{student_id}/create', 'create')->name(
                        'create',
                    );
                    Route::post('/store', 'store')->name('store');
                    Route::get('/{id}/edit', 'edit')->name('edit');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id?}/show', 'show')->name('show');
                });
            Route::prefix('receipt-payment')
                ->name('receipt-payment.')
                ->controller(ReciptPaymentController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/{id}/create', 'create')->name('create');
                    Route::post('/store', 'store')->name('store');
                    Route::get('/{id}/edit', 'edit')->name('edit');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id?}/show', 'show')->name('show');
                    Route::get('/{id?}/print', 'print')->name('print');
                    Route::get('/payall', 'payall');
                });
            Route::prefix('except-fee')
                ->name('except-fee.')
                ->controller(ExcptionFeesController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('{id}/create', 'create')->name('create');
                    Route::post('/store', 'store')->name('store');
                    Route::get('/{id}/edit', 'edit')->name('edit');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id?}/show', 'show')->name('show');
                });
            Route::prefix('payment-parts')
                ->name('payment-parts.')
                ->controller(PaymentPartsController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('{id}/create', 'create')->name('create');
                    Route::post('/store', 'store')->name('store');
                    Route::get('/{id}/edit', 'edit')->name('edit');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/{id}/destroy', 'destroy')->name(
                        'destroy',
                    );
                    Route::get('/{id?}/show', 'show')->name('show');
                    Route::get('/{id?}/pay', 'pay')->name('pay');
                    Route::post('/submit_pay', 'submit_pay')->name(
                        'submit_pay',
                    );
                });

            Route::group(['prefix' => 'labs', 'controller' => LaboratoryController::class], function () {
                Route::get('/', 'index')->name('labs.index');
                Route::get('/create', 'create')->name('labs.create');
                Route::post('/store', 'store')->name('labs.store');
                Route::get('/{id}/edit', 'edit')->name('labs.edit');
                Route::post('/update', 'update')->name('labs.update');
                Route::get('/{id}/destroy', 'destroy')->name('labs.destroy');
                Route::get('/{id?}/show', 'show')->name('labs.show');
            });
            Route::name('report.')
                ->prefix('report')
                ->controller(ReportController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('Students_export', 'ExportStudents')->name(
                        'export_student',
                    );
                    Route::get('stocks_product', 'StockProducts')->name(
                        'stock_product',
                    );
                    Route::post('/exception_fee', 'exception_fee')->name(
                        'exception_fee',
                    );
                    Route::post('/stock', 'stock_product')->name('stock');
                    Route::post(
                        '/book_sheet_stock',
                        'book_sheet_stock',
                    )->name('book_sheet_stock');
                    Route::get('/books_sheets', 'books_sheets')->name(
                        'books_sheets',
                    );
                    Route::post(
                        '/student_report/{type}',
                        'student_report',
                    )->name('student_report');
                    Route::post('/student_tammen', 'student_tameen')->name(
                        'student_tameen',
                    );
                    Route::get('/clothes_stock', 'clothes_stocks')->name(
                        'clothes_stock',
                    );
                    Route::post('/clothe_stock', 'clothe_stock')->name(
                        'clothes_stock',
                    );
                    Route::post('/payment_status', 'payment_status')->name(
                        'payment_status',
                    );
                    Route::post('/fees_invoices', 'fees_invoices')->name(
                        'fees_invoices',
                    );
                    Route::post('/payments', 'payments')->name('payments');
                    Route::post('/payment_parts', 'payment_parts')->name(
                        'payment_parts',
                    );
                    Route::post('/credit', 'credit')->name('credit');
                    Route::get('/school_fees', 'school_fees')->name(
                        'school_fees',
                    );
                    Route::post('/final_year', 'final_year')->name(
                        'final_year',
                    );
                });
            Route::prefix('classes')
                ->name('classes.')
                ->controller(ClassesController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                    Route::get(
                        '/add_students/{class}',
                        'add_students',
                    )->name('add_students');
                    Route::get('/tammen/{class}', 'tammen')->name(
                        'tammen',
                    );
                    Route::post(
                        '/add_students_submit',
                        'add_students_submit',
                    )->name('add_students_submit');
                    Route::get('/show/{id}', 'show')->name('show');
                    Route::get('/destroy/{id}', 'destroy')->name(
                        'destroy',
                    );
                });
            Route::group(['prefix' => 'ajax'], function () {
                Route::get('/get_classRooms/{id}', [
                    StudentsController::class,
                    'getclasses',
                ]);
                Route::get('/get_classRooms_fee/{id}', [
                    SchoolFeeController::class,
                    'getclasses',
                ]);
                Route::get('/get_jobs/{id}', [
                    UserController::class,
                    'getjobs',
                ]);
                Route::post('/fast_add', [
                    StudentsController::class,
                    'fast_add_student',
                ]);
            });
            Route::prefix('backup')
                ->name('backup.')
                ->controller(BackupController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::get('/download/{file_name}', 'download')->name(
                        'download',
                    );
                    Route::get('/delete/{file_name}', 'delete')->name(
                        'delete',
                    );
                });
            Route::prefix('permission')
                ->name('roles.')
                ->controller(RoleController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/store', 'store')->name('store');
                    Route::get('/{id}/edit', 'edit')->name('edit');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/destroy/{id}', 'destroy')->name('delete');
                    Route::get('/show/{id}', 'show')->name('show');
                });
            Route::name('admin-era.')
                ->prefix('admin-era')
                ->controller(AdminEraController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/employee/{id}', 'emp_active')->name(
                        'update',
                    );
                });
            Route::name('settings.')
                ->prefix('settings')
                ->controller(SettingsController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/update', 'update')->name('update');
                    Route::post(
                        '/update_password',
                        'update_password',
                    )->name('update_password');
                });
            Route::name('order.')
                ->prefix('orders')
                ->controller(OrderController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/show/{id}', 'show')->name('show');
                    Route::get('/edit/{id}', 'edit')->name('edit');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/delete/{id}', 'destroy')->name('destroy');
                    Route::get('/store', 'store')->name('store');
                });
            Route::name('outorder.')
                ->prefix('outorder')
                ->controller(OutOrderController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/show/{id}', 'show')->name('show');
                    Route::get('/edit/{id}', 'edit')->name('edit');
                    Route::get('/create', 'new_transfer')->name(
                        'new_transfer',
                    );
                    Route::post('/update', 'update')->name('update');
                    Route::get('/delete/{id}', 'destroy')->name('destroy');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/transfer', 'transfer')->name(
                        'orders.transfer',
                    );
                    Route::post(
                        '/submit_transfer',
                        'submit_transfer',
                    )->name('submit_transfer');
                });
            Route::name('gard.')
                ->prefix('gard')
                ->controller(GardController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::get('/show/{id}', 'show')->name('show');
                    Route::get('/edit/{id}', 'edit')->name('edit');
                    Route::post('/store', 'store')->name('store');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/destroy/{id}', 'destroy')->name(
                        'destroy',
                    );
                });
            Route::name('exchange-bonds.')
                ->prefix('exchange-bonds')
                ->controller(ExchangeBondController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create/{id}', 'create')->name('create');
                    Route::post('/store', 'store')->name('store');
                    Route::get('/edit/{id}', 'edit')->name('edit');
                    Route::post('/update', 'update')->name('update');
                    Route::get('/print/{id}', 'print')->name('print');
                    Route::get('/destroy/{id}', 'destroy')->name(
                        'destroy',
                    );
                });
            Route::name('stocks.')->prefix('stocks')->controller(StockController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::post('/update', 'update')->name('update');
                Route::post('/stocks_submit', 'stocks_submit')->name('submit');
                Route::get('/delete/{id}', 'destroy')->name('destroy');
                Route::get('/tawreed/{id}', 'new_tawreed_order')->name('tawreed');
            });
            Route::group(['prefix' => 'orders', 'controller' => OrderController::class], function () {
                Route::get('/', 'index')->name('order.index');
                Route::get('/show/{id}', 'show')->name('order.show');
                Route::get('/edit/{id}', 'edit')->name('order.edit');
                Route::post('/update', 'update')->name('order.update');
                Route::get('/delete/{id}', 'destroy')->name('order.destroy');
                Route::get('/store', 'store')->name('order.store');
            });
            Route::group(['prefix' => 'outorder', 'controller' => OutOrderController::class], function () {
                Route::get('/', 'index')->name('outorder.index');
                Route::get('/show/{id}', 'show')->name('outorder.show');
                Route::get('/edit/{id}', 'edit')->name('outorder.edit');
                Route::get('/create', 'new_transfer')->name('outorder.new_transfer');
                Route::post('/update', 'update')->name('outorder.update');
                Route::get('/delete/{id}', 'destroy')->name('outorder.destroy');
                Route::post('/store', 'store')->name('outorder.store');
                Route::post('/transfer', 'transfer')->name('orders.transfer');
                Route::post('/submit_transfer', 'submit_transfer')->name('outorder.submit_transfer');
            });
            Route::group(['prefix' => 'gard', 'controller' => GardController::class], function () {
                Route::get('/', 'index')->name('gard.index');
                Route::get('/create', 'create')->name('gard.create');
                Route::get('/show/{id}', 'show')->name('gard.show');
                Route::get('/edit/{id}', 'edit')->name('gard.edit');
                Route::post('/store', 'store')->name('gard.store');
                Route::post('/update', 'update')->name('gard.update');
                Route::get('/destroy/{id}', 'destroy')->name('gard.destroy');
            });
            Route::group(['prefix' => 'clothe', 'controller' => ClothesController::class], function () {
                Route::get('/', 'index')->name('clothes.index');
                Route::post('/store', 'store')->name('clothes.store');
                Route::get('/destroy/{id}', 'destroy')->name('clothe.destroy');
                Route::post('/update', 'update')->name('clothe.update');
            });
            Route::group(['prefix' => 'clothes_order', 'controller' => ClothesOrderController::class], function () {
                Route::get('//{type}', 'index')->name('clothes_order.index');
                Route::get('/tawreed', 'tawreed')->name('clothes_order.tawreed');
                Route::get('/delete/{id}', 'destroy')->name('clothes_order.delete');
                Route::get('/show/{id}', 'show')->name('clothes_order.show');
                Route::get('/edit/{id}', 'edit')->name('clothes_order.edit');
                Route::post('/update', 'clothes_stock_update')->name('clothes_stock_submit.update');
                Route::post('/clothes_stock_submit', 'clothes_stock_submit')->name('clothes_stock_submit.store');
                Route::get('/clothes_out_order', 'clothes_out_order')->name('clothes_out_order.create');
                Route::get('/clothes_out_order_edit/{id}', 'clothes_out_order_edit')->name('clothes_out_order.edit');
                Route::get('/clothes_gard', 'clothes_order_gard')->name('clothes.gard');
                Route::post('/clothes_out_order_submit', 'clothes_out_order_submit')->name('clothes_out_order.store');
                Route::post('/clothes_out_order_update', 'clothes_out_order_update')->name('clothes_out_order.update');
                Route::post('/clothes_order_gard_submit', 'clothes_order_gard_submit')->name('clothes_gard.submit');
                Route::get('/clothes_order_gard_edit/{id}', 'clothes_order_gard_edit')->name('clothes_inventory_order.edit');
                Route::post('/clothes_order_gard_update', 'clothes_order_gard_update')->name('clothes_inventory_order.update');
                Route::get('/pay/{id}', 'pay')->name('clothes_order.pay');
                Route::get('/print/{id}', 'clothes_out_order_print')->name('clothes_order.print');
            });
            Route::group(['prefix' => 'books_sheets', 'controller' => BookSheetController::class], function () {
                Route::get('/', 'index')->name('books_sheets.index');
                Route::post('/store', 'store')->name('books_sheets.store');
                Route::post('/update', 'update')->name('books_sheets.update');
                Route::get('/destroy/{id}', 'destroy')->name('books_sheets.destroy');
            });
            Route::group(['prefix' => 'bookSheetsOrder', 'controller' => BookSheetsOrderController::class], function () {
                Route::get('/{type}', 'index')->name('bookSheetsOrder.index');
                Route::get('/create_tawreed', 'create_tawreed')->name('bookSheetsOrder.create');
                Route::post('/store_tawreed', 'store_tawreed')->name('bookSheetsOrder.store_tawreed');
                Route::get('/edit_tawreed/{id}', 'edit_tawreed')->name('bookSheetsOrder.edit_tawreed');
                Route::post('/update_tawreed', 'update_tawreed')->name('bookSheetsOrder.update_tawreed');
                Route::get('/create_sarf', 'create_sarf')->name('bookSheetsOrder.create_sarf');
                Route::post('/store_sarf', 'store_sarf')->name('bookSheetsOrder.store_sarf');
                Route::get('/edit_sarf/{id}', 'edit_sarf')->name('bookSheetsOrder.edit_sarf');
                Route::post('/update_sarf', 'update_sarf')->name('bookSheetsOrder.update_sarf');
                Route::get('/create_gard', 'create_gard')->name('bookSheetsOrder.create_gard');
                Route::post('/submit_gard', 'submit_gard')->name('bookSheetsOrder.submit_gard');
                Route::get('/edit_gard/{id}', 'edit_gard')->name('bookSheetsOrder.edit_gard');
                Route::post('/update_gard', 'update_gard')->name('bookSheetsOrder.update_gard');
                Route::get('/show/{id}', 'show')->name('bookSheetsOrder.show');
                Route::get('/pay/{id}', 'pay')->name('bookSheetsOrder.pay');
                Route::get('/destroy/{id}', 'destroy')->name('bookSheetsOrder.destroy');
            });
            Route::prefix('schedule')
                ->name('schedule.')
                ->controller(schedulesController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                });
            Route::prefix('fund-account')
                ->name('fund-account.')
                ->controller(fund_accountsController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                });
            Route::get('/school_setting', [
                SettingsController::class,
                'index',
            ])->name('create-new-school');
            Route::get('/monitor', [
                ActivityLogController::class,
                'index',
            ])->name('system-lookup');
        });

        Livewire::SetUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });
    });

require __DIR__.'/auth.php';
Route::get('/start_setup', [
    SetupController::class,
    'showSetupForm',
])->name('setup');
Route::post('/setup', [SetupController::class, 'processSetup'])->name(
    'config',
);
if (config('app.env') == 'local') {
    require __DIR__.'/local.php';
}
