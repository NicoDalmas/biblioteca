<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles; // para usar permisos/roles


//MODELO TEMPORAL, LUEGO HAY QUE MIGRARLO AL MODELO USER
class UserLibrary extends Model
{
    use HasRoles;
    use SoftDeletes;
 
    protected $table = 'users';
    protected $primaryKey = 'id';    
    protected $fillable = ['name', 'email', 'password', 'rol_id'];

    public function rol(){
        return $this->hasOne('App\Rol');
    }

    public function movements(){
        return $this->hasMany('App\Movement');
    }

   /* public function books()
    {
        return $this->belongsToMany('App\Book');
    } */

}
