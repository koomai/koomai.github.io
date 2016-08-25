@extends('_includes.blog_post_base')

@section('post::title', 'Quick Tip: Debugging Google Analytics')
@section('post::date', '16 November 2013')
@section('post::brief', '')
@section('post::image', 'grass01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    One of the best Chrome extensions I discovered was the [Google Analytics Debugger](https://chrome.google.com/webstore/detail/google-analytics-debugger/jnkmfdileelhofjcijamephohjechhna?hl=en).  Google Analytics does provide a separate version of the *ga.js* javascript file - *ga_debug.js*, that displays your tracking information and any errors in the browser's console. However, that means you have to make changes in the source code for it to work. And if you haven't set up your environments correctly, you could end up with the debug version in production code and slow down your site.

    The Debugger extension enables *ga_debug.js* in Chrome saving you the trouble of making any changes in your source code. An added bonus - you can see (and learn from) how other sites are utilising Google Analytics. 

    <img src="/assets/img/google-analytics-debugger.png" class="img-thumbnail img-responsive">
    @endmarkdown

@stop

