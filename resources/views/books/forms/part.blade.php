@if ( !empty ( $books->id) )

	<!-- FORM FOR UPDATE   -->
	<div class="form-group">
		<label for="id" class="negrita">ID:</label> 
		<div>
		<input class="form-control" required="required" name="id" type="text" id="id" value="{{ $books->id }}"  readonly onmousedown="return false"> 
		</div>
	</div>
	<div class="form-group">
		<label for="name" class="negrita">Name:</label> 
		<div>
		<input class="form-control" placeholder="Name" required="required" name="name" type="text" id="name" value="{{ $books->name }}"> 
		</div>
	</div>
	<div class="form-group">
		<label for="author" class="negrita">Author:</label> 
		<div>
		<input class="form-control" placeholder="Author" required="required" name="author" type="text" id="author" value="{{ $books->author }}"> 
		</div>
	</div>
	<div class="form-group">
		<label for="subject" class="negrita">Subject:</label> 
		<div>
		<input class="form-control" placeholder="Subject" required="required" name="subject" type="text" id="subject" value="{{ $books->subject }}"> 
		</div>
	</div>
	<div class="form-group">
		<label for="date" class="negrita">Date:</label> 
		<div>
		<input class="form-control" placeholder="date" required="required" name="date" type="number" id="date" value="{{ $books->date }}"> 
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="negrita">Description:</label> 
		<div>
		<input class="form-control" placeholder="Description" required="required" name="description" type="text" id="description" value="{{ $books->description }}"> 
		</div>
	</div>
	@if ( !empty ( $books->image) )
		<span>Current Image</span>
		<br>
		<img src="../../../uploads/{{ $books->image }}" width="200" class="img-fluid">
	@else
		Aún no se ha cargado una imagen para este producto
	@endif 

@else

	<!-- FORM FOR CREATE   -->
	<div class="form-group">
		<label for="name" class="negrita">Name:</label> 
		<div>
		<input class="form-control" placeholder="Name" required="required" name="name" type="text" id="name"> 
		</div>
	</div>
	<div class="form-group">
		<label for="author" class="negrita">Author:</label> 
		<div>
		<input class="form-control" placeholder="Author" required="required" name="author" type="text" id="author"> 
		</div>
	</div>
	<div class="form-group">
		<label for="subject" class="negrita">Subject:</label> 
		<div>
		<input class="form-control" placeholder="Subject" required="required" name="subject" type="text" id="subject"> 
		</div>
	</div>
	<div class="form-group">
		<label for="date" class="negrita">Date:</label> 
		<div>
		<input class="form-control" placeholder="date" required="required" name="date" type="number" id="date"> 
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="negrita">Description:</label> 
		<div>
		<input class="form-control" placeholder="Description" required="required" name="description" type="text" id="description">
		</div>
	</div>
    <div class="form-group">
      <label for="image" class="negrita">Select an image:</label>
      <div>
        <input name="image" type="file" id="image">               
      </div>
    </div>

@endif
<button type="submit" class="btn btn-info">Save</button>
<a href="{{ url('/books') }}" class="btn btn-warning">Cancel</a>