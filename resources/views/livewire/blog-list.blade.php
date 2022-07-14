@foreach ($blogs as $blog)
    <article class="row blog_item">
        <div class="col-md-3">
            <div class="blog_info text-right">
                <div class="post_tag">
                    <a href="#">Food,</a>
                    <a class="active" href="#">Technology,</a>
                    <a href="#">Politics,</a>
                    <a href="#">Lifestyle</a>
                </div>
                <ul class="blog_meta list">
                    <li><a href="#">{{ $blog->user->name }}<i class="lnr lnr-user"></i></a></li>
                    <li><a href="#">{{ $blog->blogDate }}<i class="lnr lnr-calendar-full"></i></a></li>
                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="blog_post">
                <img src="{{ asset('storage/'.$blog->image) }}" alt="">
                <div class="blog_details">
                    <a href="single-blog.html"><h2>{{ $blog->name }}</h2></a>
                    <p>{!! \Illuminate\Support\Str::limit($blog->desc, 250) !!}  </p>
                    <a href="single-blog.html" class="primary_btn"><span>View More</span></a>
                </div>
            </div>
        </div>
    </article>
@endforeach
