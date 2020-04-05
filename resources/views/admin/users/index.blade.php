<a href="{{ url('/admin/users/create') }}" class="btn btn-success mt-4 ml-3">Add+ </a>
 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $usuario)
        <tr>
            <td class="v-align-middle">{{$usuario->name}}</td>
            <td class="v-align-middle">{{$usuario->email}}</td>
            <td class="v-align-middle">{{$usuario->password}}</td>
            <td class="v-align-middle">{{$usuario->rol_id}}</td>
            <td class="v-align-middle">
                <form action="{{ route('admin/users/delete',$usuario->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return deleteConfirm()">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('admin/users/edit', $usuario->id) }}" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<script type="text/javascript">
        function deleteConfirm()
        {
        var x = confirm("Are you sure to Delete this?");
        if (x)
          return true;
        else
          return false;
        }
    </script>