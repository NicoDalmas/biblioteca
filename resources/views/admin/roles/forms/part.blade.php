@if ( !empty ( $roles->id) ) <!-- //  -->
 
 <!-- FORM FOR UPDATE   -->
 <div class="form-group">
	 <label for="name" class="negrita">Name:</label> 
	 <div>
		 <input class="form-control" placeholder="Name" required="required" name="name" type="text" id="name" value="{{ $roles->name }}"> 
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
 

@endif

<button type="submit" class="btn btn-info">Save</button>
<a href="{{ url('/admin/roles') }}" class="btn btn-warning">Cancel</a>