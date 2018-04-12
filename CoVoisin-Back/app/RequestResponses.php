<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestResponses extends Model
{
    protected $fillable = ['requestId', 'userId', 'description', 'status', 'descriptionStatus', 'updated_at', 'created_at'];

}
