<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing3 extends Model
{
     // Table name
     protected $table = 'pricing3';
     // Primary key
     protected $primaryKey = 'pricing3_id';
     // Timestamps
     public $timeStamps = true;
 
     // Create relationship
     public function user(){
         return $this->belongsTo('App\User');
     }
}
