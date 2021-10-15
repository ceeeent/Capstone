<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'username', 'email', 'firstname','lastname','password','country','company',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
public function is_admin(){

  
    if ($this->user_type == "user"){
       return "user";
   }elseif($this->user_type == "admin"){
       return "admin";
   
   }elseif($this->user_type == "super_admin"){
       return "super_admin";
   }
   
   }







   public function onsite_list()
   {
       return $this->hasMany(onsite_list::class);
   }






}
