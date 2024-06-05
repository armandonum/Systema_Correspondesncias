<!DOCTYPE html>
<html>
<head>
    <title>Correspondencias</title>
</head>
<body>
    <h1>Correspondencias</h1>
    <a href="{{ route('correspondencias.create') }}">Agregar Correspondencia</a>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Remitente</th>
                <th>Asunto</th>
                <th>Cite</th>
                <th>Destinatario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($correspondencias as $correspondencia)
            <tr>
                <td>{{ $correspondencia->fecha }}</td>
                <td>{{ $correspondencia->remitente }}</td>
                <td>{{ $correspondencia->asunto }}</td>
                <td>{{ $correspondencia->cite }}</td>
                <td>{{ $correspondencia->destinatario_id }}</td>
                <td>
                    <a href="{{ route('correspondencias.edit', $correspondencia->id) }}">Editar</a>
                    <form action="{{ route('correspondencias.destroy', $correspondencia->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
