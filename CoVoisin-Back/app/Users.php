<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['username', 'password', 'pointsNumber', 'email', 'lastName', 'firstName', 'phoneNumber', 'address'];
}
