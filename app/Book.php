<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
	use SoftDeletes;

    protected $table = 'books';

    protected $primaryKey = 'id';    
    
    protected $fillable = [ 'name', 'author', 'subject', 'date', 'description'];
}
