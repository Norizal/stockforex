<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    // Table name
    protected $table = 'faqs';
    // Primary key
    protected $primaryKey = 'faqs_id';
    // Timestamps
    public $timeStamps = true;

    // Create relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
