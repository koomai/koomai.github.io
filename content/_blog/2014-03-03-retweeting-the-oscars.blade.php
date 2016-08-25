@extends('_includes.blog_post_base')

@section('post::title', 'Retweeting the Oscars')
@section('post::date', '3 March 2014')
@section('post::brief', '')
@section('post::image', 'cake01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    This is a perfect example of how TV entertainment has become intertwined with social media. Host Ellen DeGeneres took a selfie with several A-listers and made a self-fulfilling prophecy about having the most retweeted tweet ever. 

    Within an hour it had broken the previous record for retweets. It's at 1.2m+ now, no idea where it will end up.

    <blockquote class="twitter-tweet" lang="en"><p>If only Bradley&#39;s arm was longer. Best photo ever. <a href="https://twitter.com/search?q=%23oscars&amp;src=hash">#oscars</a> <a href="http://t.co/C9U5NOtGap">pic.twitter.com/C9U5NOtGap</a></p>&mdash; Ellen DeGeneres (@TheEllenShow) <a href="https://twitter.com/TheEllenShow/statuses/440322224407314432">March 3, 2014</a></blockquote>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>


    P.S. Poor Jared Leto.
    @endmarkdown

@stop

