<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <!-- @vite('resources/css/app.css')  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/tailwind.js') }}"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    @include('components.navbar')

    <!-- Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
