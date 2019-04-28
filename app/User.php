<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Create relationship
    public function mvmm(){
        return $this->hasMany('App\MVMM');
    }

    // Create relationship
    public function mvtd(){
        return $this->hasMany('App\MVTD');
    }

    // Create relationship
    public function mvlink(){
        return $this->hasMany('App\MVLINK');
    }

     // Create relationship
     public function about(){
        return $this->hasMany('App\AboutUs');
    }

    // Create relationship
    public function terms(){
        return $this->hasMany('App\Terms');
    }

     // Create relationship
     public function contacts(){
        return $this->hasMany('App\Contact');
    }

     // Create relationship
     public function faqs(){
        return $this->hasMany('App\Faq');
    }

     // Create relationship
     public function pricing1s(){
        return $this->hasMany('App\Pricing1');
    }

    // Create relationship
    public function pricing2s(){
        return $this->hasMany('App\Pricing2');
    }

    // Create relationship
    public function pricing3s(){
        return $this->hasMany('App\Pricing3');
    }


     // Create relationship
     public function screenshots(){
        return $this->hasMany('App\ScreenShot');
    }

     // Create relationship
     public function hiwanalysiss(){
        return $this->hasMany('App\HIWAnalysis');
    }

     // Create relationship
     public function hiwnews(){
        return $this->hasMany('App\HIWNew');
    }
     // Create relationship
     public function hiwnotis(){
        return $this->hasMany('App\HIWNoti');
    }

     // Create relationship
     public function hiwvideos(){
        return $this->hasMany('App\HIWVideo');
    }

     // Create relationship
     public function hiwwebs(){
        return $this->hasMany('App\HIWWeb');
    }

    // Create relationship
    public function icons(){
        return $this->hasMany('App\Icon');
    }

}
