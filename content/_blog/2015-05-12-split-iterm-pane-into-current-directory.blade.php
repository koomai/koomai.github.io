@extends('_includes.blog_post_base')

@section('post::title', 'Split iTerm pane into current directory')
@section('post::date', '12 May 2015')
@section('post::brief', '')
@section('post::image', 'rock01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    One of the best features in [iTerm](https://www.iterm2.com//) is the ability to split the current tab into multiple panes. I normally split a tab into two panes to have a task like `gulp watch` running on one while I use the other for navigation and git commands.

    When you split a tab, it loads your home directory by default. For a long time, I had to manually `cd` into my current working directory after splitting a tab. But there's a much easier way to do this.

    1. Go to *Preferences* and select your default profile. 
    2. On the *General* tab, select *Advanced Configuration* under *Working Directory* and click on the *Edit* button.
    3. Under the last section *Working Directory for New Split Panes*, select *Reuse previous session's directory*. 
    4. Restart iTerm.

    That's it. Next time you split a tab, it will automatically `cd` into your current working directory.

    @endmarkdown

@stop

