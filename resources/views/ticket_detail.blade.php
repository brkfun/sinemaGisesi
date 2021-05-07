@extends('layouts.app')

@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Auth::user())
            <div class="row justify-content-center" style=" margin-bottom: 50px;">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Personel hesabı ile giriş yaptınız</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
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
                                Bilet Numaranız : {{ $bilet->seans_id }} - {{ $bilet->koltuk_id }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection

@section('js')

@endsection