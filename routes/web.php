<?php

use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;

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

Route::get('test',function(){


    Browsershot::url('https://www.google.com/')
    ->setScreenshotType('jpeg', 100)
    ->save('talha.png')->setNodeBinary('/usr/bin/node')->setNpmBinary('/usr/bin/npm');
});
