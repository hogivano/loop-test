<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit-icons.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <script src="{{ asset('js/master.js') }}" charset="utf-8"></script>
  </head>
  <body>
    <div class="uk-container">
      <div class="uk-flex uk-flex-center p-30px">
        <img src="{{ asset('images/icon.png') }}" class="opacity-8 img-logo" alt="">
      </div>
    </div>
    @yield('content')
  </body>
  @yield('script')
</html>
