<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HIWNew extends Model
{
     // Table name
   protected $table = 'hiw_new';
   // Primary key
   protected $primaryKey = 'hiw_new_id';
   // Timestamps
   public $timeStamps = true;

   // Create relationship
   public function user(){
       return $this->belongsTo('App\User');
   }
}
