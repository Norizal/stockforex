<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MVTD extends Model
{
    // Table name
    protected $table = 'mv_td';
    // Primary key
    protected $primaryKey = 'mv_td_id';
    // Timestamps
    public $timeStamps = true;

    // Create relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
