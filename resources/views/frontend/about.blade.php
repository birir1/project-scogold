@extends('layouts.front')

@section('title', 'About page')

@section('content')
    
@include("frontend.partials.navbar");

@include("frontend.partials.landing");

@include("frontend.partials.ourstory");

@include("frontend.partials.values");

@include("frontend.partials.team");

{{-- @include("frontend.partials.landing"); --}}

@include("frontend.partials.footer");
@endsection
