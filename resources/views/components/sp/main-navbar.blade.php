<div data-animation="over-left" class="navbar-absolute w-nav" data-easing2="ease" data-easing="ease"
  data-collapse="medium" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
  <div class="nav-container w-container">
    <div class="nav-menu-wrapper"><a href="{{ route('frontend.sp.index') }}" aria-current="page" class="brand w-nav-brand w--current"><img
          src="{{ asset('storage/'.setting('site.logo')) }}"
          loading="lazy" alt="logo" height="38" /></a>
      <nav role="navigation" class="nav-menu w-nav-menu">
        <div class="tablet-menu">
          <a href="{{ route('frontend.sp.index') }}" aria-current="page" class="brand-tablet w-nav-brand w--current"><img
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
                <p class="nav-item-title">Extranjería</p>
              </div>
              <nav class="nav-dropdown-list w-dropdown-list">
                <div class="nav-dropdown-link-wrapper">
                  <a href="/" aria-current="page" class="nav-dropdown-link w-dropdown-link w--current"><span
                      class="nav-dropdown-link-line">
                    </span>Residencia para Emprendedores</a><a href="/home-2"
                    class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line"> </span>Arraigo para la
                    formación</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Arraigo Familiar</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Arraigo Laboral</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Arraigo Social</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Residencia no lucrativa</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Nómada digital</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Residencia de Familiar de Ciudadano de la UE</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Reagrupación familiar</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Residencia Larga duracion</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Recurso contencioso administrativo</a>
                  <a href="/" class="nav-dropdown-link w-dropdown-link"><span class="nav-dropdown-link-line">
                    </span>Recurso administrativo</a>
                </div>
              </nav>
            </div>
            <div data-hover="true" data-delay="0" data-w-id="ba67b287-f196-4627-29a8-f080f7e8b20d"
              class="nav-dropdown w-dropdown">
              <div class="nav-dropdown-toggle w-dropdown-toggle">
                <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                <p class="nav-item-title">Viasdos</p>
              </div>
              <nav class="nav-dropdown-list w-dropdown-list">
                <div class="nav-dropdown-link-wrapper">
                  <a href="/" aria-current="page" class="nav-dropdown-link w-dropdown-link w--current"><span
                      class="nav-dropdown-link-line">
                    </span>Visado de estudiante</a><a href="/home-2" class="nav-dropdown-link w-dropdown-link"><span
                      class="nav-dropdown-link-line"> </span>Golden visa</a>
                </div>
              </nav>
            </div>
            <a href="/" class="nav-link w-nav-link">Nacionalidad</a>
            <div data-hover="true" data-delay="0" data-w-id="ba67b287-f196-4627-29a8-f080f7e8b20d"
              class="nav-dropdown w-dropdown">
              <div class="nav-dropdown-toggle w-dropdown-toggle">
                <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                <p class="nav-item-title">Servicios</p>
              </div>
              <nav class="nav-dropdown-list w-dropdown-list">
                <div class="nav-dropdown-link-wrapper">
                  <a href="{{ route('frontend.sp.assurance') }}" aria-current="page" class="nav-dropdown-link w-dropdown-link w--current"><span
                      class="nav-dropdown-link-line">
                    </span>Seguro</a>
                    <a href="{{ route('frontend.sp.programmes') }}" class="nav-dropdown-link w-dropdown-link"><span
                      class="nav-dropdown-link-line"> </span>Programas de estudio</a>
                </div>
              </nav>
            </div>
            <a href="{{ route('frontend.sp.about') }}" class="nav-link w-nav-link">Sobre nosotros</a>
            <a href="{{ route('frontend.sp.contact') }}" class="nav-link w-nav-link">Contacto</a>

            <div class="button-wrapper">
              <a href="javascript:void(0);" class="primary-button nav-tablet w-button openModalButton">Pedir Cita</a>
            </div>
          </div>
      </nav>
      {{-- Language --}}
      <div class="lang-wrapper">
        <div class="lang-wrap">
          <div class="lang-selected" style="display: block">
            <img src="{{ asset('assets/images/svg/eng.svg') }}" alt="">
            <span>English</span>
          </div>
          <div class="lang-choose" style="display: none">
            <img src="{{ asset('assets/images/svg/sp.svg') }}" alt="">
            <span>Spanish</span>
          </div>
        </div>
        <div class="search-shop-con">
            <a href="javascript:void(0);" class="primary-button w-button openModalButton">Pedir Cita</a>
        </div>
      </div>
      <div class="menu-button w-nav-button"><img
          src="{{ asset('assets/images/svg/menu-btn.svg') }}"
          loading="lazy" alt="icono" height="16" class="image-burger white-style" /></div>
    </div>
  </div>
</div>


<!-- Custom Modal for Calendly -->
<div id="calendlyModal" class="modal-overlay">
    <div class="modal-content">
        <span class="close-modal" id="closeModalButton">&times;</span>
        <h5>Elija el horario que mejor le convenga para su consulta.</h5>
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
        position: relative;
        margin: 10% auto;
        padding: 20px;
        background-color: #fff;
        width: 90%;
        max-width: 600px;
        border-radius: 8px;
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
