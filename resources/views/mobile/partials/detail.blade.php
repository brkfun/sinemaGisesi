<div class="page-content">

    <div class="page-title-clear"></div>
    <div class="card card-style">
        <div class="card mb-0" style="background-image: url('/{{ $film->resim }}');height: 25vh;" data-card-height="550"></div>
        <div class="content mt-3">
            <p class="color-highlight font-500 mb-n1">{{ $film->kategori->adi }}</p>
            <h1>{{ $film->adi }}</h1>
        </div>
    </div>
    <div class="card card-style">
        <div class="content mt-0 mb-0">
            <div class="list-group list-custom-large check-visited">
                <a href="{{ route('mobile-buy-film',['filmId' => $film->id]) }}">
                    <i class="fa fa-dollar-sign font-14 bg-green-dark color-white rounded-sm shadow-xl"></i>
                    <span>Bilet Al</span>
                    <strong>Built to the Better Ad Standards</strong>
                    <i class="fa fa-angle-right"></i>
                </a>

            </div>
        </div>
    </div>

</div>
