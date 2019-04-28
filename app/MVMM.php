<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MVMM extends Model
{
    
    // Table name
    protected $table = 'mv_mm';
    // Primary key
    protected $primaryKey = 'mv_mm_id';
    // Timestamps
    public $timeStamps = true;

    // Create relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
