@extends('layouts.master')

{{-- @section('content')
<div>
    <h1>Blog</h1>
    <hr>
    @if(count($posts) > 0)

        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="with:100%;" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>

                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
            
        @endforeach
        {{$posts->links()}}
        @else

            <p>No posts found!</p>

    @endif
    
@endsection --}}
<header>
  <!-- Full Page Intro -->
  <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 white-text text-center">
            <h1 class="display-3 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">MIRKO
              <a class="indigo-text font-weight-bold">BLOG</a>
            </h1>
            <h5 class="text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow fadeInDown"
              data-wow-delay="0.3s">Fenomeni</h5>
            <div class="wow fadeInDown" data-wow-delay="0.3s">
              <a class="btn btn-light-blue btn-lg" href="#middle">Blog</a>
              @if(Auth::user())
                <a class="btn btn-indigo btn-lg" href="/dashboard">Dashboard</a>
                @else
                <a class="btn btn-indigo btn-lg" href="/login">Admin login</a>
              @endif
            </div>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>

@section('content')
<h1 class="text-center" id="middle" style="padding-top: 40px;"><strong>Najnoviji postovi</strong> </h1>
<hr>
@if(count($posts) > 0)
    @foreach ($posts as $post)
    
        <!-- Grid row -->
        <div class="row">
            
                <!-- Grid column -->
                <div class="col-lg-5 col-xl-4">
            
                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                            <img style="with: 100%; height: 250px;" src="/storage/cover_images/{{$post->cover_image}}">
                        <a>
                        <div class="mask rgba-white-slight">
                          
                        </div>
                        </a>
                    </div>
                    
                   
            
                </div>
                
                
                <!-- Grid column -->
                
                <!-- Grid column -->
                <div class="col-lg-7 col-xl-8">
            
                    <!-- Post title -->
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <!-- Excerpt -->
                    <div style="font-size: 16px">
                        {!!str_limit($post->body, 500)!!}
                    </div>
                    {{-- {{str_limit($post->body, 500)}} --}} 
                    <!-- Post data -->
                    <small style="font-size: 12px">Postavljeno: {{$post->created_at->toFormattedDateString()}}<br> Autor: {{$post->user->name}}</small>
                    <!-- Read more button -->
                    <a class="btn btn-primary btn-md" href="/posts/{{$post->id}}">Procitaj vise</a>
                    
                </div>
                <!-- Grid column -->
            
        </div>
        <hr class="my-5">
    @endforeach 
    {{$posts->links()}}
        @else

            <p>Nemate postova!</p>   


@endif
      <!-- Grid row -->
    
      

@endsection





{{-- <section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Recent posts</h2>
        <!-- Section description -->
        <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      
        <!-- Grid row -->
        <div class="row">
      
          <!-- Grid column -->
          <div class="col-lg-5 col-xl-4">
      
            <!-- Featured image -->
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
      
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-lg-7 col-xl-8">
      
            <!-- Post title -->
            <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
            <!-- Excerpt -->
            <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
              quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
              et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum.</p>
            <!-- Post data -->
            <p>by <a class="font-weight-bold">Jessica Clark</a>, 19/04/2018</p>
            <!-- Read more button -->
            <a class="btn btn-primary btn-md">Read more</a>
      
          </div>
          <!-- Grid column -->
      
        </div>
        <!-- Grid row -->
      
        <hr class="my-5">
      
        <!-- Grid row -->
        <div class="row">
      
          <!-- Grid column -->
          <div class="col-lg-5 col-xl-4">
      
            <!-- Featured image -->
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/31.jpg" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
      
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-lg-7 col-xl-8">
      
            <!-- Post title -->
            <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
            <!-- Excerpt -->
            <p class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
              cupiditate non provident et accusamus iusto odio dignissimos et dolorum fuga.</p>
            <!-- Post data -->
            <p>by <a class="font-weight-bold">Jessica Clark</a>, 16/04/2018</p>
            <!-- Read more button -->
            <a class="btn btn-primary btn-md">Read more</a>
      
          </div>
          <!-- Grid column -->
      
        </div>
        <!-- Grid row -->
      
        <hr class="my-5">
      
        <!-- Grid row -->
        <div class="row">
      
          <!-- Grid column -->
          <div class="col-lg-5 col-xl-4">
      
            <!-- Featured image -->
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
              <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/52.jpg" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
      
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-lg-7 col-xl-8">
      
            <!-- Post title -->
            <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
            <!-- Excerpt -->
            <p class="dark-grey-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
              quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
              qui dolorem ipsum quia dolor sit amet, psam voluptatem quia consectetur.</p>
            <!-- Post data -->
            <p>by <a class="font-weight-bold">Jessica Clark</a>, 12/04/2018</p>
            <!-- Read more button -->
            <a class="btn btn-primary btn-md">Read more</a>
      
          </div>
          <!-- Grid column -->
      
        </div>
        <!-- Grid row -->
      
      </section>
      <!-- Section: Blog v.3 --> --}}