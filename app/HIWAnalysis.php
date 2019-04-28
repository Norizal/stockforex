<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HIWAnalysis extends Model
{
   // Table name
   protected $table = 'hiw_analysis';
   // Primary key
   protected $primaryKey = 'hiw_analysis_id';
   // Timestamps
   public $timeStamps = true;

   // Create relationship
   public function user(){
       return $this->belongsTo('App\User');
   }
}
