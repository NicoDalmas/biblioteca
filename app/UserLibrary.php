<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//MODELO TEMPORAL, LUEGO HAY QUE MIGRARLO AL MODELO USER
class UserLibrary extends Model
{
   
    use SoftDeletes;

    // Instancio la tabla 'jugos' 
    protected $table = 'users';
    
    protected $primaryKey = 'id';    

    // Declaro los campos que usaré de la tabla 'jugos' 
    protected $fillable = ['name', 'email', 'password', 'rol_id'];




}
