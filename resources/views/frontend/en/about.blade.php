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
                <img src="assets/images/svg/arrow.svg" alt="Path arrow">
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
                <h2>Experts in Immigration and Foreigners' Law in Málaga</h2>
            </div>
            <div class="right-side">
                <p>
                    At Immiworld, we started with a clear mission: to simplify the immigration and foreign affairs procedures for individuals and families who wish to settle in Spain, especially in Málaga. Our law firm, specialized in immigration law, has grown thanks to the trust of our clients, offering legal solutions tailored to each situation. Málaga, as one of the most dynamic and attractive cities to live in, is the epicenter of our services, helping those looking for a fresh start in this region.
                </p> <br>
                <p>
                    From non-lucrative residence permits to visas for entrepreneurs or digital nomads, we guide our clients through every step of the process, ensuring compliance with all legal requirements. With a team of expert lawyers in Málaga, Immiworld has positioned itself as a reference in immigration and foreign affairs consulting, offering personalized support and effective solutions for obtaining residence permits, nationality, and other complex procedures in Spain.
                </p> <br>
                <p>    
                    We are here to make your immigration process simple and successful, always with a local and personalized approach. Málaga is our base, and from here we help people from all over the world achieve their goals in Spain.
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
