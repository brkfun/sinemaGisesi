<div class="row justify-content-center" style=" margin-bottom: 50px;">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Bilet Detayınız</div>

            <div class="card-body">
                <img src="/{{ $film->resim }}" style="max-width: 150px" />
                <div>
                    {{ $film->adi }}
                </div>
                <div>
                    Bilet Numaranız : {{ $bilet->seans_id }} - {{ $bilet->koltuk_id }}<br>
                    Adı Soyadı : {{ json_decode($bilet->musteri_bilgileri,true)['adi'] }}<br>
                    Telefon Bilgisi : {{ json_decode($bilet->musteri_bilgileri,true)['tel'] }}
                </div>
            </div>
        </div>
    </div>
</div>