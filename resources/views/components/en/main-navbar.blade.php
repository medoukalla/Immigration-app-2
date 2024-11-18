<div data-animation="over-left" class="navbar-absolute w-nav" data-easing2="ease" data-easing="ease"
  data-collapse="medium" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
  <div class="nav-container w-container">
    <div class="nav-menu-wrapper"><a href="{{ route('frontend.index') }}" aria-current="page" class="brand w-nav-brand w--current"><img
          src="{{ asset('storage/'.setting('site.logo')) }}"
          loading="lazy" alt="logo" height="38" /></a>
      <nav role="navigation" class="nav-menu w-nav-menu">
        <div class="tablet-menu">
          <a href="{{ route('frontend.index') }}" aria-current="page" class="brand-tablet w-nav-brand w--current"><img
              src="https://cdn.prod.website-files.com/651f2c08c5bd81eb296c17aa/65269ae2dc5ceebc36a57753_logo-immigration.svg"
              loading="lazy" alt="logo" height="38" /></a>
          <div class="close-menu-button w-nav-button"><img
          src="{{ asset('assets/img/logo-black.png') }}"
          loading="lazy" alt="logo" height="38" /></div>
        </div>
            <div class="menu-wrap">
              <div data-hover="true" data-delay="0" data-w-id="ba67b287-f196-4627-29a8-f080f7e8b20d"
              class="nav-dropdown w-dropdown">
              <div class="nav-dropdown-toggle w-dropdown-toggle">
                <div class="nav-dropdown-icon w-icon-dropdown-toggle">
                </div>
                <p class="nav-item-title">Immigration</p>
              </div>
              <nav class="nav-dropdown-list w-dropdown-list">
                <div class="nav-dropdown-link-wrapper">
                  <a href="{{ route('frontend.residencia_para_emprendedores') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Entrepreneurs Residency
                  </a>
                  <a href="{{ route('frontend.arraigo_para_la_formacion') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Arraigo para la formación
                  </a>
                  <a href="{{ route('frontend.arraigo_familiar') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Arraigo Familiar
                  </a>
                  <a href="{{ route('frontend.arraigo_laboral') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Arraigo Laboral
                  </a>
                  <a href="{{ route('frontend.arraigo_social') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Arraigo Social
                  </a>
                  <a href="{{ route('frontend.residencia_no_lucrativa') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Non-lucrative Residency
                  </a>
                  <a href="{{ route('frontend.nomada_digital') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Digital nomad
                  </a>
                  <a href="{{ route('frontend.residencia_familiar_ue') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Residency of Family Members of EU Citizens
                  </a>
                  <a href="{{ route('frontend.reagrupacion_familiar') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Family reunification
                  </a>
                  <a href="{{ route('frontend.residencia_larga_duracion') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Long-term residence
                  </a>
                  <a href="{{ route('frontend.recurso_contencioso_administrativo') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Administrative litigation appeal
                  </a>
                  <a href="{{ route('frontend.recurso_administrativo') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Administrative appeal
                  </a>
                  <a href="{{ route('frontend.renovación_de_la_tarjeta_de_residencia') }}" class="nav-dropdown-link w-dropdown-link">
                    <span class="nav-dropdown-link-line"></span>Renewal of residence card (NIE)
                  </a>
                </div>
              </nav>
            </div>
            <div data-hover="true" data-delay="0" data-w-id="ba67b287-f196-4627-29a8-f080f7e8b20d"
              class="nav-dropdown w-dropdown m-left">
              <div class="nav-dropdown-toggle w-dropdown-toggle">
                <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                <p class="nav-item-title">Visas</p>
              </div>
              <nav class="nav-dropdown-list w-dropdown-list">
                <div class="nav-dropdown-link-wrapper">
                  <a href="{{ route('frontend.visa_de_estudiante') }}" aria-current="page" class="nav-dropdown-link w-dropdown-link"><span
                      class="nav-dropdown-link-line">
                    </span>Student visa</a>
                    <a href="{{ route('frontend.golden_visa') }}" class="nav-dropdown-link w-dropdown-link">
                      <span class="nav-dropdown-link-line"> </span>Golden Visa
                    </a>
                </div>
              </nav>
            </div>
            <a href="{{ route('frontend.nacionalidad') }}" class="nav-link w-nav-link m-left">Nationality</a>
            <div data-hover="true" data-delay="0" data-w-id="ba67b287-f196-4627-29a8-f080f7e8b20d"
              class="nav-dropdown w-dropdown">
              <div class="nav-dropdown-toggle w-dropdown-toggle">
                <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                <p class="nav-item-title">Services</p>
              </div>
              <nav class="nav-dropdown-list w-dropdown-list">
                <div class="nav-dropdown-link-wrapper">
                  <a href="{{ route('frontend.assurance') }}" aria-current="page" class="nav-dropdown-link w-dropdown-link "><span
                      class="nav-dropdown-link-line">
                    </span>Insurance</a>
                    <a href="{{ route('frontend.programmes') }}" class="nav-dropdown-link w-dropdown-link"><span
                      class="nav-dropdown-link-line"> </span>Study Programs</a>
                </div>
              </nav>
            </div>
            <a href="{{ route('frontend.about') }}" class="nav-link w-nav-link m-left">About Us</a>
            <a href="{{ route('frontend.contact') }}" class="nav-link w-nav-link">Contact</a>
            {{-- Language --}}
            <div class="lang-wrapper mobile-lang">
              <div class="lang-wrap">
                  <div class="lang-choose">
                    <a href="{{ route('frontend.sp.index') }}">
                      <img src="{{ asset('assets/images/svg/sp.svg') }}" alt="">
                      <span>Spanish</span>
                    </a>
                  </div>
              </div>
              <div class="nav-mobile-bottom-btn">
                <div class="button-wrapper">
                  <a href="javascript:void(0);" class="primary-button nav-tablet w-button openModalButton">Book a Consultation</a>
                </div>
              </div>
            </div>
          </div>
      </nav>
      {{-- Language --}}
      <div class="lang-wrapper desktop-lang">
        <div class="lang-wrap">
          <a href="{{ route('frontend.sp.index') }}">
            <img src="{{ asset('assets/images/svg/sp.svg') }}" alt="">
            <span>Spanish</span>
          </a>
        </div>
        <div class="search-shop-con">
            <a href="javascript:void(0);" class="primary-button w-button openModalButton">Book a Consultation</a>
        </div>
      </div>
      <div class="menu-button w-nav-button">
        <img
          src="{{ asset('assets/images/svg/menu-btn.svg') }}"
          loading="lazy" alt="icon" height="16" class="image-burger" />
      </div>
    </div>
  </div>
</div>


<!-- Custom Modal for Calendly -->
<div id="calendlyModal" class="modal-overlay">
  <div class="modal-content">
      <span class="close-modal" id="closeModalButton">&times;</span>
      <h5>Choose the time that best suits your consultation.</h5>
      <!-- Calendly Embed Code -->
      <div class="calendly-inline-widget" data-url="https://calendly.com/d/y5v-9f3-ztd/marouane?primary_color=ff6524" style="min-width:320px;height:700px;"></div>
      <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
  </div>
</div>


<!-- Custom CSS for Modal -->
<style>
    /* Modal overlay */
    .modal-overlay {
        display: none; /* Hidden by default */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 9999;
    }
    /* Modal content */
    .modal-content {
      position: absolute;
      padding: 20px;
      background-color: #fff;
      width: 90%;
      max-width: 600px;
      border-radius: 8px;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    /* Close button */
    .close-modal {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        cursor: pointer;
    }
</style>

<!-- jQuery to Control Modal Display -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Show modal when button is clicked
        $('.openModalButton').on('click', function() {
            $('#calendlyModal').fadeIn();
        });

        // Hide modal when close button is clicked
        $('#closeModalButton, .modal-overlay').on('click', function() {
            $('#calendlyModal').fadeOut();
        });

        // Prevent modal from closing when clicking inside the content area
        $('.modal-content').on('click', function(event) {
            event.stopPropagation();
        });
    });
</script>
