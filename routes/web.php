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
    return 'haloooooo';
});
//array JSON
Route::get('coba1', function () {
    return ['raja','raju','rajo'];
});
//array JSON
Route::get('coba2', function () {
    return [
        'Nama' => 'Raja Parningotan',
        'NIS' => '3103120185',
        'Kelas' => 'XII RPL 6',
    ];
});
Route::get('coba3', function () {
    return response()->json(
        [
            'Nama' => 'Raja Parningotan',
            'NIS' => '3103120185',
            'Kelas' => 'XII RPL 6',
        ],201
    );
});