<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MVLINK extends Model
{
     // Table name
     protected $table = 'mv_link';
     // Primary key
     protected $primaryKey = 'mv_link_id';
     // Timestamps
     public $timeStamps = true;
 
     // Create relationship
     public function user(){
         return $this->belongsTo('App\User');
     }
}
