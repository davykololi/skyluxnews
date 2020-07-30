@extends('layouts.app')

@section('title')
@parent
{{$post->title}}
@stop
 
@section('content')
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="#">Technology</a></li>
              <li class="active">Mobile</li>
            </ol>
            <h1>{{$post->title}}</h1>
            <div class="post_commentbox"> <a href="{{ route('users.posts.read',['post_slug' => $post->slug]) }}"><i class="fa fa-user"></i>Wpfreeware</a> <span><i class="fa fa-calendar"></i>{{now()}}</span> <a href="{{ route('users.posts.read',['post_slug' => $post->slug]) }}"><i class="fa fa-tags"></i>{{$post->category->name}}</a> </div>
            <div class="single_page_content"> <img class="img-center" src="/storage/public/storage/{{ $post->image }}" alt="{{ $post->title }}">
              <p>{{$post->content}}</p>

              @include('user.posts.commentsDisplay')
              @include('user.posts.commentForm')
              <blockquote> Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque adipiscing, neque ut pulvinar tincidunt, est sem euismod odio, eu ullamcorper turpis nisl sit amet velit. Nullam vitae nibh odio, non scelerisque nibh. Vestibulum ut est augue, in varius purus. </blockquote>
            </div>
            @include('partials.share')
            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                @foreach($category->posts as $post)
                <li>
                  <div class="media"> <a class="media-left" href="{{ route('users.posts.read',['post_slug' => $post->slug]) }}"> <img src="/storage/public/storage/{{ $post->image }}" alt="{{ $post->title }}"> </a>
                    <div class="media-body"> <a class="catg_title" href="{{ route('users.posts.read',['post_slug' => $post->slug]) }}">{{$post->title}}</a> </div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
              @include('user.posts.tags')
              @include('user.newsletter.newsletter')
              <br/><br/>
          </div>
        </div>
      </div>
      <nav class="nav-slit"> <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
        <div>
          <h3>City Lights</h3>
          <img src="../images/post_img1.jpg" alt=""/> </div>
        </a> <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
        <div>
          <h3>Street Hills</h3>
          <img src="../images/post_img1.jpg" alt=""/> </div>
        </a> </nav>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  @if(!empty($categories))
                    @foreach($categories as $category)
                  <li class="cat-item">
                    <a href="{{route('category.articles',['slug' => $category->slug])}}">
                      {{ $category->name }}
                    </a>
                  </li>
                    @endforeach
                  @endif
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="../images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <ul class="catgArchive">
              Select Category 
              @if(!empty($categories))
                @foreach($categories as $category)
              <li>
                <a href="{{route('category.articles',['slug' => $category->slug])}}">
                  {{ $category->name }}
                </a>
              </li>
                @endforeach
              @endif
              </ul>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{route('users.pages.about')}}">About</a></li>
              <li><a href="{{ route ('users.pages.contact') }}">Contact</a></li>
              <li><a href="{{ route ('private.policy') }}">Private Policy</a></li>
              <li><a href="{{ route ('pages.portfolio') }}">Portfolio</a></li>
              @if(!empty($categories))
                @foreach($categories as $category)
              <li>
                <a href="{{route('category.articles',['slug' => $category->slug])}}">{{ $category->name }}</a></li>
                @endforeach
              @endif
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
@endsection
