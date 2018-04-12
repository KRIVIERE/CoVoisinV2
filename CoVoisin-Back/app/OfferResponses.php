<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferResponses extends Model
{
    protected $fillable = ['offerId', 'userId', 'description', 'status', 'descriptionStatus', 'updated_at', 'created_at'];
}
