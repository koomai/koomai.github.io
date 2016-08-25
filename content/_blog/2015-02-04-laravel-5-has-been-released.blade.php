@extends('_includes.blog_post_base')

@section('post::title', 'Laravel 5 has been released')
@section('post::date', '4 February 2015')
@section('post::brief', '')
@section('post::image', 'ducks02')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    I have been playing around with the latest version of Laravel 5 for a while and it looks great. It's a bit more opinionated in terms of application structure (you can customise it to some extent), however this will only help organise your code better as your application grows.

    Laravel 5 has officially been released today - <a href="http://laravel.com/" target="_blank">laravel.com</a>. 

    @endmarkdown

@stop

