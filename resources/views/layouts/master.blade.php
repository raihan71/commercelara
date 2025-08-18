<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SEO Meta Tags -->
  <meta name="description" content="@yield('meta_description', 'Default description for your website.')">
  <meta name="keywords" content="@yield('meta_keywords', 'keyword1, keyword2, keyword3')">
  <meta name="author" content="Commercelara">

  <title>@yield('title', 'Commercelara')</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo and Branding -->
        <div class="flex items-center">
          <a class="text-2xl font-bold text-blue-600" href="{{ url('/') }}" class="text-xl font-semibold text-gray-800">Commercelara</a>
        </div>
        <!-- Search Bar -->
        <div class="hidden md:block flex-1 max-w-lg mx-8">
          <div class="relative">
            <form action="{{ route('search') }}" method="GET">
              <input type="text" name="query" placeholder="Search..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
              </button>
            </form>
          </div>
        </div>
        <!-- Navigation Links -->
        <div class="flex items-center space-x-4">
          <a href="" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md font-medium">Beranda</a>
          <a href="" class="relative text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md font-medium">
            <i class="fas fa-shopping-cart"></i>
            <span class="absolute -top-1 -right-1 items-center justify-center w-5 h-5 flex bg-red-500 text-white text-xs font-bold rounded-full">0</span>
          </a>
        </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main role="main">
    @yield('content')
  </main>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>