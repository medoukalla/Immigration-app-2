<x-en.head title="{{ setting('site.title') }}" />


{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper">
            <h1>About Us</h1>
            <p>At Immiworld, we specialize in guiding you through every step of your immigration process. With a team of experts and years of experience, we help you achieve your goals in Spain effectively and without complications.</p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Welcome</a>
                </div>
<<<<<<< HEAD
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
=======
                <img src=" {{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">
>>>>>>> 5b55a326f60fac40936f6591187a955f6d0e69dd
                <div class="p-path">
                    About Us
                </div>
            </div>
        </div>
    </div>
</div>


<div class="numbers-wrapper">
    <div data-w-id="221627f6-3a31-260f-8a97-6ec174e99870" class="w-layout-grid working-numbers">
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99871-296c1813" class="working-wrap">
            <div class="numbers">15+</div>
            <div class="numbers-text white-style">Years of Experience</div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813" class="working-wrap">
            <div class="numbers">84k</div>
            <div class="numbers-text white-style">Clients Worldwide</div>
            <div class="line home-white-left"></div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813" class="working-wrap">
            <div class="numbers">98%</div>
            <div class="numbers-text white-style">Success Rate</div>
            <div class="line home-white-left"></div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99882-296c1813" class="working-wrap">
            <div class="numbers">28k</div>
            <div class="numbers-text white-style">Visas Issued</div>
            <div class="line home-white-left"></div>
        </div>
    </div>
</div>

{{-- Hero section ENDS  --}}

<div class="section about-section">
    <div class="base-container w-container">
        <div class="our-journey">
            <div class="left-side">
                <div class="journey-subtitle">Our Story</div>
                <h2>Experts in Immigration Law in Málaga</h2>
            </div>
            <div class="right-side">
                <p>
                    At Immiworld, we began with a clear mission: to simplify immigration and residency processes for individuals and families seeking to establish their lives in Spain, with a special focus on Málaga. As a specialized law firm in immigration law, we have earned the trust of our clients by providing tailored legal solutions for each unique situation. Málaga, one of Spain's most dynamic and desirable cities, serves as the epicenter of our services, helping those who aspire to start a new chapter in this vibrant region.
                </p> <br>
                <p>
                    From non-lucrative residency permits to visas for entrepreneurs and digital nomads, we guide our clients through every step of the process, ensuring compliance with all legal requirements. With a team of highly skilled immigration attorneys based in Málaga, Immiworld has established itself as a leading authority in immigration and residency law, offering personalized support and efficient solutions for obtaining residence permits, citizenship, and other complex legal procedures in Spain.

                </p> <br>
                <p>    
                    Our goal is to make your immigration journey smooth and successful, always with a local and personalized approach. Málaga is our home, and from here, we assist individuals from around the world in achieving their goals in Spain.
                </p>
            </div>
        </div>
    </div>
</div>


<x-en.trust_immiworld />


{{-- Partner section --}}
<x-en.partners-black />

<!-- Call to action -->
<div class="section call-to-action">
    <div class="base-container w-container">
      <div class="call-to-action-box">
        <div class="call-subtitle">Your future starts here</div>
        <div class="call-title">Get the legal assistance you need for your<br>
          <span>immigration process in Spain</span>
        </div>
        <p>Whether you live in Spain or are planning to move here, our expert immigration lawyers will guide you every step of the way. We manage your paperwork efficiently so you can focus on your new beginning.</p>
        <div class="button-wrapper smaller-spacing">
          <a href="{{ route('frontend.sp.contact') }}" class="link-with-arrow-underline white-style">Contact us today</a>
        </div>
      </div>
    </div>
</div>


<!-- Solutions -->
<x-en.solutions />

<x-en.footer />
