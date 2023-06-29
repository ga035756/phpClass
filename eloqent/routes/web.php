<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\UserInfo;
use App\Models\House;
use App\Models\Phone;
use App\Models\Bill;



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
    $users = Userinfo::all();
    // $users = Userinfo::where('uid', 'A01')->orWhere('uid', 'A02')->get();
    foreach ($users as $user) {
        foreach ($user->lives as $house) {
            echo "{$user->uid},{$user->cname},{$house->address} '<br>'";
        }
    }
});

Route::get('insert/{uid}/{cname?}', function ($uid, $cname = null) {
    $user = new Userinfo();
    $user->uid = $uid;
    $user->cname = $cname;
    $user->save();
});

Route::get('update/{uid}/{cname?}', function ($uid, $cname = null) {
    $user = Userinfo::find($uid);
    $user->cname = $cname;
    $user->save();
    echo 'done';
});

Route::get('delete/{uid}/', function ($uid) {
    $user = Userinfo::find($uid);
    $user->delete();
});

Route::get('/query/{uid}', function ($uid) {
    $user = Userinfo::find($uid);
    $lives = $user->lives;
    foreach ($lives as $house) {
        echo $house->address . '<br>';
    }
});

Route::get('live/{uid}/{hid}', function ($uid, $hid) {
    $user = Userinfo::find($uid);
    $house = House::find($hid);
    // var_dump($house);die();
    $user->lives()->save($house);

    echo 'done';
});

Route::get('/house', function () {
    foreach (House::all() as $house) {
        if (count($house->own) != 0) {
            foreach ($house->own as $phone) {
                echo $house->hid . " " . $house->address . " " . $phone->tel . "<br>";
            }
        } else {
            echo $house->hid . " " . $house->address . " doesn't has tel<br>";
        }
    }
});

Route::get('/addphone/{hid}/{tel}', function ($hid, $tel) {
    $house = House::find($hid);
    $phone = new Phone();
    $phone->tel = $tel;
    $house->own()->save($phone);
    echo 'done';
});

Route::get('/bill/{address}', function ($address) {
    $house = House::where('address', $address)->first();
    foreach ($house->bills as $bill) {
        echo $bill->tel . $bill->dd . $bill->fee . "<br>";
    }
});


Route::get('/newpk', function () {
    $bills = DB::select('select * from bill_new2');
    $pk = 0;
    foreach ($bills as $bill) {
        DB::update('update bill_new2 set bid = ? where tel = ? and dd = ?', [$pk, $bill->tel, $bill->dd]);
        $pk += 1;
    }
});

Route::get('/json', function () {
    $users = Userinfo::select('uid', 'cname')->get();
    $json = $users->toJson(JSON_UNESCAPED_UNICODE);
    return response($json)
        ->header('content-type', 'application/json')
        ->header('charset', 'utf-8');
});
