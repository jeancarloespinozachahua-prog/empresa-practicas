<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Estudiantes</title>
    <style>
        body { font-family: sans-serif; font-size: 14px; }
        h1 { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>📚 Listado de Estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombres</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>DNI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->codigo }}</td>
                    <td>{{ $estudiante->nombres }}</td>
                    <td>{{ $estudiante->pri_ape }}</td>
                    <td>{{ $estudiante->seg_ape }}</td>
                    <td>{{ $estudiante->dni }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
