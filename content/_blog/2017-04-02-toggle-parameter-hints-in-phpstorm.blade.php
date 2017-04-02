@extends('_includes.blog_post_base')

@section('post::title', 'Toggle Parameter Hints in PhpStorm')
@section('post::date', '2 April 2017')
@section('post::brief', 'In the latest version – 2017.1')
@section('post::image', 'rock04')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    The latest version of PhpStorm – 2017.1 includes a nifty little feature called <a href="https://blog.jetbrains.com/phpstorm/2017/03/new-in-phpstorm-2017-1-parameter-hints/" target="_blank">parameter hints</a>. I've found it very useful, especially for methods with boolean parameters (which is considered a code smell, but that is another story). 

    !['Phpstorm Parameter Hints'](/assets/img/2017-04-02/parameter-hint-2.png)

    However, I don't want it to be enabled all the time. It's a bit of an adjustment to see the variable names inserted into your code. Fortunately, it's fairly easy to turn off the feature and use it only when needed.

    Go to `PhpStorm->Preferences` and click on `Keymap`. Search for 'parameter hints' in the search field on the right hand side. You should see an option called `Toggle parameter name hints` in the results. Right-click on it, select `Add keyboard shortcut` and add your preferred shortcut. I use `Cmd + Shift + P` because it isn't assigned to anything else.

    !['Phpstorm Parameter Hints'](/assets/img/2017-04-02/parameter-hint-2.png)
    
    Now you can easily toggle the feature on/off and use it only when required.

     !['Phpstorm Parameter Hints'](/assets/img/2017-04-02/parameter-hint-3.gif)

    @endmarkdown

@stop

