<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

    <div class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-4xl font-extrabold text-center text-blue-800 mb-8">📝 Comentarios</h1>

        <!-- Botones Nuevo y PDF -->
        <div class="mb-6 flex justify-end gap-4 no-print">
            <a href="{{ route('comentarios.create') }}"
               class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition transform hover:scale-105">
                Nuevo
            </a>

            <a href="{{ route('comentarios.pdf') }}"
               class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition transform hover:scale-105">
                PDF
            </a>
        </div>

        <!-- Tabla de comentarios -->
        <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
            <table class="min-w-full table-auto">
                <thead class="bg-blue-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold">Estudiante</th>
                        <th class="px-6 py-3 text-left font-semibold">Descripción</th>
                        <th class="px-6 py-3 text-left font-semibold">Curso</th>
                        <th class="px-6 py-3 text-center font-semibold">Ver</th>
                        <th class="px-6 py-3 text-center font-semibold">Editar</th>
                        <th class="px-6 py-3 text-center font-semibold">Eliminar</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($comentarios as $comentario)
                        <tr class="hover:bg-blue-50 transition">
                            <td class="px-6 py-4">
                                {{ $comentario->estudiante->nombres }} {{ $comentario->estudiante->pri_ape }} {{ $comentario->estudiante->seg_ape }}
                            </td>
                            <td class="px-6 py-4">{{ $comentario->descripcion }}</td>
                            <td class="px-6 py-4">{{ $comentario->curso }}</td>
                            <td class="px-6 py-4 text-center">
                                <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transition transform hover:scale-105">
                                    Ver
                                </button>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('comentarios.edit', $comentario->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded transition transform hover:scale-105">
                                    Editar
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded transition transform hover:scale-105">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
