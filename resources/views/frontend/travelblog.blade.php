@extends('layouts.front')

@section('title', 'Blog page')

@section('content')
    
@include("frontend.partials.navbar");

@include("frontend.partials.travelblog");

{{-- @include("frontend.partials.news"); --}}

{{-- @include("frontend.partials.book"); --}}

@include("frontend.partials.footer");
@endsection