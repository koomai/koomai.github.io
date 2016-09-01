@extends('_includes.blog_post_base')

@section('post::title', 'Database connections an SELinux server')
@section('post::date', '01 September 2016')
@section('post::brief', 'aka Security-Enhanced Linux headache')
@section('post::image', 'water01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
        
        I recently had to migrate a working application to a RHEL7 server with SELinux enabled. Everything seemed to be okay but it just wouldn't connect to the remote database. 

        My first instinct was to troubleshoot the database server but I didn't have any problems connecting from a desktop client or from the terminal. After googling around for a while, it turned out that SELinux was the culprit. The easy (but inappropriate) solution was to disable it:  

        `sudo setenforce 0`  

        However, after a bit more research I learnt that there is a specific property that needed to be enabled:  

        `sudo setsebool httpd_can_network_connect_db 1`
        
        That was it. Until I rebooted the server and the above reverted to `off` again. The final solution was:

        `sudo setsebool -P dhttpd_can_network_connect_db 1`

        The `-P` flag makes the change permanent. Problem solved.


    @endmarkdown

@stop

