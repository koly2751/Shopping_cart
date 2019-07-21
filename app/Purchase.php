<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
   public function product () {

   	return $this->belongsTo("App\Product");
   }

   public function stock(){
   	return $this->belongsTo("App\Stock");
   }

    public function account(){
   	return $this->belongsTo("App\Account");
   }
}
