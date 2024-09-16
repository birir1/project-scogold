@extends('layouts.front')

@section('title', 'Mountain-Destination page')

@section('content')
    
@include("frontend.partials.navbar");

@include("frontend.partials.mountain");

{{-- @include("frontend.partials.news"); --}}

{{-- @include("frontend.partials.book"); --}}

@include("frontend.partials.footer");
@endsection
