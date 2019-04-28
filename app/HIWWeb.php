<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HIWWeb extends Model
{
     // Table name
   protected $table = 'hiw_web';
   // Primary key
   protected $primaryKey = 'hiw_web_id';
   // Timestamps
   public $timeStamps = true;

   // Create relationship
   public function user(){
       return $this->belongsTo('App\User');
   }
}
