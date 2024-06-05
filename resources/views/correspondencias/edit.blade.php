<!DOCTYPE html>
<html>
<head>
    <title>Editar Correspondencia</title>
</head>
<body>
    <h1>Editar Correspondencia</h1>
    <form action="{{ route('correspondencias.update', $correspondencia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Fecha:</label>
        <input type="date" name="fecha" value="{{ $correspondencia->fecha }}" required>
        <label>Remitente:</label>
        <input type="text" name="remitente" value="{{ $correspondencia->remitente }}" required>
        <label>Asunto:</label>
        <input type="text" name="asunto" value="{{ $correspondencia->asunto }}" required>
        <label>Cite:</label>
        <input type="text" name="cite" value="{{ $correspondencia->cite }}" required>
        <label>Destinatario:</label>
        <select name="destinatario_id" required>
            @foreach ($destinatarios as $destinatario)
                <option value="{{ $destinatario->id }}" @if ($correspondencia->destinatario_id == $destinatario->id) selected @endif>{{ $destinatario->nombre }}</option>
            @endforeach
        </select>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
