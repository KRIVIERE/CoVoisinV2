<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $fillable = ['title', 'date', 'category', 'description', 'userId', 'status', 'pointsNumber', 'updated_at', 'created_at'];

}
//todo Récupérer requests.id et offers.id par la session ou le choix fait par l'utilisateur
