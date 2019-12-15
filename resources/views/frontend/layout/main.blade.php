@include('frontend.layout.header')

{{-- <body class="goto-here"> --}}

  {{-- @include('frontend.layout.navbar') --}}

  @yield('content')

  @include('frontend.layout.footer')