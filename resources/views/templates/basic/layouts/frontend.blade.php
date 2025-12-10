@extends('Template::layouts.app')
@section('panel')
    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <div class="loader-p"></div>
    </div>
    <!--==================== Preloader End ====================-->
    <!--==================== Overlay Start ====================-->
    <div class="body-overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="sidebar-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>
    <!-- ==================== Scroll to Top End Here ==================== -->

        @if(checkUser(request()->route()->getName())) 
            @include("Template::partials.breadcrumb")
        @endif
            
    
    @include('Template::partials.card_sidebar')
    
    @include('Template::partials.header')
    
    @yield('content')
    
    @include('Template::partials.footer')

    <!-- Footer -->
@endsection
