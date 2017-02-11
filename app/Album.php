<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable=[
        'album',
        'year',
        'post_id'

    ];
    public function tracks(){

        return $this->hasMany('App\Song');
    }
}
