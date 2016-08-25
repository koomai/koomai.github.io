@extends('_includes.blog_post_base')

@section('post::title', 'Some Composer Commands You Should Know')
@section('post::date', '5 March 2014')
@section('post::brief', 'Here\'s a short list of Composer commands that you should know in addition to the usual suspects.')
@section('post::image', 'stone01')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    Here's a short list of Composer commands that you should know in addition to the usual suspects - `install`, `update` and `create-project`.

    First of all, if you haven't installed Composer globally, move the `composer.phar` file from your project to the `/bin` folder:

    <pre><code class="language-bash">
    sudo mv composer.phar /usr/local/bin/composer
    </code></pre>

    ### composer require vendor/package ###

    Instead of updating your `composer.json` file manually, let Composer do it for you.

    You can run `composer require vendor/package --dev` to add it to `require-dev` instead.

    ### composer install --prefer-dist --no-dev ###

    You generally don't need to clone entire repositories of your dependencies in production environments. You don't need to install dependencies under `require-dev` in your `composer.json` file either.

    ### composer update vendor/package ###

    Generally, you just need to update a specific package to the latest version. Running a blanket `composer update` updates all your dependencies and you can run into some unexpected compatibility issues if the package versions are mostly `dev-master`.

    Also, updating dependencies should be part of your version control workflow. 

    - Commit your `composer.lock` file. 
    - Run `update` commands only in your development environment and test.
    - Push your commits to other environments.
    - In other environments, only run `install` commands so that packages are installed from the updated `composer.lock` file.

    ### composer global require vendor/package ###

    You can install packages globally so that they are shared by all projects. 

    For example, you can install `phpunit` globally:

    <pre><code class="language-bash">
    composer global require phpunit/phpunit:3.7.*
    </code></pre>

    ### composer search "foo" & composer show vendor/package ###

    You can view package information right in your terminal.

    For example, if I'm looking for a Bit.ly API package:

    <pre><code class="language-bash">
    composer search bitly
    </code></pre>
    I get a list of results:

    <pre><code class="language-bash">
    pnomolos/phitly Bit.ly v3 API wrapper

    rukbat/bitly-bundle bit.ly API bundle for symfony2

    hashids/hashids Generate hashes like YouTube or Bitly...

    hwi/oauth-bundle Support for authenticating users using both OAuth1.0a and OAuth2 in Symfony2.

    ...   
    </code></pre>

    The first result looks interesting, so I get more information on it:

    <pre><code class="language-bash">
    composer show pnomolos/phitly
    </code></pre>

    This shows me almost everything I need to know about the package:
    <pre><code class="language-bash">
    name     : pnomolos/phitly

    descrip. : Bit.ly v3 API wrapper

    keywords : api, bitly, http, phitly, wrapper

    versions : * dev-master, 0.1.0

    type     : library

    license  : BSD

    source   : [git] https://github.com/pnomolos/Phitly.git ...

    dist     : [zip] https://api.github.com/repos/pnomolos/Phitly/zipball/08168e492baa90e5a2b452af052a318aa376a5e1 ...

    names    : pnomolos/phitly

    autoload

    psr-0

    Phitly => lib/

    requires

    guzzle/guzzle 3.8.*

    league/oauth2-client dev-master

    php >=5.3.2
    </code></pre>

    ### composer depends vendor/package ###

    This gives you a list of packages that depend on the package you entered.

    For example, running `composer depends guzzle/guzzle` in your project root will give you a list of packages that depend on Guzzle, including the version.

    This is relevant because Guzzle's creator posted a [tweet](https://twitter.com/mtdowling/status/440901351657054208) earlier today asking people to stop using the `dev-master` version of Guzzle.

    ### composer dump-autoload --optimize ###

    Run this on your production environment for better performance. It converts PSR-0/4 to classmap, which is a faster autoloader.
    @endmarkdown

@stop

