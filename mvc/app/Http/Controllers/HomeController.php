<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProcessModel;

class HomeController extends Controller
{
    private $model;
    function __construct()
    {
        $this->model = new ProcessModel();
    }

    function __invoke(Request $request)
    {
        return view('home',$this->model->do($request->o,$request->a,$request->b));
    }
}