@extends('layouts.index')

@section('content')
    @include('partial.header')
    @include('pages.hero')
    <main id="main">
        @include('admin.about.aboutList')
        @include('admin.facts.factsList')
        @include('admin.skills.skillsList')
        @include('admin.portfolio.portfolioList')
        @include('admin.services.servicesList')
        @include('admin.contact.contactList')
    </main>
    @include('partial.footer')
    
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
@endsection