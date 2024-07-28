<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
</head>
<body class="flex flex-col min-h-screen">
  <header class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold underline py-4">Free potatoes</h1>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="{{ route('home') }}" class="hover:text-gray-300">Home</a></li>
          <li><a href="{{ route('login.page') }}" class="hover:text-gray-300">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="flex-grow">
    @yield('content')
  </main>

  <footer class="bg-gray-800 text-white text-center p-4">
    <p>&copy; {{ date('Y') }} My Laravel App</p>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
