<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield('title') - My Laravel App</title>
</head>
<body>
  <header>
    <h1 class="text-3xl font-bold underline">My Laravel App</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; {{ date('Y') }} My Laravel App</p>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
