<!DOCTYPE html>
<html>
<head>
    <title>Menú</title>
</head>
<body>
    <h1>Menú Principal</h1>
    <ul>
        <li><a href="{{ route('correspondencias.index') }}">Listar Correspondencias</a></li>
        <li><a href="{{ route('correspondencias.create') }}">Agregar Correspondencia</a></li>
    </ul>
</body>
</html>
