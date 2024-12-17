<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Laravel App')</title>
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div class="container">
    @yield('content')
  </div>
  <div>
    <p class="text-2xl">aaa</p>
  </div>
</body>

</html>
