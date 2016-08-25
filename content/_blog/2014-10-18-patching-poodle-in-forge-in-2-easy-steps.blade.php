@extends('_includes.blog_post_base')

@section('post::title', 'Patching POODLE in Forge in 2 easy steps')
@section('post::date', '18 October 2014')
@section('post::brief', '')
@section('post::image', 'rock04')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    If you're using [Forge](https://forge.laravel.com/) to manage your server, here's a quick tip to patch the SSLv3 POODLE bug in 2 easy steps.

    #### Step 1

    Go to the Recipes section in your [Forge dashboard](http://forge.laravel.com/recipes) and create a new recipe with the details below:

    **Name**: Patch Poodle (or anything else you want to name it)

    **User**: root

    **Script**:
    <pre><code class="language-bash">
    printf 'ssl_protocols TLSv1 TLSv1.1 TLSv1.2;' > /etc/nginx/conf.d/ssl_protocols.conf
    service nginx restart
    </code></pre>
  
  
    #### Step 2

    Click on the **Play** icon next to your recipe and run it across all your servers.

    That's it. Done!

    #### What's happening here?

    Look at the contents of the `/etc/nginx/nginx.conf` file. At the bottom of the *http* block, you'll see the following:

    `include /etc/nginx/conf.d/*.conf;`

    All the configuration files in the `/etc/nginx/conf.d` directory are included in the main file.


    **Update**: There is now an official recipe for Forge to patch POODLE. Different approach, same results. 

    @endmarkdown

@stop

