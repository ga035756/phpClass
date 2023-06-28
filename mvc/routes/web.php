<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Mycheck;
use Illuminate\Support\Facades\File;



Route::get('/', function () {
    return view('blade')->with('value',30);
});
// Route::get('/', function () {
//     return view('form');
// });

Route::post('/',HomeController::class)->middleware(Mycheck::class);

Route::get('/test',function(){
return File::get(public_path().'/test.html');
});
