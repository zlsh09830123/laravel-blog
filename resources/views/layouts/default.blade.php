<!DOCTYPE html>
<html lang="zh_TW">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="/" class="navbar-brand">Blog</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a href="/help" class="nav-link">幫助</a></li>
          <li class="nav-item"><a href="#" class="nav-link">登入</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
