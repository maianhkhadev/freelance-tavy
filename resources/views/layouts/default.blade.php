<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout-default.css') }}" rel="stylesheet">
    @yield('stylesheet')
</head>
<body>
    <div id="root" class="layout-default">
      <header>
        <div class="container-fluid">
          <nav class="navbar navbar-expand-xl">
            <a class="navbar-brand" href={{ url("/") }}>LOGO</a>

            <div class="nav-icon collapsed" data-toggle="collapse" data-target="#navbarNav">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>

            <div id="navbarNav" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href={{ url("/about") }}>Về chúng tôi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href={{ url("/stone-and-brick") }}>Đá - Gạch</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href={{ url("/furniture") }}>Nội thất từ thiên nhiên</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href={{ url("/green-product") }}>Sản phẩm xanh</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href={{ url("/video") }}>Xúc tiến xuất nhập khẩu</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>

      <main class="main">
        @yield('content')
      </main>

      <footer>
        <div class="container">
          <div class="row">
            <div class="col-xl-2">
              <h1>LOGO</h1>
              <a class="link" href="">Facebook</a>
              <a class="link" href="">Instagram</a>
              <a class="link" href="">Twitter</a>
            </div>
            <div class="col-xl-3 ml-auto">
              <h2>Liên hệ</h2>
              <p>308C Điện Biên Phủ, Phường 4, Quận 3, TP.HCM</p>
              <p>
                TEL (+84) 915 70 7777<br>
                FAX (+84) 915 70 7777
              </p>
              <p>info@tavy.com</p>
            </div>
            <div class="col-xl-3">
              <h2>Sản phẩm</h2>
              <a class="link" href="">Đá - Gạch</a>
              <a class="link" href="">Nội thất làm từ thiên nhiên</a>
              <a class="link" href="">Sản phẩm xanh</a>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
</body>
</html>
