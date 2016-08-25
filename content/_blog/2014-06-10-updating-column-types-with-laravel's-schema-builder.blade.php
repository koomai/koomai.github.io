@extends('_includes.blog_post_base')

@section('post::title', 'Updating Column Types with Laravel\'s Schema Builder')
@section('post::date', '6 June 2014')
@section('post::brief', '')
@section('post::image', 'sunset04')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    Laravel makes database migrations very easy with its <a href="http://laravel.com/docs/schema" target="_blank">Schema Builder</a>. It  has a lot of built-in methods to add tables, columns, indexes, etc. However, it's easy to forget that you can do so much more with just plain old SQL queries.

    I needed to change the type of a column from `VARCHAR` to `TEXT`. Here's what I ran in a migration file:

    <pre>
    <code class="language-sql">
    public function up()
    {
        DB::statement('ALTER TABLE flavours MODIFY COLUMN description TEXT');
    }

    public function down()
    {
        DB::statement('ALTER TABLE flavours MODIFY COLUMN description VARCHAR(255)');
    }   
    </code>
    </pre>  

    @endmarkdown

@stop

