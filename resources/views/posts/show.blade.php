@extends('layouts.master')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
    <hr>
    <h1 class="content text-center"><strong>{{$post->title}}</strong></h1><br>
    <br>
    <br>
    <br>
    <br>
    <img style="with:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
       
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written at {{$post->created_at->toFormattedDateString()}} by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)    
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection