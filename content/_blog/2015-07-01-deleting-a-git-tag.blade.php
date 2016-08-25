@extends('_includes.blog_post_base')

@section('post::title', 'Deleting a Git tag')
@section('post::date', '1 July 2015')
@section('post::brief', '')
@section('post::image', 'stone01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    I had to delete a git tag locally and on the remote repo. The first part was easy enough, but had to dig around for the latter.

    Locally:
    `git tag -d v0.1.1`

    Remote:
    `git push origin :refs/tags/v0.1.1`

    That's it.

    @endmarkdown

@stop

