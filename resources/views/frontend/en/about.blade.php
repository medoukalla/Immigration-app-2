<x-en.head title="About Us – Expert Immigration Lawyers in Málaga" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{ route('frontend.sp.about') }}" />


{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper" style=" min-height: 255px; ">
            <h1>SOBRE NOSOTROS

ABOUT US</h1>
            <p>
                At Immiworld, you receive specialized legal guidance in immigration law, focused on
providing clear, reliable and tailored solutions for your immigration process in Spain.

Each case is approached individually, ensuring that your situation is carefully analyzed and
managed in accordance with current immigration regulations.
            </p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Welcome</a>
                </div>
                <img src=" {{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">

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
            <div class="numbers">10+</div>
            <div class="numbers-text white-style">Years of Experience</div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813" class="working-wrap">
            <div class="numbers">+5.000</div>
            <div class="numbers-text white-style">Personalized Consultations</div>
            <div class="line home-white-left"></div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813" class="working-wrap">
            <div class="numbers">100%</div>
            <div class="numbers-text white-style">Satisfaction</div>
            <div class="line home-white-left"></div>
        </div>
    </div>
</div>


<!-- Services contact form -->
<section>
    <div class="without-bottom-spacing">
        <div class="base-container w-container">
            <div class="s-services">
                <h2 class="text-center">
                    <span>Service</span> Overview
                </h2>
                <p class="text-center">
                    Social Integration Residence is a residence permit that allows foreign nationals to reside
                    legally in Spain if they have remained in the country for at least two years prior to submitting
                    the application, and can demonstrate either family ties with other foreign residents holding a
                    valid residence permit or, where such ties cannot be proven, sufficient evidence of social
                    integration in Spain.
                </p>


                <div style="
                        display: flex;
                        justify-content: center;
                        margin-top: 20px;
                    ">
                    <a href="" class="primary-button w-button" style="margin: 0 auto; width: 250px">Sobre Nosotros</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Necessary documents -->
<section style="background: #efefef; padding: 100px 0">
    <div class="base-container w-container">
        <div class="section-rootedness">
            <h2 class="text-center">
                Why Choose Immiworld for Your Immigration Process
            </h2>
            <p class="text-center" style="width: 60%; margin: 0 auto">
                You are guided step by step through every stage of your immigration process. Complex legal
                procedures are explained clearly, so you always know what to expect and how to proceed.
            </p>
            <div class="section-rootedness-grid">
                <div class="left-rootedness">
                    <div class="rootedness first-rootedness">
                        <div class="number">1</div>
                        <div class="number-title">
                            Expert Legal Guidance
                        </div>
                        <p>
                            You are guided step by step through every stage of your immigration process. Complex legal
                            procedures are explained clearly, so you always know what to expect and how to proceed.
                        </p>
                    </div>
                    <div class="rootedness second-rootedness">
                        <div class="number">2</div>
                        <div class="number-title">
                            Personalized Solutions
                        </div>
                        <p>
                            Every case is unique. Your situation is carefully analyzed to design a legal strategy tailored
                            to your specific needs and goals, because behind every application there is a personal story.
                        </p>
                    </div>
                </div>
                <div class="midle-rootedness-img">
                    <img src="{{ asset('assets/images/why-choose-us.png') }}" alt="" />
                </div>
                <div class="right-rootedness">
                    <div class="rootedness third-rootedness">
                        <div class="number">3</div>
                        <div class="number-title">
                            Proven Track Record
                        </div>
                        <p>
                            With hundreds of satisfied clients, Immiworld has built a strong track record of achieving
                            successful outcomes in immigration, nationality and residency matters.
                        </p>
                    </div>
                    <div class="rootedness forth-rootedness">
                        <div class="number">4</div>
                        <div class="number-title">
                            A Team You Can Trust
                        </div>
                        <p>
                            You receive close and continuous support throughout the entire process, ensuring
                            professionalism, transparency and confidence at every stage.
                        </p>
                    </div>
                </div>
                <div class="midle-rootedness-img-mobile">
                    <img src="{{ asset('assets/images/why-choose-us.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>



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
