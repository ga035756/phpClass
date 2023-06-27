<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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
    return view('welcome');
})->name('home');

Route::get('/a', function () {
    return 'Hello,Laravel!!';
});

Route::get('/b', function () {
    echo 'hi,<br>';
    echo 'david';
});

Route::get('/add1/{a?}/{b?}', function ($a, $b = null) {
    if ($b == null) {
        return $a * $a;
    } else {
        return $a + $b;
    }
});

Route::redirect('/aaa', 'https://www.google.com')->name('google');
Route::view('/bbb', 'welcome');

Route::get('/ccc', function () {
    // return Redirect::route('home');
    return redirect()->intended('b');
    // return to_route('google');
});

Route::get('/AAA', function () {
    return view('home');
});
//不使用 controller
// http://localhost/helloLaravel/public/add/4/6
// Route::get('{op}/{a}/{b}', function ($op,$a, $b) {

//     switch ($op) {
//         case 'add':
//             $answer = $a + $b;
//             $op ='+';
//             break;
//         case 'sub':
//             $answer = $a - $b;
//             $op ='-';
//             break;
//         case 'mul':
//             $answer = $a * $b;
//             $op ='x';
//             break;
//         case 'div':
//             $answer = $a / $b;
//             $op ='/';
//             break;
//     }
//     return view('home')
//     ->with('answer', $answer)
//     ->with('a',$a)
//     ->with('b',$b)
//     ->with('op',$op);
// });

Route::get('pow/{a}/{b}', [PowHomeController::class, 'pow']);
Route::get('{op}/{a}/{b}', HomeController::class);

Route::view('/form', 'form');
Route::post('/form', [FromController::class, 'process']);
