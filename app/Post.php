<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;


    protected $date=['deleted_at'];
    protected $fillable=[
'text',
        'body'

    ];
    public function albums(){

        return $this->hasMany('App\Album');
    }
    public function tracks(){

        return $this->hasMany('App\Song');
    }

}


