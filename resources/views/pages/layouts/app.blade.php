<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pichturest</title>

  <!-- taildwind -->
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <!-- taildwind custom -->
  <link rel="stylesheet" href="{{ asset('assets/css/taildwind.css') }}" />

  <!-- Alphine js -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  @stack('link')
</head>

<body class="p-8 bg-gray-100">
  <!-- navbar -->
  @include('pages.layouts.navbar')
  <!-- end navbar -->

  @stack('script')
</body>

</html>
