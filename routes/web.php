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

//string
Route::get('coba', function () {
    return ('Hola Senor *Spanish intensifies*');
});

//object jason
Route::get('coba1', function(){
    return ['Petra', 'Gunan', 'Kang Mus'];
});

//object jason
Route::get('coba2', function(){
    return [
        'Nama' => 'Nicolaus Bintang Nathanael',
        'Kelas' => 'XII RPL 5',
        'NIS' => 3103120163
    ];
});

//object json
Route::get('coba3', function(){
    return response()->json(
        [
            'Nama' => 'Nicolaus Bintang Nathanael',
            'Kelas' => 'XII RPL 5',
            'NIS' => 3103120163
        ], 201
    );
});

