<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "Comment";

    public function tintuc(){
    	return $this->belongsTo('App\TinTuc','idTinTuc','id');
    }
}
