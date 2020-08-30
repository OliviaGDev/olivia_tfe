<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    public $timestamps = false;

    protected $table = 'estimates';

    protected $fillable = [
      'ref','summerize','proposition','composition'
    ];

    public function clients()
    {
      return $this->belongsTo('App\Client');
    }


    public function categories()
    {
      return $this->belongsTo('App\Category');
    }

    public function status()
    {
      return $this->belongsTo('App\Status');
    }
}
