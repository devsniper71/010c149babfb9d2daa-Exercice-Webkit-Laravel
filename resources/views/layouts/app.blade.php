<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/x-icon" />


    @vite(['resources/assets/sass/app.scss','resources/js/app.js'])
    <!-- Script Files Here -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <!-- Main content -->
    @yield('content')
  </body>
</html>
