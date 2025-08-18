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
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

  <!-- Main Content -->
  <main role="main">
    @yield('content')
  </main>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>