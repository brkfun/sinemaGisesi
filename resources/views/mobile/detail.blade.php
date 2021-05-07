@extends('mobile.layouts.master')
@section('content')
    @include('mobile.partials.detail',['film' => $film])
@endsection
