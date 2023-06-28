<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessModel extends Model
{
    use HasFactory;

    function do ($o, $a, $b) {
        switch($o) {
            case 'add':
                $ans = $a + $b;
                $o = '+';
                break;
            case 'sub':
                $ans = $a - $b;
                $o = '-';
                break;
            case 'mul':
                $ans = $a * $b;
                $o = '*';
                break;
            case 'div':
                $ans = $a / $b;
                $o = '/';
                break;
            case 'pow':
                $ans = pow($a, $b);
                $o = '^';
                break;
        }

        return [
            'a' => $a,
            'b' => $b,
            'o' => $o,
            'answer' => $ans
        ];
    }
}