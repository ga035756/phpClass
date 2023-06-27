<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// class FromController extends Controller
class FromController extends PowHomeController
{
    //
    // function __invoke(Request $request)
    function process(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $op = $request->op;
        // $answer = $request->answer;
        // switch ($op) {
        //     case 'add':
        //         $answer = $a + $b;
        //         $op = '+';
        //         break;
        //     case 'sub':
        //         $answer = $a - $b;
        //         $op = '-';
        //         break;
        //     case 'mul':
        //         $answer = $a * $b;
        //         $op = 'x';
        //         break;
        //     case 'div':
        //         $answer = $a / $b;
        //         $op = '/';
        //         break;
        // }
        // return view('home')
        //     ->with('answer', $answer)
        //     ->with('a', $a)
        //     ->with('b', $b)
        //     ->with('op', $op);
        if ($op == 'pow') {
            return parent::pow($a, $b);
        } else {
            return parent::__invoke($op, $a, $b);
        }
    }
}
