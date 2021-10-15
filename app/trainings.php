<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainings extends Model
{
    // Table Name
    protected $table = 'trainings';

    protected $fillable = ['title','description','admission','date','venue','image_url'];


    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    // public function user(){
    //     return $this->belongsTo('App\User');
    // } 
    





    public function onsite_list()
    {
        return $this->hasMany(onsite_list::class);
    }
}
