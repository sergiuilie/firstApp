<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    public $timestamps = true;

    public $table = 'shops';

    protected $fillable = [
        'produs', 'user_id', 'cantitate'
    ];
}