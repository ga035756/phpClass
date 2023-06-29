<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bill_new2';
    protected $primaryKey = 'bid';
    protected $keyType = 'int';
    public $timestamps = false;
}

