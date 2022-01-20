<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // alter native of fillable
    //mass assignment error solve
    protected $guarded = [];

    // user defined date to use diffForhHumans() method
    protected $dates = ['date_of_birth'];

    public function profile()
    {
        // owner_id is the foreign key of the user id  in the profile database of their profiles
        return $this->hasOne('App\Models\Profile','owner_id');
    }
}
