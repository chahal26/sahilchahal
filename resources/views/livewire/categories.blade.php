<div class="container">
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-lg-4">
                <div class="categories_post">
                    <img src="{{ asset('storage/'.$category->image) }}" alt="post" class="cat_img">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="single-blog.html"><h5>{{ $category->name }}</h5></a>
                            <div class="border_line"></div>
                            <p>{{ $category->desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
