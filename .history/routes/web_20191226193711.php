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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contack');
});

Route::get('/user', function () {
    // $data;
    // array_push($data[''],'nama','syawal');
    // dd($data);
//    $data = ['syawal','fian','ulhaq']; //array
   // $data['nama'] = request ('nama');  // array assoc

   $data = array(array('nama' => "Syawal","kelas" => "A3"));

    dd($data);
    // return view('users',compact('data')); 
});