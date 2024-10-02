<div class="section top-bar">
    <div class="base-container w-container">
      <div class="top-bar-wrapper">
        <div class="adress-class">
          <div class="adress-time"><img src="{{ asset('assets/images/svg/top-time.svg') }}" alt="Time"> Lun-Ven | {{ setting('site.working-ours') }}
          </div>
          <div class="adress-whats"><img src="{{ asset('assets/images/svg/top-whatsapp.svg') }}" alt="whatsapp"> {{ setting('site.whatsapp') }}</div>
        </div>
        <div class="social-bar">
          <a href="{{ setting('site.facebook') }}" target="_blanck">
            <img src="{{ asset('assets/images/svg/top-facebook.svg') }}" alt="facebook">
          </a>
          <a href="{{ setting('site.instagram') }}" target="_blanck">
            <img src="{{ asset('assets/images/svg/top-instagram.svg') }}" alt="instagram">
          </a>
          <a href="{{ setting('site.linkedin') }}">
            <img src="{{ asset('assets/images/svg/top-linkedin.svg') }}" alt="linkedin">
          </a>
        </div>
      </div>
    </div>
</div>