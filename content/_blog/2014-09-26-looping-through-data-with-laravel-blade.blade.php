@extends('_includes.blog_post_base')

@section('post::title', 'Looping through data with Laravel Blade')
@section('post::date', '29 September 2014')
@section('post::brief', '')
@section('post::image', 'rock02')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    When it comes to looping through data in your `View` files using Laravel's Blade templates, there is more than one way to <a href="http://english.stackexchange.com/questions/32123/origin-of-the-phrase-theres-more-than-one-way-to-skin-a-cat" target="_blank">skin a cat</a>. 

    Say you have an array (or some records from your database) that you want to loop through and display in your view file:

    <pre>
    <code class="language-php">
    &#36;books = [
        [
            'id'        => 1,
            'title'     => 'Tame of Groans',
            'author'    => 'George M'
        ],
        [
            'id'        => 2,
            'title'     => 'Rort of the Lings',
            'author'    => 'John T'
        ],
        [
            'id'        => 3,
            'title'     => 'Yvan Eht Nioj',
            'author'    => 'Bart S'
        ],
    ];
    </code>
    </pre>
    In `app/views/books/index.blade.php`, you have:

    <pre><code class="language-php">
    &#64;if (count(&#36;books))
        &#64;foreach(&#36;books as &#36;book)
            &#64;include('books.single', &#36;book)
        &#64;endforeach
    &#64;else
       &lt;p&gt;No Books exist.&lt;/p&gt;
    &#64;endif        
    </code></pre>
        
    In `app/views/books/single.blade.php`, you have:

    <pre><code class="language-php">
    &lt;li&gt;@{{{ &#36;book['title'] }}} by &lt;strong&gt;@{{{ &#36;book['author'] }}}&lt;/strong&gt;&lt;/li&gt;
    </code></pre>
        
    This will display the `$books` array like this:

    * Tame of Groans by **George M**
    * Rort of the Lings by **John T**
    * Yvan Eht Nioj by **Bart S**

    If the array is empty, it will simply display *No Books exist.*

    Laravel makes it easier to check for empty data with the `forelse` Blade syntax. Amend the above control structure to this:

    <pre><code class="language-php">
    &#64;forelse(&#36;books as &#36;book)
        &#64;include('books.single', &#36;book)
    &#64;empty
        &lt;p>No Books exist.&lt;/p>
    &#64;endforelse
    </code></pre>

    You will get the exact same results.

    I recently <a href="http://ericlbarnes.com/rebuilding-wardrobe-week-4-timezones/#comment-1604650472" target="_blank">came across</a> an undocumented Laravel Blade syntax - `each`. It actually simplifies the above example further and makes your code cleaner:

    <pre><code class="language-php">
    &#64;each('books.single', &#36;books, 'book', 'raw|&lt;p>No Books exist.&lt;p>')
    </code></pre>

    That's it. Again, you will get the exact same results.

    This implements the `renderEach` method in the `Illuminate\View\Factory` class.

    <pre><code class="language-php">
    public function renderEach($view, $data, $iterator, $empty = 'raw|')
    {
        ...
    }
    </code></pre>

    It accepts the `View` file and the array as the first two arguments. 

    The third argument is the variable with the iterated value. Think of it as passing `compact('book')` to `books.single` after each iteration.

    The last parameter displays a `View` file or a string if the array is empty. It needs to be prefixed with `raw|` if you pass a string as the argument. 

    In the example above, you could put `<p>No Books exist.</p>` into a file `apps/views/books/empty.blade.php`. Then change `each` to this:

    <pre><code class="language-php">&#64;each('books.single', &#36;books, 'book', 'books.empty')</code></pre>
        
    Exact same results again. High five!
 

    @endmarkdown

@stop

