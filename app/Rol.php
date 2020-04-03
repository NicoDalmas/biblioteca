<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
        // Instancio la tabla 'jugos' 
    protected $table = 'rols';
    
    // Declaro los campos que usaré de la tabla 'jugos' 
    protected $fillable = [ 'id', 'name'];
}
