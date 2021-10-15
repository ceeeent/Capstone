<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainlive extends Model
{

   
    protected $table = 'webinars';

    protected $fillable = ['title','webinars_description','webinars_date','image_url','admission','speaker_id'];

    public function speakers()
    {
      return $this->belongsTo(Speaker::class);
    }

}
