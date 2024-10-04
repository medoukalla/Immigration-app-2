<div class="section without-bottom-spacing">
    <div class="base-container w-container">
      <div data-w-id="e4b01cad-d7fb-7d45-4504-1016bae76010" style="opacity:0" class="section-title-wrapper">
        <h2 class="section-title">Últimas noticias</h2>
        <p>Estamos aquí para guiarte en cada paso del camino. Nuestro experimentado equipo de expertos está dedicado a hacer
          que tu viaje a un nuevo país sea lo más fluido y libre de estrés posible.</p>
      </div>
      <div class="home-blog-collection w-dyn-list">
        <div role="list" class="home-blog-list w-dyn-items">
        
            @foreach ( $articles as $article )
            
                <div data-w-id="e4b01cad-d7fb-7d45-4504-1016bae76017" style="opacity:0" role="listitem"
                    class="home-blog-item w-dyn-item">
                    <article class="home-blog-wrapper"><a href="{{ route('frontend.post', $article) }}"
                        class="home-blog-image w-inline-block"><img
                        src="{{ asset('storage/'.$article->image) }}"
                        loading="lazy" alt="foto"
                        sizes="(max-width: 479px) 30vw, (max-width: 1279px) 31vw, (max-width: 1919px) 372.046875px, 435.65625px"
                        class="blog-grid-image" /></a>
                    <div class="home-blog-content">
                        <div><a href="{{ route('frontend.post', $article) }}" class="w-inline-block">
                            <h6 class="blog-post-title">{{ $article->title }}</h6>
                        </a>
                        <p class="no-margin">
                            {{ $article->excerpt }}
                        </p>
                        </div>
                        <div class="button-wrapper smaller-spacing"><a href="{{ route('frontend.post', $article) }}"
                            class="link-with-arrow-underline">Leer la publicación completa</a></div>
                    </div><a href="{{ route('frontend.post', $article) }}" class="home-blog-category">Inmigración</a>
                    </article>
                </div>

            @endforeach
            

        </div>
      </div>
    </div>
</div>
