<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $table = 'categories';

    protected $fillable = [
      'name'
    ];

    public function modules()
    {
      return $this->hasMany('App\Module');
    }

    public function estimates()
    {
      return $this->hasOne('App\Estimate');
    }
}
