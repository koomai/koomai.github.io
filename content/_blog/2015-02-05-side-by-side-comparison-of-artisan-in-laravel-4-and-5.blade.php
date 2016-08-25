@extends('_includes.blog_post_base')

@section('post::title', 'Comparison of Artisan in Laravel 4 and 5')
@section('post::date', '5 February 2015')
@section('post::brief', '')
@section('post::image', 'forest01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    Below is a side by side comparison of the *artisan* commands available between Laravel 4 and 5.
    <p>
    <a href="/assets/img/image-1423131800494.png" title="Click to view full size">
        <img src="/assets/img/image-1423131800494.png" class="img-responsive img-thumbnail">
    </a>
    </p>

    Here's a few major changes (note that this is not an exhaustive list):

    ### app:name
    The default namespace is *App*, but you can change it to anything you want with this command. Just type `php artisan app:name Your\App\Name` in the console and it will update all the files with the new namespace, including the *psr-4* autoloader in your *composer.json* file.

    ### config:cache/config:clear
    This is pretty straightforward. `config:cache` compiles your *config* files into one single file in *storage/framework/config.php*. `config:clear` removes this file.

    ### make:something
    This command is a welcome addition in Laravel 5. It replaces the *something:make* format of Laravel 4, which allows all the new *make* commands to be neatly grouped together. *command:make* and *controller:make* have been replaced by *make:console* and *make:controller* respectively. 

    ### queue:table
    This is another great feature in Laravel 5 for those who haven't yet used the Queue component. Simply run this command and change your queue driver to *database* in *config/queue.php*. Then you can start queuing your tasks without touching beanstalkd or redis or a third-party service. It's a great option for someone just getting started with queues.

    ### route:cache
    This caches your routes into a single file in *storage/framework/routes.php*. This is especially useful if you're using <a href="https://github.com/LaravelCollective/annotations" target="_blank">route annotations</a>.

    ### schedule:run
    I keep repeating myself, but this is yet another great addition to Laravel 5. Before, you had to run a bunch of separate cron jobs to perform multiple tasks in the background. Now, all you have to do run a single cron job that calls `schedule:run`. You then add your tasks to  `app/Console/Kernel.php`. More on this in the <a href="http://laravel.com/docs/5.0/artisan#scheduling-artisan-commands" target="_blank">docs</a>.

    ### vendor:publish
    This single command in Laravel 5 replaces the *asset:publish* and *view:publish* commands used to publish a package's assets.

    There's a lot more going in with the *make* command in Laravel 5. Check out all the new commands under the *make* group and read the <a href="http://laravel.com/docs/5.0" target="_blank">docs</a>.


    @endmarkdown

@stop

