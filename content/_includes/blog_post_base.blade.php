@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header intro-header-post-base" style="background-image: url('/assets/img/backgrounds/@yield('post::image').jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>@yield('post::title')</h1>
                        <span class="meta">Posted on @yield('post::date')</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    @yield('post_body')
                    
                    <div class="post-footer">
                        <a class="twitter-share-button" data-size="large" 
                          href="https://twitter.com/intent/tweet?via=koomai&text=@yield('post::title')">
                        Tweet this</a>
                        <br>
                        <a href="@url('/')"><i class="fa fa-arrow-circle-o-left"></i> Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </article>

@stop
