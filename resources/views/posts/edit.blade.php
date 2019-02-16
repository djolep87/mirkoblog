@extends('layouts.master')

@section('content')
    <h1>Izmeni post</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Naslov')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Izmeni', ['class' => 'btn btn-primary'])}}
            <a href="/dashboard" class="btn btn-danger">Prekini</a>
        {!! Form::close() !!}   
    
@endsection