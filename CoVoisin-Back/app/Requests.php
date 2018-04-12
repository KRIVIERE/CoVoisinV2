<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = ['title', 'date', 'description', 'userId', 'status', 'pointsNumber'];

}
