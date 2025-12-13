@extends('Template::layouts.frontend')
@section('content')
    {{-- @include('Template::sections.banner') --}}

    @if (isset($sections->secs) && $sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @include('Template::sections.' . $sec)
        @endforeach
    @endif

    @include('Template::partials.new-product-section')

    @include('Template::partials.discount-ads-section')

    @include('Template::partials.top-product-section')

    @include('Template::partials.deal-section')
@endsection
