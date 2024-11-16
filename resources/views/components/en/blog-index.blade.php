<div class="section without-bottom-spacing">
    <div class="base-container w-container">
      <div data-w-id="e4b01cad-d7fb-7d45-4504-1016bae76010" style="opacity:0" class="section-title-wrapper">
        <h2 class="section-title">Our Blog</h2>
        <p>Explore articles and news about immigration, visas, and legal advice. Stay informed with our guides and practical tips.</p>
      </div>
      <div class="home-blog-collection w-dyn-list">
        <div role="list" class="home-blog-list w-dyn-items">
        
            @foreach ( $articles as $article )
            
                <div data-w-id="e4b01cad-d7fb-7d45-4504-1016bae76017" style="opacity:0" role="listitem"
                    class="home-blog-item w-dyn-item">
                    <article class="home-blog-wrapper"><a href="#"
                        class="home-blog-image w-inline-block"><img
                        src="{{ asset('storage/'.$article->image) }}"
                        loading="lazy" alt="photo"
                        sizes="(max-width: 479px) 30vw, (max-width: 1279px) 31vw, (max-width: 1919px) 372.046875px, 435.65625px"
                        class="blog-grid-image" /></a>
                    <div class="home-blog-content">
                        <div><a href="#" class="w-inline-block">
                            <h6 class="blog-post-title">{{ $article->title }}</h6>
                        </a>
                        <p class="no-margin">
                            {{ $article->excerpt }}
                        </p>
                        </div>
                        <div class="button-wrapper smaller-spacing"><a href="#"
                            class="link-with-arrow-underline">Read the full post</a></div>
                    </div><a href="#" class="home-blog-category">Immigration</a>
                    </article>
                </div>

            @endforeach
            

        </div>
      </div>
    </div>
</div>
