@extends('layouts.master')

@section('content')
    <a href="/posts" class="btn btn-default">Nazad</a>
    <hr>
    <h1 class="content text-center"><strong>{{$post->title}}</strong></h1><br>
    <br>
    <br>
    <img style="with:100%; display: block; margin-left: auto; margin-right: auto; width: 40%;" class="align-center shadow-lg" src="/storage/cover_images/{{$post->cover_image}}" alt="" >
    <br><br>
       
    <div style="font-size: 14px">
        {!!$post->body!!}
    </div>
    <hr>
    <small style="font-size: 11px">Postavljeno: {{$post->created_at->toFormattedDateString()}}<br> Autor: {{$post->user->name}}</small>
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

    <div class="">
        <div class="">
            <div class="text-center" style="font-size: 20px">
                <strong>Dodaj komentar</strong>
            </div>
            <br> <br>
            <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}
            <input name="post_id" value="{{$post->id}}" type="hidden">
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label for="name" >Tvoje Ime:</label>
                    <input type="text" name="name" class="form-control " placeholder="Tvoje ime..." value="{{ old('name') }}">
                </div>
                <div class="form-group">
                        <label for="body" >Tvoje Komentat:</label>
                    <textarea name="body" rows="6" placeholder="Tvoj komentar..." class="form-control" value="{{ old('body') }}"></textarea>
                </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Dodaj Komentar</button>
                    </div>
            </form>

        </div>

    </div>
    <br><br><br>

    <div class="row">
            <div class="col-md col-md-offset-2">
               <div class="panel panel-default">
                   <div style="font-size: 20px" class="panel-heading text-center"><strong>Komentari</strong>:</div>
                    <br><br>
                   <div class="panel-body comment-container" >
                        
                           @foreach($post->comments as $comment) <br>

                                <li class="list-group-item">

                                        <strong>
                                            {{ $comment->name }}: <br>
                                        </strong>
                                            
                                        {{ $comment->body }}
                                        <br><br>
                                        <small style="font-size: 8px">Postavljeno: {{$comment->created_at->toFormattedDateString()}}</small>
                                        
                                </li>
           
                           @endforeach
                        <hr>
                   </div>
               </div>
           </div>
       </div>
      
   

    
           
        
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}">
  
</script>