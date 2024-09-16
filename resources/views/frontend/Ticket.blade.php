@extends('layouts.front')

@section('title', 'Services page')

@section('content')
    
@include("frontend.partials.navbar");

@include("frontend.partials.ticket");

{{-- @include("frontend.partials.news"); --}}

{{-- @include("frontend.partials.book"); --}}

@include("frontend.partials.footer");
@endsection
