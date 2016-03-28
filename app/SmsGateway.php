<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmsGateway extends Model
{
    //
    public $fillable = [
      'name',
      'gateway',
    ];
}
