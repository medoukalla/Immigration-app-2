<div class="section faq without-bottom-spacing">
  <div class="base-container w-container">
    <div data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b28" class="accordion-wrapper">
      <div class="faq-left-content">
        <div class="faq-title">
          Preguntas
          <span>Frecuentes</span>
          <p>
            Encuentra respuestas claras y detalladas a las dudas más comunes sobre nuestros servicios legales, Estamos aquí para ayudarte en cada paso de tu proceso.
          </p>
          <div class="faq-img">
            <img src="assets/images/flags-img.png" alt="Imagen de FAQ">
          </div>
        </div>
      </div>
      <div class="accordion-wrap">
          @foreach ( $faqs as $faq )      
              <div data-hover="false" data-delay="0" data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b4f"
                  class="accordion-item w-dropdown">
                  <div class="accordion-toggle w-dropdown-toggle">
                  <h6 class="accordion-title">{{ $faq->question }}</h6>
                  <div class="accordion-icon"></div>
                  </div>
                  <nav class="accordion-list w-dropdown-list">
                  <p class="accordion-list-content">{{ $faq->answer }}</p>
                  </nav>
              </div>
          @endforeach
      </div>
    </div>
  </div>
</div>
