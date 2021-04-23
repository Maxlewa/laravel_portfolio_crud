@extends('layouts.index')

@section('content')
    @include('partial.header')
    @include('pages.hero')
    <main id="main">
        @include('pages.about')
        @include('pages.facts')
        @include('pages.skills')
        @include('pages.portfolio')
        @include('pages.services')
        @include('pages.contact')
    </main>
    @include('partial.footer')
    
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
@endsection