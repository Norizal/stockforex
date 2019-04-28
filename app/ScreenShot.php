<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScreenShot extends Model
{
    // Table name
    protected $table = 'screenshot';
    // Primary key
    protected $primaryKey = 'screenshot_id';
    // Timestamps
    public $timeStamps = true;

    // Create relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
