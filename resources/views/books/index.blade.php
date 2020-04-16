<a href="{{ url('books/create') }}" class="btn btn-success mt-4 ml-3">Add+ </a>
 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Author</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td class="v-align-middle">{{$book->id}}</td>
            <td class="v-align-middle">{{$book->name}}</td>
            <td class="v-align-middle">{{$book->author}}</td>
            <td class="v-align-middle">{{$book->subject}}</td>
            <td class="v-align-middle">{{$book->date}}</td>
            <td class="v-align-middle">{{$book->image}}</td>
            <td class="v-align-middle">
                <form action="{{ route('books/delete',$book->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return deleteConfirm()">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('books/edit', $book->id) }}" class="btn btn-primary">Edit</a>
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