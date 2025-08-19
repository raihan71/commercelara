<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO Meta Tags -->
  <meta name="description" content="@yield('meta_description', 'Default description for your website.')">
  <meta name="keywords" content="@yield('meta_keywords', 'keyword1, keyword2, keyword3')">
  <meta name="author" content="Commercelara">

  <title>@yield('title', 'Commercelara')</title>

  <!-- CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 antialiased">

  <!-- Header -->
  <nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo and Branding -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <a class="text-2xl font-bold text-blue-600" href="{{ url('/') }}" class="text-xl font-semibold text-gray-800">Commercelara</a>
          </div>
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
        <div class="flex items-center space-x-2 md:space-x-4">
          <a href="" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md font-medium">Beranda</a>
          <a href="{{route('cart.index')}}" class="relative text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md font-medium">
            <i class="fas fa-shopping-cart"></i>
            <span class="absolute -top-1 -right-1 items-center justify-center w-5 h-5 flex bg-red-500 text-white text-xs font-bold rounded-full">0</span>
          </a>
        </div>
      <a href="" class="hidden md:block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">Login</a>
    </div>
  </nav>

  <!-- Main Content -->
  <main role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    @yield('content')
  </main>

  <!-- footer -->
  <footer class="bg-gray-900 text-white py-8 mt-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
              <div>
                  <h3 class="text-lg font-semibold mb-4">MarketPlace</h3>
                  <p class="text-gray-400">Your trusted online marketplace for quality products.</p>
              </div>
              <div>
                  <h4 class="font-semibold mb-4">Customer Service</h4>
                  <ul class="space-y-2 text-gray-400">
                      <li><a href="#" class="hover:text-white">Contact Us</a></li>
                      <li><a href="#" class="hover:text-white">FAQ</a></li>
                      <li><a href="#" class="hover:text-white">Returns</a></li>
                  </ul>
              </div>
              <div>
                  <h4 class="font-semibold mb-4">Company</h4>
                  <ul class="space-y-2 text-gray-400">
                      <li><a href="#" class="hover:text-white">About Us</a></li>
                      <li><a href="#" class="hover:text-white">Careers</a></li>
                      <li><a href="#" class="hover:text-white">Press</a></li>
                  </ul>
              </div>
              <div>
                  <h4 class="font-semibold mb-4">Follow Us</h4>
                  <div class="flex space-x-4">
                      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                  </div>
              </div>
          </div>
          <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
              <p>&copy; 2025 MarketPlace. All rights reserved.</p>
          </div>
      </div>
  </footer>

  <!-- Scripts -->
</body>
</html>