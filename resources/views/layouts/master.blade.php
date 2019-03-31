<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('layouts.header')
  </head>

<header>
    @include('layouts.nav')
</header>

<body>

    <div class="">

      @yield('content')

    </div>

@yield('custom_scripts')
</body>

<footer>
  @include('layouts.footer')
</footer>

</html>
