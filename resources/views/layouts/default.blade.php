<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    <div class="site-main-container">
        @yield('content')
    </div>
    @include('includes.footer')
  </div>
</body>
</html>