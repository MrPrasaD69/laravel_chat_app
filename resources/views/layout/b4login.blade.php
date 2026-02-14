<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ url('assets/js/jquery-4.0.0.js')}}" crossorigin="anonymous"></script>
</head>
<body>

  <main class="container mt-4">
      @yield('content')
  </main>

  @include('partials.footer')
</body>

</html>