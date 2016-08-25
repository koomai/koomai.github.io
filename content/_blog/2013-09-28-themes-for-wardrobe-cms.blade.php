@extends('_includes.blog_post_base')

@section('post::title', 'Themes for Wardrobe CMS')
@section('post::date', '28 September 2013')
@section('post::brief', '')
@section('post::image', 'candle01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    I was trying to create a simple theme for this blog (*Edit*: this blog no longer uses Wardrobe CMS) using Bootstrap 3 and decided to try my hand at making it installable via composer.

    This package currently contains a basic two-column theme for [Wardrobe](http://wardrobecms.com). It uses most of Bootstrap 3's default styles with minimal overrides. Bootstrap 3 is designed to be mobile-first, so this theme plays nice with smaller screens. It also can be easily configured to use [Bootswatch](http://bootswatch.com) themes.

    Check it out on Github: [https://github.com/koomai/wardrobe-themes](https://github.com/koomai/wardrobe-themes)

    ###How to Install###
    1. Assuming you have already installed Wardrobe, add this package to your composer.json file

            `"koomai/wardrobe-themes" : "dev-master"`
              
    2. Run *composer update* to install. Alternatively you can install it directly via composer on your Wardrobe installation:

            `composer require koomai/wardrobe-themes:dev-master`
            
    3. Add the Service Provider to *config/app.php* (at the end of the *providers* array)
              
            `'Koomai\WardrobeThemes\WardrobeThemesServiceProvider',`       
              
    4. Publish this package's configuration file

            `php artisan wardrobethemes:config`     

    5. Copy this package's themes to the *public/themes* folder

            `php artisan wardrobethemes:assets`    

        Note: The artisan commands will overwrite previous files. If you've made custom modifications, do not run these commands without backing up your Wardrobe Themes config file (in *config/packages*) and themes directory (in *public/themes*)

    6. Finally, In your Wardrobe config file *(config/packages/wardrobe/core/wardrobe.php)* set the theme to one of the new themes in *public/themes* directory (currently just *bootstrap*).

    ###Configuration###
    There are some configuration options in *config/packages/koomai/wardrobe-themes/config.php*
    <ul>
    <li> <em>theme</em> - You can swap out the default Bootstrap theme with one of the Bootswatch themes here. Options are listed in the comments.</li>
    <li> <em>excerpt</em> - By default the theme displays one paragraph of each post on the home page. Change this option to <em>false</em> to display entire posts.</li>
    <li> <em>fonts</em> - Some preset Google fonts combinations to override default fonts from Bootstrap/Bootswatch. Options are listed in the comments.</li>
    </ul>
    @endmarkdown

@stop

