<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Org extends Model
{
     //Table name
    protected $table = 'orgs';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
