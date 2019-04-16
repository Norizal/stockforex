<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table = 'posts';
    // Primary key
    protected $primaryKey = 'id';
    // Timestamps
    public $timeStamps = true;

    // Create relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
