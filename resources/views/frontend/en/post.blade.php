<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
<x-en.main-navbar route="{{route('frontend.blog') }}" />

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
                    {{ $post->title }}
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section without-bottom-spacing">
    <div class="base-container w-container">
        <div data-w-id="e4193592-df02-34ae-d569-c968dfa83609" style="opacity:1" class="service-details-content">
            <div class="service-details-content-wrapper">
                <div data-w-id="499d30a1-58a7-eebe-47b5-1b919229da65" style="opacity:1"
                    class="rich-text-style-details w-richtext">
                    <h2>{{ $post->title }}</h2>


                    <p>{{ $post->excerpt }}</p>

                    <br>
                        
                    {!! $post->body !!}
                </div>
            </div>
            <div data-w-id="e4193592-df02-34ae-d569-c968dfa8362c" style="opacity:1"
                class="countries-details-sidebar-wrapper">
                <h5 class="no-margin">Plan Your Trip Now</h5>
                <div class="service-details-sidebar-contacts">
                    <div class="contacts-detail">
                        <p class="contacts-icon"></p><a
                            href="https://www.google.com/maps?q=3rd+Avenue,+83+Manhattan,+London,+UK&amp;gs_lcrp=EgZjaHJvbWUyBggAEEUYOdIBBzQyM2owajSoAgCwAgA&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwjjh6ekuf2BAxWi3gIHHZMzAKgQ_AUoAXoECAEQAw"
                            target="_blank" class="link-contact">3rd Avenue, 83 Manhattan, London, UK</a>
                    </div>
                    <div class="contacts-detail">
                        <p class="contacts-icon"></p><a href="tel:+12124258617" class="link-contact">+1 212 425
                            8617</a>
                    </div>
                    <div class="contacts-detail">
                        <p class="contacts-icon"></p><a href="mailto:information@office.com"
                            class="link-contact">information@office.com</a>
                    </div>
                </div><a href="/contact-us-1" class="link-with-arrow-underline">Contact us</a>
            </div>
        </div>
    </div>
</div>

<x-en.footer />
