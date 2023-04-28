<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings');
});



Route::get('/studentdashboard', function () {
    return view('studentdashboard');
});


Route::get('/adminportal', function () {
    return view('adminportal');
});

Route::get('/admindashboard', function () {
    return view('admindashboard');
});

Route::get('/searchpage', function () {
    return view('searchpage');
});

Route::get('/departmentspage', function () {
    return view('departmentspage');
});

Route::get('/computing', function () {
    return view('computing');
});

Route::get('/searchresults', function () {
    return view('searchresults');
});