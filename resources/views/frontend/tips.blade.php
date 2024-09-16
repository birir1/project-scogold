@extends('layouts.front')

@section('title', 'Tips page')

@section('content')
    
@include("frontend.partials.navbar");

@include("frontend.partials.tips");

{{-- @include("frontend.partials.news"); --}}

{{-- @include("frontend.partials.book"); --}}

@include("frontend.partials.footer");
@endsection
