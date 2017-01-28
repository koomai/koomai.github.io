@extends('_includes.blog_post_base')

@section('post::title', 'Soft Deleting a Model in Laravel')
@section('post::date', '24 January 2017')
@section('post::brief', 'A Caveat When Hooking into Model Events')
@section('post::image', 'sunset04')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown

    Soft deleting a model in Laravel is fairly straightfoward. 

    You add a `deleted_at` column to your table using a helper method in your migration:  

    ```
    Schema::table('posts', function ($table) {
        ...
        $table->softDeletes();
    });
    ```

    Then you add the `SoftDeletes` trait to your model:  

    ```
    ...
    class Post extends Model 
    {
        use SoftDeletes;
    ...
    ```

    That's it. When you call `Post::destroy($id)`, it will "soft delete" your record by adding the date/time to the `deleted_at` column and excluding it from subsequent query results.

    But what if you want to update another column too? For example, you may want to maintain a record of the logged in user in a `deleted_by` column. You can do this by hooking into the `deleting` model event (there is one caveat though).

    In the example above, you would add a `boot()` method to the `Post` model and hook into the `deleting` model event. Here, you update the model to add the logged in user's id to the `deleted_by` column.

    ```
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->deleted_by = Auth::id(); 
        });
    }
    ```  

    ### The Caveat  

    When you check your table, you'll find that the `deleted_by` column is not populated at all! It's because the `SoftDeletes` trait simply updates the `deleted_at` column ignoring any other changes in the model itself.

    In `Illuminate\Database\Eloquent\SoftDeletes`:  
    ```
    /**
     * Perform the actual delete query on this model instance.
     *
     * @return void
     */
    protected function runSoftDelete()
    {
        $query = $this->newQueryWithoutScopes()->where($this->getKeyName(), $this->getKey());

        $this->{$this->getDeletedAtColumn()} = $time = $this->freshTimestamp();

        $query->update([$this->getDeletedAtColumn() => $this->fromDateTime($time)]);
    }
    ```

    This was a bit confusing at first because when you normally hook into event like `updating` or `creating`, the changes to the model are applied when it is saved to the database. 

    In this case though, you have to explicitly call the `save()` method on the model to persist it before the soft deletion occurs. The above method would look like this:

    ```
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->deleted_by = Auth::id();
            $post->save();
        });
    }
    ```
    This now works. The `deleted_by` column is populated with the current user's id in the database and then soft deleted. 

    @endmarkdown

@stop

