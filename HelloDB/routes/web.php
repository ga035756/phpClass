<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;


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
    // $cname = DB::scalar('select cname from UserInfo where uid in(?)',['A01']);
    // $users = DB::select('select * from UserInfo where uid in(?, ?)',['A01', 'A010']);
    // foreach($users as $user){
    //     echo $user->cname . '<br>';
    // }
    // echo $cname;

    //Use DB
    // $users = DB::select('select * from userinfo');
    // return view('userinfo')->with('users', $users);

    $users = DB::table('Userinfo')
        ->select('UserInfo.uid', 'cname', 'address')
        ->leftJoin('Live', 'UserInfo.uid', '=', 'Live.uid')
        ->leftJoin('House', 'Live.hid', '=', 'House.hid')
        ->orderBy('UserInfo.uid')
        ->orwhere('Userinfo.uid', 'A01')
        ->orwhere('Userinfo.uid', 'A02')
        ->dd();
    return view('userinfo')->with('users', $users);
});

Route::get('/test', function () {
    try {
        DB::transaction(function () {
            DB::delete('delete form Live');
            DB::insert('insert into UserInfo(uid) values("A01")');
        });
    } catch (Throwable $e) {
        report($e);
        // abort(503);
    }
    return response()
        ->header('Access-Control-Allow-Origin', '*');
});

Route::get('/test1', function () {

    return Response::view('test1')
        ->header('Access-Control-Allow-Origin', '*');
});
