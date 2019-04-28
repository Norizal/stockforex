<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
     // Table name
     protected $table = 'icon';
     // Primary key
     protected $primaryKey = 'icon_id';
     // Timestamps
     public $timeStamps = true;
 
     // Create relationship
     public function user(){
         return $this->belongsTo('App\User');
     }
}
