<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Userinfo extends Model
{
    use HasFactory;
    protected $table = 'UserInfo';
    protected $primaryKey = 'uid';
    protected $keyType = 'string';
    public $timestamps = false;

    function lives(): BelongsToMany
    {
        return $this->belongsToMany(
            House::class,
            'Live', 
            'uid', //Live.uid
            'hid'  //Live.hid
        );
    }
}
