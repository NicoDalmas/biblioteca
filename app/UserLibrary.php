<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//MODELO TEMPORAL, LUEGO HAY QUE MIGRARLO AL MODELO USER
class UserLibrary extends Model
{
   
    // Instancio la tabla 'jugos' 
    protected $table = 'users';
    
    // Declaro los campos que usaré de la tabla 'jugos' 
    protected $fillable = [ 'id', 'name', 'email', 'password', 'rol_id'];

}
