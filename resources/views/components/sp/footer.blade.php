
<!-- Location -->
<div class="section without-bottom-spacing">
  <div class="base-container w-container">
      <div data-w-id="122cb505-565a-2cd5-bfc8-f182fa262f8a" class="home-contact-wrapper">
          <div class="home-1-map-block">
              <div class="home-1-contact-block">
                  <div>
                      <h6 class="text-white">Nuestra Ubicación</h6>
                        <a href="#" target="_blank" class="link-white">
                          Calle. Maestro Lecuona, 1, Local 7, 29006 Málaga
                        </a>
                  </div>
                  <div>
                      <h6 class="text-white">Información de Contacto</h6>
                      <div class="gap-8-px-row text-white">
                        
                        <a href="mailto:hola@immiworld.es" class="link-white">
                          Correo Electrónico: Hola@immiworld.es
                        </a>
                        
                        <a href="tel:0034657933788" class="link-white">
                          Teléfono : +34 657 933 788
                        </a>
                      </div>
                  </div>
              </div>
              <div class="_1-home-map-block">
                  <div class="map-2 w-widget w-widget-map" data-widget-style="roadmap" data-widget-latlng=""
                      aria-label="" data-enable-scroll="true" role="region" title="" data-enable-touch="true"
                      data-widget-zoom="12" data-widget-tooltip=""></div><img
                      src="{{ asset('assets/images/google-map.svg') }}"
                      loading="lazy"
                      sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 1279px) 58vw, (max-width: 1919px) 702px, 822px"
                      srcset="{{ asset('assets/images/google-map.svg') }} 1680w"
                      alt="map" class="map-1-temporary-image" />
              </div>
          </div>
      </div>
  </div>
  <div class="bg-dark"></div>
</div>

<!-- Footer section -->
<div class="footer">
    <div class="base-container w-container">
      <div class="footer-wrapper">
        <div class="footer-links-wrapper">
          <div class="logo">
            <img src="{{ asset('storage/'.setting('site.logo-white')) }}" alt="Logo" style=" max-width: 50% !important;!i;!; float: left; ">
          </div>
          <div class="thanks">
            <p>En Immiworld, especialistas en extranjería e inmigración, te ayudamos a gestionar tus trámites de residencia en España de forma rápida y segura</p>
          </div>
          <div class="institutions">
            <img src="{{ asset('assets/images/partner-svg/gobierno.svg') }}" alt="" style="margin-top: 10px; width: 100%"> 
          </div>
        </div>
        <div class="footer-links-wrapper">
          <h5 class="white-text mb-15">CONTÁCTENOS</h5>
          <a href="mail:support@immiworld.es" class="footer-link email-support">support@immiworld.es</a>
          <div class="social-media">
            <a target="_blanck" href="{{ setting('site.facebook') }}">
              <img src="{{ asset('assets/images/svg/facebook.svg') }}" alt="facebook">
            </a>
            <a target="_blanck" href="{{ setting('site.instagram') }}">
              <img src="{{ asset('assets/images/svg/instagram.svg') }}" alt="instagram">
            </a>
            <a target="_blanck" href="{{ setting('site.linkedin') }}">
              <img src="{{ asset('assets/images/svg/linkedin.svg') }}" alt="linkedin">
            </a>
            <a target="_blanck" href="{{ setting('site.whatsapp_link') }}">
              <img src="{{ asset('assets/images/svg/whatsapp.svg') }}" alt="whatsapp">
            </a>
          </div>
        </div>
        <div class="footer-links-wrapper">
          <h5 class="white-text mb-15">Nuestras oficinas</h5>
          <div class="adress-wrapper">
            <div class="adress mb-10">
              <div class="adress-p">Oficina de Málaga</div>
              <span>Maestro Lecuona 1, Local 7</span>
            </div>
          </div>
        </div>
        <div class="footer-links-wrapper">
          <h5 class="white-text mb-15">Nuestros servicios</h5>
          <a href="{{ route('frontend.sp.nacionalidad') }}" class="footer-link">Nacionalidad</a>
          <a href="{{ route('frontend.sp.nomada_digital') }}" class="footer-link">Nomada Digital</a>
          <a href="{{ route('frontend.sp.golden_visa') }}" class="footer-link">Golden Visa</a>
          <a href="{{ route('frontend.sp.residencia_no_lucrativa') }}" class="footer-link">Residencia No Lucrativa</a>
          <a href="{{ route('frontend.sp.reagrupacion_familiar') }}" class="footer-link">Reagrupación Familiar</a>
        </div>
      </div>
      <div class="footer-bottom-wrapper">
        <div class="footer-copyright">© 2024 Immiworld - todos los derechos reservados  <br>
          <span style="margin-top: 10px;">
            <a href="{{ route('frontend.sp.politique') }}">política de confidencialidad</a> |
            <a href="{{ route('frontend.sp.mention') }}">Aviso legal</a> |
            <a href="{{ route('frontend.sp.terms') }}">Términos y Condiciones</a>
          </span>
        </div>
        <div class="footer-rights-wrapper">
          <a href="#">
            <img src="{{ asset('assets/images/eura.png') }}" alt="Eura">
          </a>
          <a href="#">
            <img src="{{ asset('assets/images/authorize.png') }}" alt="Authorize">
          </a>
          <a href="#">
            <img src="{{ asset('assets/images/accredited.png') }}" alt="Accredited">
          </a>
          <a href="#">
            <img src="{{ asset('assets/images/approved.png') }}" alt="Approved">
          </a>
        </div>
      </div>
    </div>
</div>


  <!-- Swiper bundle JS-->
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=651f2c08c5bd81eb296c17aa" type="text/javascript"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/webflow.js') }}" type="text/javascript"></script>


  <style>
    .footer-rights-wrapper img {
      margin-right: 20px !important;
    }

    @media screen and (max-width: 479px) {
      .logo img {
        float: none !important;
      }
      .footer-rights-wrapper img {
        margin-right: none !important;
        padding: 7px;
      }
    }
  </style>

@livewireScripts
</body>

</html>