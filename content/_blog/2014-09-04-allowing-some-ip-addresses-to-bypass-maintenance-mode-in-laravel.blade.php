@extends('_includes.blog_post_base')

@section('post::title', 'Allow a range of IP addresses to bypass maintenance mode in Laravel')
@section('post::date', '4 September 2014')
@section('post::brief', '')
@section('post::image', 'water01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    In Laravel, you can put the app in Maintenance Mode by running `php artisan down` in the console. However, this also locks you out of the app. An easy way to get around this is to do a simple check for an array of allowed IP addresses in *app/start/global.php* where the Maintenance Mode Handler function exists.

    <script src="https://gist.github.com/koomai/21a030a85217d513f062.js"></script>

    You can take this a step further if you need more advanced functionality to check for IP ranges, which is not feasible with the solution above.

    Create a config file *maintenance.php* to add an array of allowed IP addresses. The array can included a single IP address or a range of IP addresses.

    <script src="https://gist.github.com/koomai/0958b9ff12f779fef50d.js"></script>

    Create a helper file *helpers.php* in the *app* folder and add the functions below.

    <script src="https://gist.github.com/koomai/48f841a6727f0baaf3c3.js"></script>

    Add the *helpers.php* file to the bottom of your *app/start/global.php* file.
    <pre><code class="language-php">
    require app_path().'/helpers.php'; 
    </code></pre>
        
    Then just update the Maintenance Mode Handler in *app/start/global.php* to use the helper function.

    <script src="https://gist.github.com/koomai/4bbf0db73672404313f2.js"></script>

 

    @endmarkdown

@stop

