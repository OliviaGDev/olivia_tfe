<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $timestamps = false;

    protected $table = 'clients';

    protected $fillable = [
      'company','street','number','postal_box','postal_code','country_id','contact','email','phone','tva','logo','city'
    ];


    public function clients()
      {
        return $this->belongsTo('App\Client');
      }

      public function countries()
      {
        return $this->belongsTo('App\Country');
      }


}
