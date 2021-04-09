<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Styles -->
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">

      <!-- Scripts -->
      <script src="{{ asset("js/manifest.js") }}" defer></script>
      <script src="{{ asset("js/vendor.js") }}" defer></script>
      {{ $scripts }}
  </head>
  <body class="font-sans antialiased">
      <div class="min-h-screen bg-gray-100">
          <!-- Page Content -->
          <main>
              {{ $slot }}
          </main>
      </div>
  </body>
</html>