<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;

class trainnow extends Model
{
    protected $table = 'train_videos';

    protected $fillable = ['name','description','youtube_url', 'image_url', 'pdf_url'];

    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    

    public function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->video)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 400]);
        return $embed->getHtml();
    }
}
   
