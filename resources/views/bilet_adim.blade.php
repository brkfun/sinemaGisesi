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
        @include('bilet_al')
    </div>
@endsection

@section('js')
    <script>
        $('.input-datetime').datepicker({
            language: "tr",
            startDate: 0,
        });
    </script>
@endsection