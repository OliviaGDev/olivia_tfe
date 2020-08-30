<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public $timestamps = false;

    protected $table = 'modules';

    protected $fillable = [
      'title','price','description'
    ];

  
    public function categories()
    {
      return $this->belongsToMany('App\Category');
    }
}
