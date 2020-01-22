<ul class="iq-tags list-inline">
    @foreach ($tags as $tag)
    <li><a href="#">{{ $tag->name }}</a></li>
    @endforeach
</ul>