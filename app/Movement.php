<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    
	// Instancio la tabla 'jugos' 
    protected $table = 'movements';
    
    // Declaro los campos que usaré de la tabla 'jugos' 
    protected $fillable = [ 'user_id', 'book_id', 'state'];

}
