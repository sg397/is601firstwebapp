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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', function () {
    echo 'contact submit';
    $data = request()->all();
    // dd($data);
    echo 'Email:'.$data['email'];
    echo 'Msg:'.$data['body'];

    //return view('welcome');
});
