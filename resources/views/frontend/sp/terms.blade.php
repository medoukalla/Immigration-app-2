<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.terms') }}" />


    <div class="section without-bottom-spacing">
        <div class="base-container w-container">
            <div class="blog-template-wrapper">
                <div data-w-id="69302b84-0579-49d4-9c19-563421724178" style="opacity:1" class="rich-text-style-details w-richtext">

                    {!! setting('pages.terms_et_conditions_espagnol') !!}
                    
                </div>
            </div>
        </div>
    </div>


<x-sp.footer />
