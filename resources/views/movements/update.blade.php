<form method="POST" action="{{ route('movements/update',$movements->id) }}" role="form" enctype="multipart/form-data">

	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	@include('movements.forms.part')

</form>