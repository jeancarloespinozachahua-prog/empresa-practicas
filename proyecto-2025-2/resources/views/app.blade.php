<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title inertia>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @media print {
      body {
        background: white !important;
        color: black !important;
      }
      .no-print {
        display: none !important;
      }
      .print-container {
        box-shadow: none !important;
        border: none !important;
        background: white !important;
      }
    }

    body {
      background: linear-gradient(135deg, #1e3a8a, #2563eb, #3b82f6);
      background-size: 400% 400%;
      animation: gradientShift 12s ease infinite, fadeIn 0.8s ease-in-out;
      font-family: 'Figtree', sans-serif;
      min-height: 100vh;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .card-animate {
      animation: cardFade 0.6s ease-in-out;
    }

    @keyframes cardFade {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }
  </style>

  <!-- Scripts -->
  @routes
  @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
  @inertiaHead
</head>
<body class="text-white antialiased">

  <div class="max-w-7xl mx-auto px-4 py-8">
    <div class="bg-white text-gray-900 shadow-2xl rounded-2xl p-8 print-container card-animate transition duration-500 ease-in-out hover:shadow-blue-400/60 hover:scale-[1.02]">
      @inertia
    </div>
  </div>

</body>
</html>
