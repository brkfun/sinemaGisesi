<div class="splide double-slider visible-slider slider-no-dots" id="double-slider-1">
    <div class="splide__track">
        <div class="splide__list">
            @if(isset($films))
                @foreach($films as $film)
                    <div class="splide__slide ps-3">
                        <a href="{{ route('mobile-detail',['filmId' => $film->id]) }}">
                            <div data-card-height="220" class="card  shadow-xl rounded-m" style="background-image: url('/storage/{{ $film->resim }}')">
                                <div class="card-bottom text-center">
                                    <h4 class="color-white font-800 mb-3">{{ $film->adi }}</h4>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
