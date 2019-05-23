<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "page@welcome");
Route::post('/login', "auth@login");
Route::get('/logout', "auth@logout");
Route::get('/command/{command}', function ($command) {
    Artisan::call($command);
});
Route::get('/invoice/{data}',"page@pdf");
Route::view('/showinvoice',"pdf.tandaterima");
Route::post('/getsession', 'auth@getsession');
Route::post('/forgotpassword', "auth@forgotpassword");
Route::middleware('authcheck')->group(function () {
    Route::post('/export','crud@export');
    Route::view('/dashboard', 'index');
    Route::post('/delete/{table}', "crud@delete");
    Route::post('/table/generateedit', 'jsontable@showedit');
    Route::post('/action/cpassword', 'auth@reset_password');
    Route::middleware('superadmincheck')->group(function () {
        Route::get('/admin', 'page@admin');
        Route::post('/table/admin', 'jsontable@admin');
        Route::post('/action/users', 'crud@tambah_user');
        Route::post('/action/update/users', 'crud@edit_user');

        Route::post('/table/lokasiunit', 'jsontable@lokasiunit');
        Route::post('/action/lokasiunit', 'crud@tambah_lokasiunit');
        Route::post('/action/update/lokasiunit', 'crud@edit_lokasiunit');
    });
    Route::middleware('admincheck')->group(function () {
        Route::post('/table/manager', 'jsontable@manager');
        Route::get('/manager', 'page@manager');
        Route::post('/action/users', 'crud@tambah_user');
        Route::post('/action/update/users', 'crud@edit_user');
    });
    Route::middleware('managercheck')->group(function () {
        Route::post('/table/marketing', 'jsontable@marketing');
        Route::post('/action/marketing', 'crud@tambah_marketing');
        Route::post('/action/update/marketing', 'crud@edit_marketing');
        Route::get('/marketing/trackmarketing','page@trackmarketing');
        Route::post('/maps/trackmarketing','crud@trackmarketing');
    });
    Route::get('/banner', 'page@banner');
    Route::view('/banner/tambah', 'page.managebanner.tambah');
    Route::get('/banner/edit/{id}', 'page@editbanner');
    Route::post('/action/banner', 'crud@tambah_banner');
    Route::post('/action/update/banner', 'crud@edit_banner');
    Route::post('/action/update/order_banner', 'crud@edit_order_banner');
    Route::get('/table/banner', 'jsontable@banner');
    Route::get('/table/detailuserbanner/{id}', 'jsontable@detailuserbanner');

    Route::view('/unit', 'page.manageunit.index');
    Route::get('/unit/tambah', 'page@tambah_unit');
    Route::post('/action/unit', 'crud@tambah_unit');
    Route::post('/action/update/unit', 'crud@edit_unit');
    Route::get('/unit/edit/{id}', 'page@edit_unit');
    Route::post('/action/update/order_unit_file', 'crud@edit_order_unit_file');
    Route::get('/table/unit', 'jsontable@unit');
    Route::get('/table/unit_file/{id}', 'jsontable@unit_file');
    Route::post('/table/showdeskripsi', 'jsontable@unit_deskripsi');
    Route::post('/unit/show_photo', 'jsontable@showphoto');
    Route::post('/action/unit_file', 'crud@tambah_foto_unit');

    Route::get('/marketing', 'page@marketing');
    Route::view('/totalsales', 'page.totalsales.index');

    Route::get('/chart/sales', 'chart@sales');
    Route::get('/chart/unit', 'chart@unit');
    Route::get('/chart/kinerjasales', 'chart@kinerjasales');
    Route::get('/chart/groupunit', 'chart@groupunit');
    Route::get('/chart/dp', 'chart@dp');
    Route::get('/chart/commission', 'chart@commission');

    Route::get('/table/sale', 'jsontable@sale');
    Route::post('/table/detailtotalsales', 'jsontable@detailtotalsales');
    Route::post('/action/proceedsales', 'crud@proceedsales');

    Route::view('/message', 'page.message.index');
    Route::get('/message/tambah', 'page@tambah_message');
    Route::get('/message/edit/{id}', 'page@edit_message');
    Route::post('/action/message', 'crud@tambah_message');
    Route::post('/action/update/message', 'crud@edit_message');
    Route::get('/table/message', 'jsontable@message');

    Route::view('/transactionlog', 'page.transactionlog.index');
    Route::post('/table/log', 'jsontable@log');
    Route::get('/table/totallog', 'jsontable@totallog');
});

