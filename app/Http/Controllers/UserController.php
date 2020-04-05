<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLibrary;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
 
class UserController extends Controller
{
	// Leer Registros (Read) 
 
	public function index()
	{
	    $users = UserLibrary::all();
	    return view('admin.users.index', compact('users')); 
	}

	// Crear un Registro (Create) 
	 
	public function create()
	{
	    $users = UserLibrary::all();
	    return view('admin.users.create', compact('users'));
	}

	// Proceso de Creación de un Registro 
	 
	public function store(ItemCreateRequest $request)
	{
	    // Instancio al modelo Jugos que hace llamado a la tabla 'jugos' de la Base de Datos
	    $users = new UserLibrary; 
	 
	    // Recibo todos los datos del formulario de la vista 'crear.blade.php'
	    $users->name = $request->name;
	    $users->email = $request->email;
	    $users->password = bcrypt($request->password);
	    $users->rol_id = $request->rol_id;
	    
	    // Almacenos la imagen en la carpeta publica especifica, esto lo veremos más adelante 
	  //  $jugos->img = $request->file('img')->store('/');
	 
	    // Inserto todos los datos en mi tabla 'jugos' 
	    $users->save();
	 
	    // Hago una redirección a la vista principal con un mensaje 
	    return redirect('/admin/users')->with('message','Saved with Succes!');
	}

	//  Actualizar un registro (Update)
 
	public function edit($id)
	{
	    $users = UserLibrary::find($id);
	    return view('admin/users.update',['users'=>$users]);
	}

	// Proceso de Actualización de un Registro (Update)
 
	public function update(ItemUpdateRequest $request, $id)
	{        
	   //DEVUELVE TODO LO SOLICITADO, METODO MATI PARA PROBAR
	   // return $request->all();

		// Recibo todos los datos desde el formulario Actualizar
	    $users = UserLibrary::find($id);
	    $users->name = $request->name;
		$users->email = $request->email;
	    $users->password = bcrypt($request->password);
	    $users->rol_id = $request->rol_id;
	 
	    // Recibo la imagen desde el formulario Actualizar
	  /*  if ($request->hasFile('img')) {
	        $users->img = $request->file('img')->store('/');
	    }  */
	    
	    // Actualizo los datos en la tabla 'jugos'
	    $users->save();
	 
	    // Muestro un mensaje y redirecciono a la vista principal 
	    Session::flash('message', 'Edited with Succes !');
	    return Redirect::to('admin/users');
	}


	// Eliminar un Registro
	 
	public function delete($id)
	{
	    // Indicamos el 'id' del registro que se va Eliminar
	    $users = UserLibrary::find($id);
	 
	    // Elimino la imagen de la carpeta 'uploads', esto lo veremos más adelante
	    //$imagen = explode(",", $jugos->img);
	   // Storage::delete($imagen);
	        
	    // Elimino el registro de la tabla 'jugos' 
	    $users->delete();

	    // Muestro un mensaje y redirecciono a la vista principal 
	    Session::flash('message', 'Deleted with Succes !');
	    return Redirect::to('admin/users');
	}
	
}
