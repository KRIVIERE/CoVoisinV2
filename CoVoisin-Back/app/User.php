<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['id', 'username', 'password', 'pointsNumber', 'email', 'lastName', 'firstName', 'phoneNumber', 'updated_at', 'created_at'];
}