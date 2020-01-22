<ul>
    @foreach ($categories as $category)
    <li><a href="#"><span>{{ $category->name }}</span></a></li>
    @endforeach
</ul>