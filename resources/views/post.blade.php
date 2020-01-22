@extends('layouts.app')

@section('content')
<article id="the-cosmos">
    <p class="debug-center">Article</p>
    {{-- <img class="size-4" src="{{ asset('img/1.png') }}" alt="">
    <img class="size-3" src="{{ asset('img/2.png') }}" alt="">
    <img class="size-2" src="{{ asset('img/3.png') }}" alt="">
    <img class="size-1" src="{{ asset('img/1.png') }}" alt=""> --}}
    <h1><a href="#">The <em>Cosmos</em> is all is</a></h1>
    <h2>Or ever was, or ever will be</h2>

    <time datetime="03-09-2014">MAR, 9, 2014</time>
    <p>
        <em>Lorem, ipsum dolor.</em>, Lorem, ipsum. <a href="#">Lorem, ipsum.</a>Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Nisi, nulla! Quis, mollitia.
        Lorem ipsum dolor sit amet consectetur adipisicing.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quaerat provident sequi nihil ipsum.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam molestiae eos soluta iusto voluptates debitis
        neque nam, ullam delectus mollitia sequi similique perferendis cupiditate velit!
    </p>

    <figure class="size-1">
        <img src="{{ asset('img/3.png') }}" alt="">
    </figure>
    <figcaption>
        <p>The <em>Cosmos</em>.</p>
    </figcaption>

    <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error perspiciatis numquam aut iste quaerat, dolores
        magni sequi asperiores totam reiciendis architecto placeat exercitationem, repellat commodi! Veritatis labore,
        hic eius beatae, nihil amet quis harum fugit aliquam velit pariatur laborum, doloribus in excepturi vitae! Sed
        eligendi enim accusantium ratione asperiores ullam?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero possimus explicabo corporis nisi quidem iste
        aperiam beatae quod consequatur. Illo, tenetur nostrum quae facilis consectetur aliquid ad reprehenderit natus
        ullam at expedita exercitationem rem sint voluptatem porro, possimus amet ipsam fuga hic eius nemo! Consectetur
        iste eveniet nobis nam nisi.
        <b>Lorem ipsum dolor sit amet, consectetur adipisicing.</b>
    </p>

    <div class="share">
        <a href="#"><img src="{{ asset('img/1.png') }}"></a>
        <a href="#"><img src="{{ asset('img/2.png') }}"></a>
    </div>
</article>
@endsection

@section('styles')
<link href="{{ asset('css/apps.css') }}" rel="stylesheet">
@endsection