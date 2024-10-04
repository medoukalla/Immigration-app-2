<div class="section feedback without-bottom-spacing">
  <div class="base-container w-container">
    <div class="feedback-heading">
      <div class="feedback-big-title">
        ¡No te quedes solo con nuestra palabra! <br>
        <span>
          ¡Mira lo que nuestros antiguos clientes tienen que decir sobre
          nosotros!
        </span>
      </div>
      <img class="google-rating" src="assets/images/svg/google-rating-reviews.svg" alt="Calificación de Google">
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Caja de comentarios -->
        @for ($i = 0; $i < count($testimonials); $i++)
          <div class="swiper-slide">
              <div class="writer-info">
              <div class="writer-left">
                  <div class="writer-img">
                  S
                  </div>
                  <div class="writer-n-y">
                  <div class="writer-n">
                      {{ $testimonials[$i]->name }}
                  </div>
                  <div class="writer-y">{{ $testimonials[$i]->created_at->diffForHumans() }}</div>
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
                  {{ $testimonials[$i]->textimonial }}
              </p>
          </div>
        @endfor

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
