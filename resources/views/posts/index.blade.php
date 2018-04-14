
@extends('layouts.master')
@section('content')
<br>
<center>
    <a href='posts/create' class="btn btn-primary btn-lg">Add</a>
</center>
    <br><br>
    <table class='table table-striped'>
        <thead>
        <tr>

            <th  > Title </th>
            <th  > Posted By </th>
            <th > Created At </th>
            <th > Actions </th>

        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ( $posts as $post )
                <td> {{ $post->title }} </td>
                <td> {{ $post->user->name }} </td>
                <td> {{ $post->readable_date }} </td>
                <td id="actions" > 
                    <a href='posts/{{ $post->id }}/show' class="btn btn-success">View</a>
                    <a href='posts/{{ $post->id }}/edit' class="btn btn-primary">edit</a>
                    <button class="btn btn-danger" targ='{{ $post->id }}'> delete</button>
                </td>
        </tr>

        @endforeach
        </tbody>


    </table>
    <div class=row >
        <div class="offset-4 col-4" >
                {{ $posts->links() }}
        </div>
    </div>
   


@endsection