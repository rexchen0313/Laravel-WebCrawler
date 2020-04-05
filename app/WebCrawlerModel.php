<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebCrawlerModel extends Model
{
    protected $table = 'webcrawler';
    public $timestamps = false;
    protected $guarded = ['id'];
}
