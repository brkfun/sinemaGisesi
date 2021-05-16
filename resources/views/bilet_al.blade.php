<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Bilet Al</div>

            <div class="card-body">
                <form method="post" action="{{ $route }}">
                    @if($tarihVal)
                        <input type="hidden" name="tarih" value="{{ $tarihVal }}">
                    @endif
                    @if($saatVal)
                        <input type="hidden" name="saat" value="{{ $saatVal }}">
                    @endif
                    @if($koltukVal)
                        <input type="hidden" name="koltuk" value="{{ $koltukVal }}">
                    @endif
                    @if($salonVal)
                        <input type="hidden" name="salon" value="{{ $salonVal }}">
                    @endif

                    @if($filmVal)
                        <input type="hidden" name="film" value="{{ $filmVal }}">
                    @endif
                    @csrf
                    <div class="form-group section-1">
                        <label for="tarih">Tarih Seçiniz</label>
                        <input id="tarih" name="tarih" class="input-datetime form-control" value="{{ $tarihVal ? $tarihVal : '' }}" {{ $tarihVal ? 'disabled' : '' }}/>
                        <label for="film">Film Seçiniz</label>
                        <select id="film" name="film" class="form-control form-control-lg" {{ $filmVal ? 'disabled' : '' }}>
                            <option {{ $filmVal ? '' : 'selected' }} value="null"> Film Seçiniz</option>
                            @foreach(\App\Models\Film::all() as $film)
                                <option {{ $filmVal && $filmVal==$film->id ? 'selected' : '' }} value="{{ $film->id }}">{{ $film->adi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group section-2 {{ $section2 || $section3 || $section4 ? '' : 'd-none' }}">
                        <label for="saat">Saat Seçiniz</label>
                        <select name="saat" id="saat" class="form-control form-control-lg " {{ $saatVal && $saatVal !== 'null' ? 'disabled' : '' }}>
                            <option selected value="null"> Saat Seçiniz</option>
                            @if(isset($times))
                                @foreach($times as $time)
                                    <option {{ $saatVal && $saatVal==$time ? 'selected' : '' }} value="{{ $time }}"> {{ $time }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group section-3 {{ $section3 || $section4 ? '' : 'd-none' }}">
                        <label for="salon">Salon Seçiniz</label>
                        <select name="salon" id="salon" class="form-control form-control-lg" {{ $salonVal && $salonVal !== 'null' ? 'disabled' : '' }}>
                            <option selected value="null"> Salon Seçiniz</option>
                            @if(isset($salons))
                                @foreach($salons as $salon)
                                    <option {{ $salonVal && $salonVal==$salon->id ? 'selected' : '' }} value="{{ $salon->id }}"> {{ $salon->adi }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="row {{ $section4 ? '' : 'd-none' }}">
                        <div class="form-group section-4 col-6">
                            <label for="koltuk">Koltuk Seçiniz</label>
                            <select name="koltuk" id="koltuk" class="form-control form-control-lg" {{ $koltukVal && $koltukVal !== 'null' ? 'disabled' : '' }}>
                                <option selected value="null"> Koltuk Seçiniz</option>
                                @if(isset($koltuks))
                                    @foreach($koltuks as $koltuk)
                                        <option {{ $koltukVal && $koltukVal==$koltuk->id ? 'selected' : '' }} value="{{ $koltuk->id }}"> {{ $koltuk->kod }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-6">
                            <img src="/koltuk-duzeni.jpg" style="max-width:100%;">
                        </div>
                    </div>
                    @if($saleReady)
                        <div class="form-group">
                            <label for="adi">Adınız Soyadınız</label>
                            <input id="adi" name="adi" class="form-control" value=""/>
                            <label for="tel">Telefon Numaranız</label>
                            <input id="tel" name="tel" class="form-control" value=""/>
                        </div>
                        <button type="submit" class="btn btn-success">Onayla ve Satın Al</button>
                    @else
                        <button type="submit" class="btn btn-primary">Devam Et</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>