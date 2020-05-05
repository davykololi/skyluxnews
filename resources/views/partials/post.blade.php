<br/>
<article>
<div class="dad"></div>
<h6 class="calibri"><strong>SANTONA MEDIA {{ strtoupper($post->category->name) }} ARTICLE</strong></h6>
<br/>
<h1 class="blog-post-title">
    <a class="title font20" href="{{ route('users.posts.read', ['post_slug' => $post->slug]) }}" >{{strtoupper($post->title)}}</a>
</h1>
<p class="blog-post-meta">
    <div style="font-family: Calibri Light;font-size: 100%;">
            <a style="color: black" href="#"> 
                <span style="font-size: 13px">
                    {{ date("F j,Y,g:i a",strtotime($post->created_at)) }}
                </span>
            </a>
            By <span class="title adname">{!! $post->admin->name !!}</span>
    </div>
</p>
<figure>
    <img class="img-responsive" width="307" height="240" src = "/storage/public/storage/{{ $post->image }}" alt ="{{ $post->title }}">
    <figcaption> <span id="dimgray"> {{$post->caption}}</span> </figcaption>
</figure>
</article>
