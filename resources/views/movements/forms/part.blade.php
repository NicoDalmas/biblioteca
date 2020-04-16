@if ( !empty ( $movements->id) )

	<!-- FORM FOR UPDATE   -->
	<div class="form-group">
		<label for="id" class="negrita">Movement ID:</label> 
		<div>
		<input class="form-control" required="required" name="id" type="number" id="id" value="{{ $movements->id }}"  readonly onmousedown="return false"> 
		</div>
	</div>
	<div class="form-group">
		<label for="user_id" class="negrita">User ID:</label> 
		<div>
		<input class="form-control" placeholder="user_id" required="required" name="user_id" type="number" id="user_id" value="{{ $movements->user_id }}"> 
		</div>
	</div>
		<div class="form-group">
		<label for="book_id" class="negrita">Book ID:</label> 
		<div>
		<input class="form-control" placeholder="book_id" required="required" name="book_id" type="number" id="book_id" value="{{ $movements->book_id }}"> 
		</div>
	</div>
	<div class="form-group">
		<label for="state" class="negrita">State:</label> 
		<div>
		<input class="form-control" placeholder="Required/Returned" required="required" name="state" type="text" id="state" value="{{ $movements->state }}"> 
		</div>
	</div>
	

@else

	<!-- FORM FOR CREATE   -->
		<div class="form-group">
		<label for="id" class="negrita">Movement ID:</label> 
		<div>
		<input class="form-control" required="required" name="id" type="number" id="id" readonly onmousedown="return false"> 
		</div>
	</div>
	<div class="form-group">
		<label for="user_id" class="negrita">User ID:</label> 
		<div>
		<input class="form-control" placeholder="user_id" required="required" name="user_id" type="number" id="user_id"> 
		</div>
	</div>
		<div class="form-group">
		<label for="book_id" class="negrita">Book ID:</label> 
		<div>
		<input class="form-control" placeholder="book_id" required="required" name="book_id" type="number" id="book_id"> 
		</div>
	</div>
	<div class="form-group">
		<label for="state" class="negrita">State:</label> 
		<div>
		<input class="form-control" placeholder="Required/Returned" required="required" name="state" type="text" id="state"> 
		</div>
	</div>

@endif
<button type="submit" class="btn btn-info">Save</button>
<a href="{{ url('/movements') }}" class="btn btn-warning">Cancel</a>