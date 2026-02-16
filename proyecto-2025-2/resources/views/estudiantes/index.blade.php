<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Estudiantes</title>
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

  <div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-4xl font-extrabold text-center text-white mb-8">📚 Estudiantes</h1>

    <!-- ✅ Bloque corregido con botones Nuevo y PDF -->
    <div class="mb-6 flex justify-end gap-4 no-print">
      <!-- Botón Nuevo -->
      <a href="{{ route('estudiantes.create') }}"
         class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition transform hover:scale-105">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        Nuevo
      </a>

      <!-- Botón PDF -->
      <a href="{{ route('estudiantes.pdf') }}"
         class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition transform hover:scale-105">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4v16m8-8H4M16 4H8a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V6a2 2 0 00-2-2z"/>
        </svg>
        PDF
      </a>
    </div>

    <div class="bg-white text-gray-800 shadow-2xl rounded-2xl overflow-hidden">
      <table class="min-w-full table-auto">
        <thead class="bg-blue-800 text-white">
          <tr>
            <th class="px-6 py-3 text-left font-semibold">Código</th>
            <th class="px-6 py-3 text-left font-semibold">Nombres</th>
            <th class="px-6 py-3 text-left font-semibold">Primer Apellido</th>
            <th class="px-6 py-3 text-left font-semibold">Segundo Apellido</th>
            <th class="px-6 py-3 text-left font-semibold">DNI</th>
            <th class="px-6 py-3 text-center font-semibold">Ver</th>
            <th class="px-6 py-3 text-center font-semibold">Editar</th>
            <th class="px-6 py-3 text-center font-semibold">Eliminar</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach ($estudiantes as $estudiante)
          <tr class="hover:bg-blue-50 transition">
            <td class="px-6 py-4">{{ $estudiante->codigo }}</td>
            <td class="px-6 py-4">{{ $estudiante->nombres }}</td>
            <td class="px-6 py-4">{{ $estudiante->pri_ape }}</td>
            <td class="px-6 py-4">{{ $estudiante->seg_ape }}</td>
            <td class="px-6 py-4">{{ $estudiante->dni }}</td>
            <td class="px-6 py-4 text-center">
              <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transition transform hover:scale-105">
                👁️ Ver
              </button>
            </td>
            <td class="px-6 py-4 text-center">
              <a href="{{ route('estudiantes.edit', $estudiante->id) }}"
                 class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded transition transform hover:scale-105">
                ✏️ Editar
              </a>
            </td>
            <td class="px-6 py-4 text-center">
              <a href="{{ route('estudiantes.delete', $estudiante->id) }}"
                 class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded transition transform hover:scale-105">
                🗑️ Eliminar
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
