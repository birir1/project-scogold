@extends('layouts.front')

@section('title', 'Home page')

@section('content')
    
@include("frontend.partials.navbar");

@include("frontend.partials.landing");

@include("frontend.partials.news");

@include("frontend.partials.book");

@include("frontend.partials.footer");
@endsection

