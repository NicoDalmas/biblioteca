  <!-- Obtengo la sesión actual del usuario -->
  {{ $message=Session::get('message') }} 
 
  <!-- Muestro el mensaje de validación -->

<form method="POST" action="{{ route('books/store') }}" role="form" enctype="multipart/form-data">
 
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
  @include('books.forms.part')
                                                          
</form>