<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.includes.meta')
  <title>EstateAgency Bootstrap Template - @yield('title')</title>
  @include('layouts.includes.fonts_and_styles')
  
</head>

<body>
    @include('layouts.includes.search')
    @include('layouts.includes.navbar')
    @yield('content')
    @include('layouts.includes.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('layouts.includes.scripts')
</body>

</html>