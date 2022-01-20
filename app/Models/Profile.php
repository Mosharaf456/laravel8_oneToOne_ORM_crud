<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];

    // 1st way as laravel convention,automatical finsout foriegn key without mention
    // public function owner()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

    // owner_id is a foriegn key of users table
    public function user()
    {
        return $this->belongsTo('App\Models\User','owner_id');
    }
}
