<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    @stack('addon-style')
    @include('includes.style')
    @stack('prepend-style')
  </head>

  <body>
    <!-- Page Content -->
    @yield('content')
    
    {{-- footer --}}
    @include('includes.footer')

    @stack('addon-script')
    @include('includes.script')
    @stack('prepend-script')
  </body>
</html>
