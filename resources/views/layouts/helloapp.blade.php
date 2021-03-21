<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>サーカレ！</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <style>
    body { margin: 0; }
    a { text-decoration: none; }
    .top-wrapper { padding: 240px 0 300px 0; background-image: url(/images/activity_image_2.jpg); background-size: cover; color: white; text-align: center; }
    .container { width: 1170px; padding: 0 15px; margin: 0 auto; }
    .top-wrapper h1 { opacity: 1; font-size: 60px; letter-spacing: 5px; }
    .top-wrapper p { opacity: 1; font-size: 20px; margin-bottom: 20px; }
    .fa { margin-right: 5px; }
    .forms { margin: 100px 0 0 0; }
    .form-tag { float: left; width: 16%; }
    /*ヘッダー */
    header { height: 65px; width: 100%; background-color: rgba(0,0,0,0); position :fixed; top: 0; z-index: 10; }
    .logo { width: 124px; margin-top: 0px; height: 65px; }
    .logo:hover { width: 124px; margin-top: 0px; height: 65px; opacity: 0.3; transition: all 0.5s; }
    .header-left { float: left; }
    .header-right { float: right; }
    .login { background-color: rgba(255, 255, 255, 1); transition: all 0.5s; margin-right: 1px; }
    .login:hover { background-color: rgba(255, 255, 255, 0.3); }
    .register { background-color: rgba(255, 255, 255, 1); transition: all 0.5s; }
    .register:hover { background-color: rgba(255, 255, 255, 0.3); }
    .user { background-color: rgba(255, 255, 255, 1); transition: all 0.5s; margin-right: 1px; }
    .user:hover { background-color: rgba(255, 255, 255, 0.3); }
    .header-right a { float: left; line-height: 65px; padding: 0 25px; color: #0099CC; cursor: pointer; display: block; }
    .dropdown-item { background-color: rgba(255, 255, 255, 1); transition: all 0.5s; }
    .dropdown-item:hover { background-color: rgba(255, 255, 255, 0.3); }
    .item { color:white; text-decoration: underline; }
    .person { color:white; text-decoration: underline; }
    /*登録ページ */
    .pagination { font-size:10pt; }
    .pagination li { display:inline-block; }
    th { background-color:#999; color:fff; padding:5px 10px; }
    td { border: solid 1px #aaa; color:fff; padding:5px 10px; }
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
  @yield('top-wrapper')
  @yield('content')
  </div>
</body>
</html>



