<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header>
      @include('partials.nav')
  </header>

  <main class="container mt-4">
      @yield('content')
  </main>

  @include('partials.footer')
</body>

</html>