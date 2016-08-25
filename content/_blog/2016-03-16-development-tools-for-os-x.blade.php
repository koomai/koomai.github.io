@extends('_includes.blog_post_base')

@section('post::title', 'Development Tools for OS X')
@section('post::date', '16 March 2016')
@section('post::brief', '')
@section('post::image', 'rock02')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    I am setting up my Macbook from scratch and decided to document my process here. Below is a list of apps/software I installed in order and a short summary of each.

    [**Google Chrome**](https://www.google.com/chrome/)  
    My browser of choice. Enough said. This is the first thing I did so I could log into my Google account and import my bookmarks and extensions (notable extensions include LastPass, Ghostery and The Great Suspender).

    [**Alfred App**](https://www.alfredapp.com/)  
    Although Spotlight has improved greatly over the years, I still rely heavily on Alfred App as a productivity tool. I mainly utilise its powerful search features and workflows.

    [**Dropbox**](https://www.dropbox.com/)  
    Dropbox makes it a cinch to sync files across different devices. I use it extensively on my computers and phone. It has become an indispensable tool for both work and personal purposes.

    [**Annotate**](https://itunes.apple.com/au/app/annotate-capture-screenshot/id918207447?mt=12)  
    I started using this screenshot app when it was known as Glui. It has very basic annotation features but the killer feature (for me anyway) is its integration with Dropbox. It saves me the trouble of using yet another cloud-based app for sharing screenshots.

    [**TotalFinder**](http://totalfinder.binaryage.com/)  
    TotalFinder enhances the Finder app with some neat features like dual windows, cut & paste and better tab management. Turns out it doesn't work on El Capitan without a [hack](http://totalfinder.binaryage.com/system-integrity-protection). So I'll have to try and live without it.

    [**Moom**](https://manytricks.com/moom/)  
    This is another tool that enhances a native feature. Moom makes it really easy to resize and move browser windows.

    [**iTerm2**](https://www.iterm2.com/)  
    I use iTerm2 instead of Terminal primarily because of its superior tabs and panes management. I installed [Homebrew](http://brew.sh/) and [Oh My ZSH](http://ohmyz.sh/). 

    [**GitX**](https://rowanj.github.io/gitx/)  
    I don't generally use GUIs for Git but GitX is very lightweight is useful for those days when you're lagging behind with your commits. It makes it easy to view your changes across multiple files and commit them separately. 

    [**PhpStorm**](https://www.jetbrains.com/phpstorm/)  
    I found IDEs too "heavy" for coding until I started using PhpStorm. It's made me more efficient although I know I'm not using it to its full potential yet. Also, for some reason my live templates for Laravel (mostly autocompletion for Facades) has gained a moderate amount of attention on [Github](https://github.com/koomai/phpstorm-laravel-live-templates).

    [**Sublime Text 3**](https://www.sublimetext.com/3)  
    I still use Sublime Text for quick edits or if I'm working on small frontend projects. 

    [**Node.js**](https://nodejs.org/en/)  and [**npm**](https://www.npmjs.com/)
    Npm is the de facto standard for installing most front end frameworks, libraries and build tools. *Note*: Follow instructions [here](https://docs.npmjs.com/getting-started/fixing-npm-permissions) to avoid issues when installing packages globally.

    [**Virtualbox**](https://www.virtualbox.org/)  
    Virtualbox does what its name says - it creates virtual machines. This gives you the flexibility to create your development environment without installing all kinds of software packages on your host machine.

    [**Vagrant**](https://www.vagrantup.com/)  
    Used with Virtualbox, Vagrant helps you create multiple development environments easily. It's a must-have tool for developers working on projects with different environments - e.g. different versions of PHP. You can find pre-built Vagrant boxes at [Vagrantbox.es](http://www.vagrantbox.es/). 

    Installing almost all of the above is incredibly easy using [Homebrew casks](https://github.com/caskroom/homebrew-cask). 

    `brew cask install google-chrome alfred dropbox totalfinder moom iterm2 rowanj-gitx phpstorm sublime virtualbox vagrant`

    That's about it. There are other tools and apps that I'll install gradually as I need them. For now, I've got all the essentials I need.

    @endmarkdown

@stop

