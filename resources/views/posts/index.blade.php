
@extends('layouts.master')
@section('content')
<br>
<center>
    <a href='/posts/create' class="btn btn-primary btn-lg">Add</a>
</center>
    <br><br>
    <table class='table table-striped'>
        <thead>
        <tr>

            <th  > Title </th>
            <th  > Posted By </th>
            <th  > Slug </th>
            <th > Created At </th>
            <th > Actions </th>

        </tr>
        </thead>
        <tbody>
            
        
            @foreach ( $posts as $post )
            <tr>
                <td> {{ $post->title }} </td>
                <td> {{ $post->user->name }} </td>
                <td> {{ $post->slug }} </td>
                <td> {{ $post->readable_date }} </td>
                <td id="actions" > 
                    <a href='posts/{{ $post->id }}' class="btn btn-success">View</a>
                    <a href='posts/{{ $post->id }}/edit' class="btn btn-primary">edit</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $post->id }}'">
                        Delete
                    </button>
                </td>
        </tr>

        <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $post->id }}'" tabindex="-1" role="dialog" 
                    aria-labelledby="exampleModalLabel{{ $post->id }}'" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Do you want to Delete this post ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="/posts/{{$post->id}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>

        @endforeach
        </tbody>


    </table>
    <div class=row >
        <div class="offset-4 col-4" >
                {{ $posts->links() }}
        </div>
    </div>
   


@endsection