<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
     public function purchases (){

    	return $this->hasMany("App\Purchase");
    }

      public function sale (){

    	return $this->belongsTo("App\Sale");
    }

}
