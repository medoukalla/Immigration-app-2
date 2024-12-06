<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
<x-en.main-navbar route="{{route('frontend.sp.blog') }}" />


{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper">
            <h1>Our Blog</h1>
            <p>Explore articles and updates on immigration, visas, and legal advice. Stay informed with our guides and practical tips.</p>
            <div class="pages-path">
                <div class="p-path">
                    Home
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">
                <div class="p-path">
                    Immigration
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">
                <div class="p-path">
                    Blog
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
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99882-296c1813" class="working-wrap">
            <div class="numbers">+1.200</div>
            <div class="numbers-text white-style">Happy Clients</div>
            <div class="line home-white-left"></div>
        </div>
    </div>
</div>
{{-- Hero section ENDS  --}}


<x-en.blog-index :articles="$posts" />


<x-en.footer />
