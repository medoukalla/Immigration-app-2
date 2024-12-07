<div class="section faq without-bottom-spacing">
  <div class="base-container w-container">
    <div data-w-id="8989ee74-68aa-89b0-f9fb-c214c3221b28" class="accordion-wrapper">
      <div class="faq-left-content">
        <div class="faq-title">
          Frequently
          <span>Asked Questions</span>
          <p>
            Find clear and detailed answers to the most common questions about our legal services. We are here to help you every step of the way

          </p>
          <div class="faq-img" style=" width: 100% !important; ">
            <img src="{{ asset('assets/images/faq.svg') }}" alt="FAQ image" style=" padding-right: 70px; padding-top: 50px; ">
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
