<!-- Swiper -->
<div class="section partner-section">
    <div class="base-container w-container">
        <h2>Socios que Confían en Nosotros</h2>
        <div class="partner-wrappers">
            <div class="partner-wrap">
                <img src="{{ asset('assets/images/partner-svg/new-b/santander.svg') }}" alt="Partner Logo">
            </div>
            <div class="partner-wrap">
                <img src="{{ asset('assets/images/partner-svg/new-b/BBVA.svg') }}" alt="Partner Logo">
            </div>
            <div class="partner-wrap">
                <img src="{{ asset('assets/images/partner-svg/new-b/dkv.svg') }}" alt="Partner Logo">
            </div>
            <div class="partner-wrap">
                <img src="{{ asset('assets/images/partner-svg/new-b/mapfre.svg') }}" alt="Partner Logo">
            </div>
            <div class="partner-wrap">
                <img src="{{ asset('assets/images/partner-svg/new-b/uned.svg') }}" alt="Partner Logo">
            </div>
            <div class="partner-wrap">
                <img src="{{ asset('assets/images/partner-svg/new-b/gobierno_de_espana.svg') }}" alt="Partner Logo">
            </div>
        </div>
    </div>
</div>

<style>
    .partner-section h2{
        color: #f9f9fa;
        font-size: 42px;
    }
    
    .partner-wrappers {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 50px;
        gap: 60px;
    }

    .partner-wrappers .partner-wrap {
        height: 50px;
    }
    
    .partner-wrappers .partner-wrap img{
        height: 100%;
        width: 100%;
    }

    @media screen and (max-width: 768px ){
        .partner-section h2 {
            text-align: center;
            font-size: 32px;
        }

        .partner-wrappers {
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .partner-wrappers {
            width: 100%;
            justify-content: space-between;
        }

        .partner-wrappers .partner-wrap {
            height: 50px;
        }
    }

    @media screen and (max-width: 480px ){
        .partner-section h2 {
            text-align: center;
            font-size: 32px;
        }

        .partner-wrappers {
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .partner-wrappers {
            width: 80%;
        }

        .partner-wrappers .partner-wrap {
            height: 50px;
        }
    }

</style>


  