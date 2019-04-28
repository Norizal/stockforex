<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HIWVideo extends Model
{
     // Table name
   protected $table = 'hiw_video';
   // Primary key
   protected $primaryKey = 'hiw_video_id';
   // Timestamps
   public $timeStamps = true;

   // Create relationship
   public function user(){
       return $this->belongsTo('App\User');
   }
}
