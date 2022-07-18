<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Posts">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
            </span>
        </div><!-- /input-group -->
        <div class="br"></div>
    </aside>
    <aside class="single_sidebar_widget author_widget">
        <img class="author_img rounded-circle" src="{{ asset('images/1657954248029.jpg') }}" alt="Sahil Chahal">
        <h4>Sahil Chahal</h4>
        <p>Full Stack Web Developer</p>
        <div class="social_icon">
            <a href="https://www.facebook.com/sahil.chahal.3572" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="https://twitter.com/devsahilchahal" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/__chahal_01/" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/in/sahil-chahal-2729b7217/" target="_blank">
                <i class="fa fa-linkedin"></i>
            </a>
            <a href="https://github.com/dev-chahal" target="_blank">
                <i class="fa fa-github"></i>
            </a>
        </div>
        <p>Experienced Full Stack Web Developer with a demonstrated history of working in the information technology and services industry. Skilled in SQL, Node.js, PHP, WordPress,Laravel,CI,ReactJs,Angular and API Development.</p>
        <div class="br"></div>
    </aside>
    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Post Catgories</h4>
        <ul class="list cat-list">
            @foreach ($categories as $category)
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>{{ $category->name }}</p>
                        <p>{{ $category->blogs->count() }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="br"></div>
    </aside>
    <aside class="single-sidebar-widget tag_cloud_widget">
        <h4 class="widget_title">Tag Clouds</h4>
        <ul class="list">
            @foreach ($tags as $tag)
                <li><a href="#">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    </aside>
</div>
