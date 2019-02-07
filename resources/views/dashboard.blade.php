@extends('layouts.master')

@section('content')
@include('inc.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Kontrolni panel                   
                </div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/posts/create" class="btn btn-primary">Kreiraj Post</a>
                        <hr>
                        <h3>Tvoji postovi</h3>
                        
                    @if (count($posts) > 0)
                        
                    
                        <table class="table table-striped">
                                <tr>
                                    <th>Naslov</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        {{$post->title}}
                                    </td>

                                    <td>
                                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Izmeni</a>
                                    </td>

                                    <td>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            
                                            {{Form::hidden('_method', 'DELETE')}}
                                            
                                            {{Form::submit('Izbrisi', ['class' => 'btn btn-danger'])}}
                                            
                                            {!!Form::close()!!}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>Nemate postova</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
