<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Post extends Model


    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User');
    }

        public function org(){
        return $this->belongsTo('App\Org');
    }
}
