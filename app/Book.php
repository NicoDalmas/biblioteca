<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
	// Instancio la tabla 'jugos' 
    protected $table = 'books';
    
    // Declaro los campos que usaré de la tabla 'jugos' 
    protected $fillable = [ 'name', 'author', 'subject', 'date', 'description', 'image'];


}
