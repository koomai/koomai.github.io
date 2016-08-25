@extends('_includes.blog_post_base')

@section('post::title', 'Here we go again, again')
@section('post::date', '25 August 2016')
@section('post::brief', '')
@section('post::image', 'view04')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    I've lost count of how many times I've tinkered around with the innards of this blog instead of actually writing something meaningful. This time it's powered by [Katana](http://themsaid.com/katana/), a neat blog generator built on top of Laravel's components.

    The theme is [Clean blog](https://startbootstrap.com/template-overviews/clean-blog/) by Start Bootstrap. I've customised it a little, but I'm not a designer so it's invariably turned out a bit uglier than I imagined it in my mind (granted I only imagined it for 5 seconds). 

    Here's to a new life – for this blog.
    @endmarkdown

@stop

