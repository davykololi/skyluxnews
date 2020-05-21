@forelse($archives as $archive)
<div class="container">
    <div class="row">
        <div class="col">
            <video class="float-left pull-left mr-2" width="40" controls> 
                <source src = "/storage/public/videos/{{ $archive->video }}" alt ="{{ $archive->title }}">
            </video>
            <h5>
                <a href="{{ route('users.videos.read', ['video_slug' => $archive->slug]) }}">
                    {!! $archive->title !!}
                </a>
            </h5>
        </div>
    </div>
</div>
@empty
    <p style="color: red">None</p>
@endforelse

