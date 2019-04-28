<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
   // Table name
   protected $table = 'about_us';
   // Primary key
   protected $primaryKey = 'about_us_id';
   // Timestamps
   public $timeStamps = true;

   // Create relationship
   public function user(){
       return $this->belongsTo('App\User');
   }
}
