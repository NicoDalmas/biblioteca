  <!-- Obtengo la sesión actual del usuario -->
  {{ $message=Session::get('message') }} 
 
  <!-- Muestro el mensaje de validación -->

<form method="POST" action="{{ route('admin/roles/store') }}" role="form" enctype="multipart/form-data">
 
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
  @include('admin.roles.forms.part')
                                                          
</form>