@extends('mobile.layouts.master')
@section('content')
    <div class="page-content">

        <div class="page-title-clear"></div>
        <div class="card card-style">
            <div class="card mb-0" style="background-image: url('/{{ $film->resim }}');height: 25vh;" data-card-height="550"></div>
            <div class="content mt-3">
                <p class="color-highlight font-500 mb-n1">{{ $film->kategori->adi }}</p>
                <h1>{{ $film->adi }}</h1>
            </div>
        </div>
    </div>

    @include('bilet_al')
@endsection
