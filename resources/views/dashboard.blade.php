@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard

                    <div class=" float-right">
                       
                            <div class="dropdown-menu-right">
                                <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                         
                    </div>
                   
                </div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <hr>
                        <h3>Your Blog Post</h3>
                        
                    @if (count($posts) > 0)
                        
                    
                        <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        {{$post->title}}
                                    </td>

                                    <td>
                                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>
                                    </td>

                                    <td>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            
                                            {{Form::hidden('_method', 'DELETE')}}
                                            
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            
                                            {!!Form::close()!!}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no Posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
