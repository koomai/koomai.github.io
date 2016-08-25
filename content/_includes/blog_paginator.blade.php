<!-- Pager -->
<ul class="pager">
    @if($previousPage)
        <li class="previous">
            <a href="@url($previousPage)">&larr; Newer Posts</a>
        </li>    
    @endif

    @if($nextPage)
        <li class="next">
            <a href="@url($nextPage)">Older Posts &rarr;</a>
        </li>
    @endif   
</ul>