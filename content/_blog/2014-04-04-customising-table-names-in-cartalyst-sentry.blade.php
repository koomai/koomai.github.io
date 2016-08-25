@extends('_includes.blog_post_base')

@section('post::title', 'Customising table names in Cartalyst Sentry')
@section('post::date', '4 April 2014')
@section('post::brief', 'A brief example on how to extend Sentry to fit your own needs.')
@section('post::image', 'rock04')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    [Sentry](https://github.com/cartalyst/sentry) is a neat little package for authenticating and managing admin users. It is a framework agnostic package but works well with Laravel. The great thing about it is that you can easily extend it to fit your own needs.

    I needed to rename a couple of tables - `users` to `admins` and `users_groups` to `admins_groups`. Here's how I did it.

    First, publish Sentry's configuration file:

        php artisan config:publish cartalyst/sentry    
        

    We need Sentry to use our custom Eloquent models - `AdminUser` and `AdminGroup` in the `app/models` directory. We'll make these changes in the configuration file.

    Go to `app/config/packages/cartalyst/sentry/config.php` and change the following:

    `'model' => 'Cartalyst\Sentry\Groups\Eloquent\Group'` to `'model' => 'AdminGroup'`

    `'model' => 'Cartalyst\Sentry\Users\Eloquent\User'` to `'model' => 'AdminUser'`

    Then extend Sentry's models and override their properties:

    *apps/models/AdminUser.php*
    <pre>
    <code class="language-php">
    class AdminUser extends Cartalyst\Sentry\Users\Eloquent\User {

      protected $table = 'admins';
      
      protected static $groupModel = 'AdminGroup';
      
      protected static $userGroupsPivot = 'admins_groups';

    }
    </code>
    </pre>

    *apps/models/AdminGroup.php*
    <pre>
    <code class="language-php">
    class AdminGroup extends Cartalyst\Sentry\Groups\Eloquent\Group {

      protected $table = 'groups';
      
      protected static $userModel = 'AdminUser';
      
      protected static $userGroupsPivot = 'admins_groups';
    } 
    </code>
    </pre>
        
    Finally, make sure Sentry's migration files reference the new table names. I simply copied over the migration files from `vendor/cartalyst/sentry/src/migrations` to `app/database/migrations` and renamed the tables to `admins` and `admins_groups`.

    *Edit*: When seeding the `admins_groups` table using Sentry's built-in methods, it tried to look for the columns `admin_user_id` and `admin_group_id`. For now I've just renamed the columns in the migration file.
        
    @endmarkdown

@stop

