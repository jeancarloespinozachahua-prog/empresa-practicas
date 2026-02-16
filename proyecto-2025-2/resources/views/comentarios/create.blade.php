<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estudiantes</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <h1 class="text-3xl font-bold underline">
            Comentarios Create
        </h1>
        <br>
        <form action="{{ route('comentarios.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        
            @csrf

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Estudiante</label>
                <select
                    name="estudiante_id"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                >
                    <option value="">--- Seleccionar Estudiante ---</option>

                    @foreach ($estudiantes as $estudiante)
                        <option value="{{ $estudiante->id }}">{{ $estudiante->nombres }} {{ $estudiante->pri_ape }} {{ $estudiante->seg_ape }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Descripción
                </label>
                <input type="text" name="descripcion" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Curso
                </label>
                <input type="text" name="curso" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Guardar
                </button>
            </div>
        </form>
    </body>
</html>