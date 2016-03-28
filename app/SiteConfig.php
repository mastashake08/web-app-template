<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    //
    public $fillable = [
      'site-title',
      'front_page_title',
      'front_page_body',
    ];
}
