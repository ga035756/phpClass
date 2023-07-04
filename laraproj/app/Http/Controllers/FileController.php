<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;


class FileController extends Controller
{
    function form()
    {
        return view('form');
    }

    function process(Request $request)
    {
        if ($request->hasFile('file1')) {
            $file1 = $request->file1;
            // $file1->hasName();
            // $file1->move(base_path().'/documents/',$file1->getClientOriginalName());
            $file1->store('documents');
            DB::insert(
                "insert into documents (uid,originalname,hasname) values(? ,? ,?)",
                [Auth::id(), $file1->getClientOriginalName(), $file1->hashName()]
            );
        }
        if ($request->hasFile('file2')) {
            $file2 = $request->file2;
            $file2->hashName();
            // $file2->move(base_path() . '/documents/', $file2->getClientOriginalName());
            $file2->store('documents');
        }
        // echo $file1->getClientOriginalName();
        // die();
        echo 'upload complete';
    }
}
