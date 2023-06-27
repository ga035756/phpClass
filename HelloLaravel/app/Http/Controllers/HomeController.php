<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __invoke($op, $a, $b)
    {
        switch ($op) {
            case 'add':
                $answer = $a + $b;
                $op = '+';
                break;
            case 'sub':
                $answer = $a - $b;
                $op = '-';
                break;
            case 'mul':
                $answer = $a * $b;
                $op = 'x';
                break;
            case 'div':
                $answer = $a / $b;
                $op = '/';
                break;
        }
        return view('home')
            ->with('answer', $answer)
            ->with('a', $a)
            ->with('b', $b)
            ->with('op', $op);
    }

    // function pow($a, $b)
    // {
    //     return view('home')
    //         ->with('answer', pow($a, $b))
    //         ->with('a', $a)
    //         ->with('b', $b)
    //         ->with('op', '^');
    // }
}

class PowHomeController extends HomeController {
    function pow($a, $b)
    {
        return view('home')
            ->with('answer', pow($a, $b))
            ->with('a', $a)
            ->with('b', $b)
            ->with('op', '^');
    }
}