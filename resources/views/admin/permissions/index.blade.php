<a href="{{ url('/admin/permissions/create') }}" class="btn btn-success mt-4 ml-3">Add+ </a>
 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
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