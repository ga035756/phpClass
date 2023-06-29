<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table = 'Phone';
    protected $primaryKey = 'hid';
    protected $keyType = 'int';
    public $timestamps = false;
}
