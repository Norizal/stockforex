<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Table name
   protected $table = 'contact';
   // Primary key
   protected $primaryKey = 'contact_id';
   // Timestamps
   public $timeStamps = true;

   // Create relationship
   public function user(){
       return $this->belongsTo('App\User');
   }
}
