<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing1 extends Model
{
     // Table name
     protected $table = 'pricing1';
     // Primary key
     protected $primaryKey = 'pricing1_id';
     // Timestamps
     public $timeStamps = true;
 
     // Create relationship
     public function user(){
         return $this->belongsTo('App\User');
     }
}
