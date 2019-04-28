<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HIWNoti extends Model
{
     // Table name
   protected $table = 'hiw_noti';
   // Primary key
   protected $primaryKey = 'hiw_noti_id';
   // Timestamps
   public $timeStamps = true;

   // Create relationship
   public function user(){
       return $this->belongsTo('App\User');
   }
}
