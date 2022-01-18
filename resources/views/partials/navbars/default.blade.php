@extends('partials.common.nav.container')

@section('nav')
    @include('partials.common.nav.link', ['label' => 'Home', 'link' => '/'])
    @include('partials.common.nav.link', ['label' => 'About', 'link' => '/about'])
    @include('partials.common.nav.link', ['label' => 'Resources', 'link' => '/resources'])
    @include('partials.common.nav.link', ['label' => 'Contact', 'link' => '/contact'])
    @include('partials.common.nav.button', ['label' => 'Book a Call', 'link' => '/book'])
@endsection 