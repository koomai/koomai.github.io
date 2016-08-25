@extends('_includes.base')

@section('post::image', 'glass01')
@section('body')

@include('_includes.header')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($paginatedBlogPosts as $post)

            <div class="post-preview">
                <a href="@url($post->path)">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ str_limit($post->brief, 130) }}
                    </h3>
                </a>
                <p class="post-meta">Posted on {{ $post->date }}</p>
            </div>
            <hr>
            
            @endforeach
            
            @include('_includes.blog_paginator')
        </div>
    </div>  
</div>

@stop