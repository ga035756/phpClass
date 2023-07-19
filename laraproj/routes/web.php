<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\FileController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function () {
    return view('home');
})->name('home'); //->middleware('auth');

Route::get('/file', [FileController::class, 'form'])
    ->middleware('auth')
    ->name('form');

Route::post('/file', [FileController::class, 'process']);

Route::get('/list', function () {
    $docs = DB::select('select * from documents where uid = ?', [Auth::id()]);
    foreach ($docs as $doc) {
        echo $doc->originalname . '<br>';
    }
});

Route::get('/setcookie', function () {
    Cookie::queue('name', 'David', 2);
});
Route::get('/getcookie', function () {
    echo Cookie::get('name');
});

require __DIR__ . '/auth.php';
