<a href="{{ url('/admin/roles/create') }}" class="btn btn-success mt-4 ml-3">Add+ Rol</a>
<a href="{{ url('/admin/permissions/create') }}" class="btn btn-success mt-4 ml-3">Add+ Permission</a>
 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Rol Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $rol)
        <tr>
            <td class="v-align-middle">{{$rol->id}}</td>
            <td class="v-align-middle">{{$rol->name}}</td>
            <td class="v-align-middle">
                <form action="{{ route('admin/roles/delete',$rol->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return deleteConfirm()">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('admin/roles/edit', $rol->id) }}" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Permission Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
        <tr>
            <td class="v-align-middle">{{$permission->id}}</td>
            <td class="v-align-middle">{{$permission->name}}</td>
            <td class="v-align-middle">
                <form action="{{ route('admin/permissions/delete',$permission->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return deleteConfirm()">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('admin/permissions/edit', $permission->id) }}" class="btn btn-primary">Edit</a>
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