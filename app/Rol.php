<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rols';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public function users(){
        return $this->belongsTo('App\Rol');
    }
}
