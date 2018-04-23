<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $fillable = ['offerTitle', 'offerDate', 'offerCategory', 'offerDescription', 'offerUserId', 'offerStatus', 'offerPointsNumber', 'offerUpdated_at', 'offerCreated_at'];
}