<form method="POST" action="{{ route('books/update',$books->id) }}" role="form" enctype="multipart/form-data">

	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	@include('books.forms.part')

</form>