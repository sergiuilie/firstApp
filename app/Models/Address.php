<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    public $timestamps = false;
    public $table = 'address';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'street', 'number', 'zip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
    

}
