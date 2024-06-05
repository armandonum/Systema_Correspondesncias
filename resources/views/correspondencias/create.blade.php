<!DOCTYPE html>
<html>
<head>
    <title>Agregar Correspondencia</title>
</head>
<body>
    <h1>Agregar Correspondencia</h1>
    <form action="{{ route('correspondencias.store') }}" method="POST">
        @csrf
        <label>Fecha:</label>
        <input type="date" name="fecha" required>
        <label>Remitente:</label>
        <input type="text" name="remitente" required>
        <label>Asunto:</label>
        <input type="text" name="asunto" required>
        <label>Cite:</label>
        <input type="text" name="cite" required>
        <label>Destinatario:</label>
        <select name="destinatario_id" required>
            @foreach ($destinatarios as $destinatario)
                <option value="{{ $destinatario->id }}">{{ $destinatario->nombre }}</option>
            @endforeach
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
