<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movement extends Model
{
    use SoftDeletes;

    protected $table = 'movements';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'book_id', 'state', 'created_at'];

    public function users(){
        return $this->belongsToMany('App\UserLibrary');
    }

    public function books(){
        return $this->belongsToMany('App\Book');
    }

}
