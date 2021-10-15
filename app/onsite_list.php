<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class onsite_list extends Model
{
    protected $table = 'onsite_lists';

    protected $fillable = ['user_id','trainings_id','status'];


    public function User()
    {
      return $this->belongsTo(User::class);
    }

    public function trainings()
    {
      return $this->belongsTo(trainings::class);
    }

}
