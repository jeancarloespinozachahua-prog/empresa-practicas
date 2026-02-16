<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Editar Estudiante</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(to bottom right, #1e3a8a, #2563eb);
      min-height: 100vh;
      font-family: 'Figtree', sans-serif;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media print {
      body {
        background: white !important;
        color: black !important;
      }
      .no-print {
        display: none !important;
      }
    }
  </style>
</head>
<body class="text-white">

  <div class="flex items-center justify-center min-h-screen px-4">
    <div class="bg-white text-gray-900 shadow-2xl rounded-2xl p-8 w-full max-w-xl no-print">
      <h1 class="text-4xl font-extrabold text-center text-blue-700 mb-8">✏️ Editar Estudiante</h1>

      <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-6">
          <div>
            <label class="block text-sm font-bold text-gray-700">Código</label>
            <input type="text" name="codigo" value="{{ $estudiante->codigo }}" autocomplete="off"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>

          <div>
            <label class="block text-sm font-bold text-gray-700">Nombres</label>
            <input type="text" name="nombres" value="{{ $estudiante->nombres }}" autocomplete="off"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>

          <div>
            <label class="block text-sm font-bold text-gray-700">Primer Apellido</label>
            <input type="text" name="pri_ape" value="{{ $estudiante->pri_ape }}" autocomplete="off"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>

          <div>
            <label class="block text-sm font-bold text-gray-700">Segundo Apellido</label>
            <input type="text" name="seg_ape" value="{{ $estudiante->seg_ape }}" autocomplete="off"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>

          <div>
            <label class="block text-sm font-bold text-gray-700">DNI</label>
            <input type="text" name="dni" value="{{ $estudiante->dni }}" autocomplete="off"
                   class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
          </div>
        </div>

        <div class="mt-8 flex justify-end">
          <button type="submit"
                  class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-lg shadow-md transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            Guardar
          </button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
