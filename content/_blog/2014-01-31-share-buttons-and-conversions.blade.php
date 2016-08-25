@extends('_includes.blog_post_base')

@section('post::title', 'Share buttons and conversions')
@section('post::date', '31 January 2014')
@section('post::brief', '')
@section('post::image', 'forest01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    There was an interesting case study published by [Visual Website Optimizer](http://visualwebsiteoptimizer.com/split-testing-blog/removing-social-sharing-buttons-from-ecommerce-product-page-increase-conversions) recently. One of their clients saw their conversions improve by 11.9% after removing social sharing buttons from their product pages. According to the article, the results may surprise people because marketers generally believe social sharing helps improve conversions.

    This is something everyone should consider before slapping half a dozen social sharing buttons on every page. Ask yourself these questions:

    1. Does the location of the buttons distract from the main goal of the page? *Consider the size and location of the buttons on the page. Your CTA should be the main focus.*

    1. Will the buttons negatively impact social proof? *Low share counts can create a negative perception of your product. Consider not displaying share numbers on your buttons. [Facebook Like buttons](https://developers.facebook.com/docs/plugins/like-button/) and [Twitter buttons](https://about.twitter.com/resources/buttons) give you the option not to display numbers.*

    1. Do you really need all those buttons? *Are your products really Pinterest-worthy? Are you getting decent referral traffic from each channel? Are people STILL using Google+? [Just kidding](https://blog.shareaholic.com/social-media-traffic-trends-10-2013/), Google.*

    This doesn't mean that social sharing buttons won't work for you. The solution as always is to do some A/B testing. Test your social buttons in different spots on your landing pages. Test different variations of them. Test not having any or only some. Test until you find answers to all the questions above.
    @endmarkdown

@stop

