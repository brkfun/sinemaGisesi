@extends('mobile.layouts.master')
@section('content')
    @component('mobile.partials.note',['title' => 'Filmler'])
        @include('mobile.partials.slider',['films' => \App\Models\Film::all()])
    @endcomponent
@endsection
