<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Phone;
use App\Models\Bill;

class House extends Model
{
    use HasFactory;
    protected $table = 'House';
    protected $primaryKey = 'hid';
    protected $keyType = 'int';
    public $timestamps = false;

    function own(): HasMany
    {
        return $this->hasMany(
            Phone::class,
            'hid', // phone.hid\
            'hid', //house.hid
        );
    }

    function bills():HasManyThrough{
        return $this->hasManyThrough(
            Bill::class,
            Phone::class,
            'hid',//Phone.hid
            'tel',//bill.tel
            'hid',//house.hid
            'tel'//phone.tel
        );
    }
}
