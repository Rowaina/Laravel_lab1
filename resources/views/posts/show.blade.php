@extends('layouts.master')
@section('content')
<br>
<center>
    <a href='/posts' class="btn btn-primary btn-lg">Back</a>
</center>
    <br><br>
<div class="row">
        <div class="col-10 offset-1">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                            Post Details
                    </h5>
                </div>

                    <div class="card-body">
                        <p><b>Title: </b>{{$post->title}} </p>
                        <p><b>Description: </b>{{$post->description}} </p>
                        <p><b>Created At: </b>{{$post->readable_date}} </p>
                    </div>
            </div>

           <div class="col-10 offset-1">
                <div class="card-header" >
                    <h5 class="mb-0">
                           Author Details
                    </h5>
                </div>
                
                <div class="card-body">
                    <p><b>Name: </b>{{$post->user->name}} </p>
                    <p><b>Email: </b>{{$post->user->email}} </p>
                </div>
            </div>

        </div>
    
    
    </div>
    @endsection