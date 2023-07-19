<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

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

// Route::get('/{locale?}', function ($locale = 'en') {
//     App::setLocale($locale);
//     return __('message.button');
// }); //->whereIn('locale', ['en', 'tw']);

// Route::get('/json/{locale?}', function ($locale = 'en') {
//     App::setLocale($locale);
//     return view('home');
// });

Route::get('/test', function () {
    return response('hello web', 200)
        ->header('Access-Control-Allow-Origin', '*');
});
Route::get('/form', function () {
    return view('form');
});
Route::post('/form', function (Request $request) {
    return $request->text . "add done";
});
Route::put('/form', function (Request $request) {
    return $request->text . "put done";
});

//#!/bin/sh
// gcloud cloud-shell ssh --ssh-flag="-L 8080:localhost:80" --ssh-flag="-L 21:localhost:2121" --ssh-flag="-L 33306:localhost:3306"

