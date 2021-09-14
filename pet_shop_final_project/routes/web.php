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

// MIDDLEWARE
Route::group(['middleware' => ['auth']], function () {
    //ADMIN
    //Manajemen User
    Route::resource('manajemenuser', 'UserController');
    // TES DASHBOARD (Routingnya sedang diseting pakai ini)
    Route::get('/dashboard', 'AdminController@index');
    // Manajemen Produk 
    Route::get('/cetak_user', 'UserController@cetak_pdf');
    // CRUD Uom 
    Route::resource('uom', 'UomController');
    // CRUD Product
    Route::resource('product', 'ProductController');
    Route::get('/cetak_product', 'ProductController@cetak_pdf');
    // CRUDE PAYMENT 
    Route::resource('payment', 'PaymentController');
});

// TAMPILAN MENU SHOP 
Route::get('/shop', 'ProductController@index_shop');

Route::get('/details/{product_id}', 'ProductController@showdetails');

// HOME SCREEN 
Route::get('/home', function () {
    // return view('layout.master_fashi');
    return view('partial.main');
});
// Handling CSS rendering
Route::get('/', 'HomeController@index')->name('home');

// TESTING MENU 
Route::get('/cart', function () {
    // return view('layout.master_fashi');
    return view('pages.cart');
});

// Route::get('/details', function () {
//     // return view('layout.master_fashi');
//     return view('pages.product');
// });
Route::post('/pesanproduk/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@checkout');
Route::get('/isicard/{id}', 'PesanController@isicard');

// Route::get('/shop', function () {
//     // return view('layout.master_fashi');
//     return view('pages.shop');
// });

Route::get('/checkout', function () {
    // return view('layout.master_fashi');
    return view('pages.checkout');
});

Auth::routes();



//DASHBOARD ADMIN Test View
Route::get('/dbadmin', function () {
    return view('admin.dashboardadmin');
});
Route::get('/manajemenuserview', function () {
    return view('admin.manajemenuser.index');
});
Route::get('/edituser', function () {
    return view('admin.manajemenuser.edit');
});
