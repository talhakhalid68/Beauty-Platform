<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
  @include('layouts.seo')
  
  <body class="bg-smoke">
    <div class="preloader">
      <button class="th-btn style3 preloaderCls">Cancel Preloader</button>
      <div class="preloader-inner">
        <img style="width:50%;" src="{{ asset('assets/img/white-logo.png') }}" alt="Rasm" />
        <span class="loader"></span>
      </div>
    </div>
    
    @include('includes.header')
    
    @yield('content')
    
    @include('includes.footer')
    
    @include('includes.scripts')
  </body>
</html>