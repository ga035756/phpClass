<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MyFormRequest;

class FormController extends Controller
{
    //
    function __invoke(MyFormRequest $request)
    {
        $request->validated();
        // echo $request->a;
        echo 'done';
    }
}
