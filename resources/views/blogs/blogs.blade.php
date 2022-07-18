@extends('layouts.app')
@section('content')


       <!--================ Start Banner Area =================-->
       {{-- <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Blog</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="blog.html">Our Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--================ End Banner Area =================-->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area section_gap_top">
        <div class="chahal-breadcrumb container">

        </div>
        @livewire('categories')
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @livewire('blog-list')
                </div>
                <div class="col-lg-4">
                    @livewire('sidebar')
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection
