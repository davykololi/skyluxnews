<aside class="w3-sidebar w3-bar-block">
    <h4 class="astitle">SEARCH FOR ARTICLES </h4>
    @include('partials.postsearch')
    <div class="sidebar-module">
        <br/>
        <h4 class="astitle">LATEST {!! strtoupper($tag->name) !!} ARTICLES </h4>
            @include('partials.articlelinks_aside')
    </div>
    @include('partials.postcat_n_ext') 
</aside><!-- /.blog-sidebar -->