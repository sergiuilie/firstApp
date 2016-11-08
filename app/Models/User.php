<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'birthDate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $dates = [
        'birthDate'
    ];

    public function addresses() {
        return $this->hasMany(Address::class, 'user_id', 'id');
    }

    public function contacts() {
        return $this->hasMany(UserContacts::class, 'user_id', 'id');
    }

}
