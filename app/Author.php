<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    public function book(){
        return $this->hasMany('App\Book');
    }
}
