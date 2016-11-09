<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

    public $timestamps = true;
    public $table = 'notes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

}
