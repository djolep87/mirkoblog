@extends('layouts.master')

@section('content')
    <a href="/posts" class="btn btn-default">Nazad</a>
    <hr>
    <h1 class="content text-center"><strong>{{$post->title}}</strong></h1><br>
    <br>
    <br>
    <img style="with:100%; display: block; margin-left: auto; margin-right: auto; width: 40%;" class="align-center" src="/storage/cover_images/{{$post->cover_image}}" alt="" >
    <br><br>
       
    <div style="font-size: 16px">
        {!!$post->body!!}
    </div>
    <hr>
    <small style="font-size: 12px">Postavljeno: {{$post->created_at->toFormattedDateString()}}<br> Autor: {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)    
        <hr>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Izmeni</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Izbrisi', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection