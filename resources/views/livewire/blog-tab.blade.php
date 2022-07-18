<article class="row blog_item">
    <div class="col-md-3">
        <div class="blog_info text-right">
            <div class="post_tag">
                @foreach ($blog->tags as $tag)
                    <a class="active" href="#">{{ $tag->name }} @if(!$loop->last) , @endif</a>
                @endforeach
            </div>
            <ul class="blog_meta list">
                <li><a href="javascript:void(0)">{{ $blog->user->name }}<i class="lnr lnr-user"></i></a></li>
                <li><a href="javascript:void(0)">{{ $blog->blogDate }}<i class="lnr lnr-calendar-full"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div class="blog_post">
            <img onerror="this.src='{{ asset('images/default-lara.jpeg') }}'" src="{{ asset('storage/'.$blog->image) }}" alt="">
            <div class="blog_details">
                <a href="{{ url('blog/'.$blog->slug) }}"><h2>{{ $blog->name }}</h2></a>
                <p>{!! \Illuminate\Support\Str::limit($blog->desc, 250) !!}  </p>
                <a href="{{ url('blog/'.$blog->slug) }}" class="primary_btn"><span>View More</span></a>
            </div>
        </div>
    </div>
</article>
