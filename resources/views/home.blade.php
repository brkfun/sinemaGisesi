@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if(\Illuminate\Support\Facades\Auth::user())
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
            @endif
        </div>
    </div>
@endsection
