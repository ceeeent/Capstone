<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class speaker extends Model
{
    protected $fillable = [
        'speaker_name', 'profession', 'company', 'position','image_url',
    ];


    public function trainlive()
    {
        return $this->hasMany(Trainlive::class);
    }
}
