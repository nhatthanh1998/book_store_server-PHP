<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    public function author(){
        return $this->belongsTo('App\Author');
    }
}
