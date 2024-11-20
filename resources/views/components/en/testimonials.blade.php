<div class="section feedback without-bottom-spacing">
  <div class="base-container w-container">
    <div class="feedback-heading">
      <div class="feedback-big-title">
        Reviews <br>
        <span>
          Discover what our clients say about us!
        </span>
      </div>

      <img class="google-rating" src="{{ asset('assets/images/svg/google-rating-reviews.svg') }}" alt="Calificación de Google">
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Caja de comentarios -->

        @foreach ($testimonials as $testimonial)
        
          <div class="swiper-slide">
              <div class="writer-info">
              <div class="writer-left">
                  <div class="writer-img">
                  {{ substr($testimonial->name, 0, 1) }}
                  </div>
                  <div class="writer-n-y">
                  <div class="writer-n">
                      {{ $testimonial->name }}
                  </div>
                  <div class="writer-y">{{ $testimonial->created_at->diffForHumans() }}</div>
                  </div>
              </div>
              <div class="writer-right">
                  <img src="assets/images/svg/google.svg" alt="Imagen de Google">
              </div>
              </div>
              <div class="stars">
              <img class="google-stars" src="assets/images/svg/stars.svg" alt="Estrellas de Google">
              </div>
              <p>
                  {{ $testimonial->textimonial }}
              </p>
          </div>
            
        @endforeach

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
