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
    $data = [
        'name' => 'Pietro',
        'lastname' => 'Armillotta',
        'isLoggedIn' => false
    ];
    return view('home', $data);
});

Route::get('/blog', function () {
    $data = [
        'name' => 'Pietro',
    ];
    return view('blog', $data);
});

Route::get ('/about', function() {
    $data = [
        'name' => 'Pietro',
        'phone' => '+39 333 6787 987',
        'address' => 'via Monte Napoleone 17'
    ];
    return view('about', $data);
});