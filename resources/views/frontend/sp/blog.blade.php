<x-sp.head title="{{ setting('site.title') . ' - ' . 'Blog' }}" />

<div class="wrapper bg-dark">

    <x-sp.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">

                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">


                <a href="javascript:void(0)">Blog
                </a>


            </p>
            <h2 class="text-center">Blog</h2>
        </div>
    </div>
    <!-- Qui sommes end -->
</div>
<!-- wrapper end  -->


<!-- Derniers articles start  -->
<div class="DerniersArticles">
    <div class="container">
        <!-- row start  -->
        <div class="BlogSlider row">

            @if ( $posts->count() == 0 )
                <h4 class="soon-warning">Pronto: ¡Prepárense!</h4>
            @else

            @foreach ($posts as $post)
                <div class="col-sm-4 col-md-6 col-lg-4">
                    <!-- single item start  -->
                    <div class="BlogSliderItem mb-5">
                        <a href="{{ route('frontend.sp.post', $post) }}" class="d-block">
                            <img src="{{ asset('storage' . '/' . $post->image) }}" alt=" img"
                                class="img-fluid blogImg">
                            <span class="box d-block">
                                <h4>{{ $post->title }}</h4>
                                <p>{{ $post->excerpt }} ...</p>
                                <span class="d-flex justify-content-between flex-wrap mt-4">
                                    <span class="date">
                                        {{ $post->created_at->format('d/m/y') }}
                                    </span>
                                    <span class="ReadMore">
                                        <span>Consulter l’article</span> <img src="{{ asset('img/arrowRgiht0.svg') }}"
                                            alt="img" class="img-fluid">
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- single item end  -->
            @endforeach

            @endif

        </div>

        <div class="row">
            {{ $posts->links() }}
        </div>
        <!-- row end -->
    </div>
</div>
<!-- Derniers articles end -->



<x-sp.footer />
