<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Eliminar Estudiante</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(to bottom right, #1e3a8a, #2563eb);
      min-height: 100vh;
      font-family: 'Figtree', sans-serif;
      position: relative;
      overflow: hidden;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .leaf {
      position: absolute;
      width: 40px;
      height: 40px;
      background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Green_leaf_icon.svg/1024px-Green_leaf_icon.svg.png');
      background-size: cover;
      animation: floatLeaf 12s infinite linear;
      opacity: 0.6;
    }

    @keyframes floatLeaf {
      0% { transform: translateY(-100px) rotate(0deg); }
      100% { transform: translateY(120vh) rotate(360deg); }
    }

    .leaf:nth-child(1) { left: 10%; animation-delay: 0s; }
    .leaf:nth-child(2) { left: 30%; animation-delay: 2s; }
    .leaf:nth-child(3) { left: 50%; animation-delay: 4s; }
    .leaf:nth-child(4) { left: 70%; animation-delay: 6s; }
    .leaf:nth-child(5) { left: 90%; animation-delay: 8s; }

    @media print {
      body {
        background: white !important;
        color: black !important;
      }
      .leaf, .no-print {
        display: none !important;
      }
    }
  </style>
</head>
<body class="text-white">

  <!-- Hojas flotando -->
  <div class="leaf"></div>
  <div class="leaf"></div>
  <div class="leaf"></div>
  <div class="leaf"></div>
  <div class="leaf"></div>

  <div class="flex items-center justify-center min-h-screen px-4">
    <div class="bg-white text-gray-900 shadow-2xl rounded-2xl p-8 w-full max-w-xl no-print">
      <h1 class="text-3xl font-extrabold text-center text-red-600 mb-6">🗑️ Eliminar Estudiante</h1>

      <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="space-y-6">
          <div>
            <label class="block text-sm font-bold text-gray-700">Código</label>
            <input type="text" value="{{ $estudiante->codigo }}" readonly
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm bg-gray-100"/>
          </div>

          <div>
            <label class="block text-sm font-bold text-gray-700">Nombres</label>
            <input type="text" value="{{ $estudiante->nombres }}" readonly
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm bg-gray-100"/>
          </div>

          <div>
            <label class="block text-sm font-bold text-gray-700">Primer Apellido</label>
            <input type="text" value="{{ $estudiante->pri_ape }}" readonly
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm bg-gray-100"/>
          </div>

          <div>
            <label class="block text-sm font-bold text-gray-700">Segundo Apellido</label>
            <input type="text" value="{{ $estudiante->seg_ape }}" readonly
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm bg-gray-100"/>
          </div>

          <div>
            <label class="block text-sm font-bold text-gray-700">DNI</label>
            <input type="text" value="{{ $estudiante->dni }}" readonly
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm bg-gray-100"/>
          </div>
        </div>

        <div class="mt-8 flex justify-between">
          <!-- Botón Cancelar -->
          <a href="{{ route('estudiantes.index') }}"
             class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-6 rounded-lg shadow-md transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-gray-400">
            Cancelar
          </a>

          <!-- Botón Confirmar Eliminación -->
          <button type="submit"
                  class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-400">
            Confirmar Eliminación
          </button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
