<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing2 extends Model
{
     // Table name
     protected $table = 'pricing2';
     // Primary key
     protected $primaryKey = 'pricing2_id';
     // Timestamps
     public $timeStamps = true;
 
     // Create relationship
     public function user(){
         return $this->belongsTo('App\User');
     }
}
