<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable=[
        'track_title',
        'duration',
        'album_id',
        

    ];
    public function albums(){

        return $this->belongsToMany('App\Album');
    }
}
