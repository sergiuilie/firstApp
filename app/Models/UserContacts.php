<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserContacts extends Model {

    public $timestamps = false;
    public $table = 'user_contacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'reference_user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'reference_user_id');
    }

}
