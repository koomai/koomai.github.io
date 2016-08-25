@extends('_includes.blog_post_base')

@section('post::title', 'Iframes and Cookies in Internet Explorer')
@section('post::date', '2 February 2014')
@section('post::brief', '')
@section('post::image', 'sunset04')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    Iframes are annoying enough without Internet Explorer throwing its own quirks at it. IE ignores cookies and discards your session variables when you navigate to another page within an iframe. If this is happening to your application, you probably don't have a <a href="http://www.w3.org/P3P/" target="_blank">P3P Policy</a>, an "initiative" that's been around for years but only IE seems to care about. Here's <a href="https://support.google.com/accounts/answer/151657?hl=en" target="_blank">Google's take on it</a>.

    The easiest way to get IE to play nice with your iframe's cookies is to include a "<a href="http://www.w3.org/TR/2000/CR-P3P-20001215/#compact_policy_vocabulary" target="_blank">compact policy</a>" with  your HTTP headers. In PHP, it would look like this:

        header("P3P:CP='NOI ADM DEV PSAi COM NAV OUR OTR STP IND DEM'");

    However, I don't want to include the above in other browsers. I'll have to include some superfluous browser sniffing code just to target IE. I'm not too keen on that.

    Adding it to the Apache configuration is a better idea. I don't want to edit the *httpd.conf*  file, so I'll just add it to the *.htaccess* file in the document root (or create one if it doesn't exist):
        
        <ifModule mod_headers.c>
            Header set P3P 'CP="NOI ADM DEV PSAi COM NAV OUR OTR STP IND DEM"'
        </ifModule>

    Above, I check if the *headers_module* is loaded and include the P3P header if it exists. This is better but it still doesn't solve my second problem - target just IE. Luckily, I can do some browser sniffing with the *BrowserMatch* directive in the Apache configuration.
        
        <ifModule mod_headers.c>
            BrowserMatch "MSIE" is_IE
            Header set P3P 'CP="NOI ADM DEV PSAi COM NAV OUR OTR STP IND DEM"' env=is_IE
        </ifModule>
        
    The above code performs a regex match on the browser's User-Agent string, uses the specified alias *is_IE* as an environment variable and includes the P3P header only when it matches.
    @endmarkdown

@stop

