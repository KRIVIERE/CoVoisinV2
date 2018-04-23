<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $fillable = ['title', 'date', 'category', 'description', 'userId', 'status', 'pointsNumber', 'updated_at', 'created_at'];
}
