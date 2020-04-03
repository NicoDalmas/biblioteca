@if ( !empty ( $users->id) ) <!-- //userLibrary o variable q venga del controller?  -->
 
 <!-- FORM FOR UPDATE   -->
 <div class="form-group">
	 <label for="name" class="negrita">Name:</label> 
	 <div>
		 <input class="form-control" placeholder="Name" required="required" name="name" type="text" id="name" value="{{ $users->name }}"> 
	 </div>
 </div>
 
 <div class="form-group">
	 <label for="email" class="negrita">Email:</label> 
	 <div>
		 <input class="form-control" placeholder="example@example.com" required="required" name="email" type="text" id="email" value="{{ $users->email }}"> 
	 </div>
 </div>
 
 <div class="form-group">
	 <label for="password" class="negrita">Password:</label> 
	 <div>
		 <input class="form-control" placeholder="*****" required="required" name="password" type="text" id="password" value="{{ $users->password }}"> 
	 </div>
 </div>
 
 <div class="form-group">
	 <label for="rol" class="negrita">Rol:</label> 
	 <div>
		 <input class="form-control" placeholder="user" required="required" name="rol_id" type="text" id="rol_id" value="{{ $users->rols }}"> 
	 </div>
 </div>
 
 
@else
 

 <!-- FORM FOR CREATE   -->
 <div class="form-group">
	 <label for="name" class="negrita">Name:</label> 
	 <div>
		<input class="form-control" placeholder="Name" required="required" name="name" type="text" id="name"> 
	 </div>
 </div>
 
 <div class="form-group">
	 <label for="email" class="negrita">Email:</label> 
	 <div>
	 	<input class="form-control" placeholder="example@example.com" required="required" name="email" type="text" id="email"> 
	 </div>
 </div>
 
 <div class="form-group">
	 <label for="password" class="negrita">Password:</label> 
	 <div>
	 	<input class="form-control" placeholder="*****" required="required" name="password" type="text" id="password"> 
	 </div>
 </div>
 
 <div class="form-group">
	 <label for="rol" class="negrita">Role:</label> 
	 <div>
		 <input class="form-control" placeholder="user" required="required" name="rol_id" type="text" id="rol_id"> 
	 </div>
 </div>


@endif

<button type="submit" class="btn btn-info">Save</button>
<a href="{{ route('/admin/users') }}" class="btn btn-warning">Cancel</a>