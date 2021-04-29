<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route:: resource('blogs','BlogController'); //blogs is called plug.it's use for introduce the BlogController.we can use anynames for plug.this plug name use in web browser for open the blogcontroller.
Route:: resource('supplier','SupplierController');

// we make all changes in layout page
Route::get('layout', function () {
    return view('dash.layout');
});
// original dashboard page.don't any changes here
Route::get('dash', function () {
    return view('dash.dashboard');
});

Route::get('lte', function () {
    return view('lte.layout');
});
