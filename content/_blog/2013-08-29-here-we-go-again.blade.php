@extends('_includes.blog_post_base')

@section('post::title', 'Here we go again')
@section('post::date', '29 August 2013')
@section('post::brief', '')
@section('post::image', 'rock01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    I'm giving this blog thingamajiggy another ago. My rantings on blogspot have long been dead and I have lost count of how many times I tried to set up a Wordpress blog. I bought themes. I modified them. And then I modified them again. This went on and on until I eventually gave up. I gave Tumblr a shot for a while but I never really warmed up to it.

    I've been slowly switching my work's projects from Codeigniter to Laravel and I happened to stumble upon [Wardrobe](http://wardrobecms.com/). I've decided to see if this simple, clean blogging tool can help me overcome my perpetual writer's block. I've modified the theme with the default stylings of [Bootstrap 3](http://getbootstrap.com).

    So here we go again...

    EDIT: This didn't exactly go to plan due to various things. Oh well, here we go again.. again.  

    EDIT 2: This blog is now powered by [Katana](http://themsaid.com/katana/).
    @endmarkdown

@stop

