<div class="blog_left_sidebar">
    @foreach ($blogs as $blog)
        @livewire('blog-tab',['blog' => $blog])
    @endforeach

    <nav class="blog-pagination justify-content-center d-flex">
        {{ $blogs->links() }}
    </nav>

</div>
