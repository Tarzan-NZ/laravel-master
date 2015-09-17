<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['first_name', 'last_name', 'age', 'slug', 'profile_image'];
}
