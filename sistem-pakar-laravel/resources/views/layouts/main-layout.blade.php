<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('tittle')</title>

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.vendor-style')
    @include('includes.landing-page-content-style')
    @stack('addon-style')
  </head>
  <body>
    {{-- navbar --}}
    @include('includes.navbar')

    {{-- content --}}
    @yield('content')


    {{-- script --}}
    @stack('prepend-script')
    @include('includes.vendor-script')
    @stack('addon-script')
  </body>
</html>
