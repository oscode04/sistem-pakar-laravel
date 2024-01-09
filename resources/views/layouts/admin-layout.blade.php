<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('tittle')</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" ></script>

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.vendor-style')
    @include('includes.landing-page-content-style')
    @stack('addon-style')
  </head>
  <body>
    {{-- navbar --}}
    @include('includes.admin-navbar')

    {{-- content --}}
    @yield('content')


    {{-- script --}}
    @stack('prepend-script')
    @include('includes.vendor-script')
    @stack('addon-script')
  </body>
</html>
