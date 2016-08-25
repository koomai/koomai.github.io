@extends('_includes.base')

@section('pageTitle', '- About Me')

@section('body')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header intro-header-post-base" style="background-image: url('/assets/img/bg-about.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h3>About me</h3>
                    <div class="media">
                      <div class="media-left media-middle hidden-xs">
                        <img class="media-object img-responsive img-thumbnail" src="/assets/img/profile.jpg" alt="Koomai">
                        <ul class="list-inline text-center">
                            <li>
                                <a href="https://twitter.com/koomai" target="_blank" class="social-media-buttons">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/koomai" class="social-media-buttons">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                      </div>
                      <div class="media-body">
                        <p style="margin-top: 0">I'm Sid. Full-stack Developer. Ranter. Into technology, analytics and good food. And this is my poor attempt at keyword stuffing – L(A|E)MP, Laravel, Symfony, JavaScript, AngularJS, VueJS, ReactJS.</p>
                        <ul class="list-inline text-center visible-xs-block">
                            <img class="center-block img-responsive img-thumbnail" src="/assets/img/profile.jpg" alt="Koomai">
                            <li>
                                <a href="https://twitter.com/koomai" target="_blank" class="social-media-buttons">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/koomai" class="social-media-buttons">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h3>Stuff</h3>
                    <!-- Panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Plivo SMS Notifications</h4></div>
                        <div class="panel-body">
                            Plivo SMS notifications channel for Laravel 5.3. It is now part of the official Laravel Notifications Channels on <a href="https://github.com/laravel-notification-channels/plivo" target="_blank">Github</a>.
                        </div>
                    </div>
                    <!-- Panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Bulletproof email</h4></div>
                        <div class="panel-body">
                            A Gulp workflow for maintainable email templates. Check it out on <a href="https://github.com/koomai/bulletproof-email" target="_blank">Github</a>.
                        </div>
                    </div>
                    <!-- Panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>PhpStorm Live Templates</h4></div>
                        <div class="panel-body">
                            Laravel Live Templates for PhpStorm. Check it out on <a href="https://github.com/koomai/phpstorm-laravel-live-templates" target="_blank">Github</a>.
                        </div>
                    </div>
                    <!-- Panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Lumen Vault</h4></div>
                        <div class="panel-body">
                            A Lumen port of PasteVault. Was a simple exercise to try out <a href="lumen.laravel.com" target="_blank">Lumen</a>. Check it out on <a href="https://github.com/koomai/vault" target="_blank">Github</a>.
                        </div>
                    </div>
                    <!-- Panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Wardrobe Themes</h4></div>
                        <div class="panel-body">
                            Themes for <a href="http://wardrobecms.com" target="_blank">Wardrobe CMS</a>. Check it out on <a href="https://github.com/koomai/wardrobe-themes" target="_blank">Github</a>.
                        </div>
                    </div>
                    <!-- Panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Bacon Ipsum Workflow for Alfred</h4></div>
                        <div class="panel-body">
                            Made this just for fun. Makes it easy to generate some Bacon Ipsum using <a href="http://www.alfredapp.com/" target="_blank">Alfred</a> on Mac OS X. Download from <a href="https://github.com/koomai/bacon-ipsum-alfred" target="_blank">Github</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

@stop
