<section class="server-section">
    <div class="container">
        
        <div class="servers d-flex align-items-center justify-content-center flex-wrap gap-5">
            @foreach ( $servers as $server )
                
                <!-- Server -->
                <div class="server">
                    <div class="header">
                        <img src="{{ asset('storage//'.$server->image) }}" alt="Tiliwan" />
                        <div class="@if ( $server->active == true ) disponible @else indisponible @endif">
                            @if ( $server->active ) Disponible @else Indisponible @endif
                        </div>
                    </div>

                    <div class="server-name">{{ $server->name }}</div>

                    <div class="currency-btn d-flex align-items-center justify-content-between">
                        <a  @if ( $server->active == true ) onclick="$.get({url:'/euro',type:'GET',dataType:'json'})" href="{{ route('frontend.achat.quantity',[$server, $server->name]) }}" @else href="javascript:;" title="Indisponible" @endif class="euro-btn">
                            {{ floor( $server->price * 100 ) / 100 }} <span>€</span>
                        </a>
                        <a  @if ( $server->active == true ) onclick="$.get({url:'/usd',type:'GET',dataType:'json'})" href="{{ route('frontend.achat.quantity',[$server, $server->name]) }}" @else href="javascript:;" title="Indisponible" @endif class="usdt-btn">
                            {{ floor( $server->price_usd * 100 ) / 100 }} <span>$</span>
                        </a>
                    </div>
                </div>

            @endforeach
            
        </div>
    </div>
</section>