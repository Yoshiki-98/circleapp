<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>サーカレ!</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      body { margin: 0; }
      a { text-decoration: none; }
      .top-wrapper { padding: 150px 0 300px 0; background-image: url(/images/activity_image_2.jpg); background-size: cover; color: white; text-align: center; }
      .container { width: 1170px; padding: 0 15px; margin: 0 auto; }
      .navbar-brand { opacity: 1; color: white; font-size: 80px; }
      .card-header { margin: 0 0 50px 0; font-size: 50px; }
      .btn-link { color: white; text-decoration: underline; display:block; }
      .form-check-label { text-decoration: underline; }
      .br::before { content: "\A"; white-space: pre; }
      .dr::after { content: "\A"; white-space: pre; }
      .form-control { width: 400px; margin: 0 0 50px 0; }
      .circle-info { width: 400px; }
      table { margin: auto; }
      .a_form {margin: 0 0 50px 0; }
      .button { color:white; font-size: 30px; text-decoration: underline; display:block; margin: 100px 0 100px 0; }
      /*ヘッダー */
      header { height: 65px; width: 100%; background-color: rgba(0,0,0,0); position :fixed; top: 0; z-index: 10; }
      .logo { width: 124px; margin-top: 0px; height: 65px; }
      .header-left { float: left; }
      .header-right { float: right; }
      .login { background-color: rgba(255, 255, 255, 1); transition: all 0.5s; margin-right: 1px;}
      .login:hover { background-color: rgba(255, 255, 255, 0.3); }
      .register { background-color: rgba(255, 255, 255, 1); transition: all 0.5s; }
      .register:hover { background-color: rgba(255, 255, 255, 0.3); }
      .user { background-color: rgba(255, 255, 255, 1); transition: all 0.5s; margin-right: 1px; }
      .user:hover { background-color: rgba(255, 255, 255, 0.3); }
      .dropdown-item { background-color: rgba(255, 255, 255, 1); transition: all 0.5s; }
      .dropdown-item:hover { background-color: rgba(255, 255, 255, 0.3); }
      .header-right a { float: left; line-height: 65px; padding: 0 25px; color: #0099CC; cursor: pointer; display: block; }
      /*登録ページ */
      .pagination { font-size:10pt; }
      .pagination li { display:inline-block; }
      th { background-color:#999; color:fff; padding:5px 10px; }
      td { border: solid 1px #aaa; color:#999; padding:5px 10px; }
      tr th a:link { color: white; }
      tr th a:visited { color: white; }
      tr th a:hover { color: white; }
      tr th a:active { color: white; }
    </style>
    <link rel="shortcut icon" href="/images/circle.ico">
</head>
<body>
    <header>
    @yield('header')
    </header>
    <div class="top-wrapper">
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
