<!doctype html>
  <html lang="en">
  <head>
    @include('user.layouts.head')
    @stack('head')
  </head>
  <body>

      @include('user.layouts.navbar')

      @yield('content')

      @include('user.layouts.footer')

  </body>
</html>
