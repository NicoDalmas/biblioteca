<a href="{{ url('movements/create') }}" class="btn btn-success mt-4 ml-3">Add+ </a>
 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Movement ID</th>
            <th>User ID</th>
            <th>Book ID</th>
            <th>State</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($movements as $movement)
        <tr>
            <td class="v-align-middle">{{$movement->id}}</td>
            <td class="v-align-middle">{{$movement->user_id}}</td>
            <td class="v-align-middle">{{$movement->book_id}}</td>
            <td class="v-align-middle">{{$movement->state}}</td>
            <td class="v-align-middle">{{$movement->created_at}}</td>
            <td class="v-align-middle">
                <form action="{{ route('movements/delete',$movement->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return deleteConfirm()">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('movements/edit', $movement->id) }}" class="btn btn-primary">Edit</a>
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