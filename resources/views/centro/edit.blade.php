<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar datos</title>
  
</head>
<body>
    <h1>Editar Datos del centro</h1>
    <form action="{{ route('centro.update', $centro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="codigo">Codigo:</label>
        <input type="text" name="codigo" id="codigo" value="{{ $centro->codigo }}">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $centro->nombre }}">

        <label for="direccion">Posición:</label>
        <input type="text" name="direccion" id="direccion" value="{{ $centro->direccion }}">

        <label for="telefono">Posición:</label>
        <input type="text" name="telefono" id="telefono" value="{{ $centro->telefono }}">


        <button type="submit">Actualizar</button>
        <a href="{{ route('centro.index') }}">Volver al inicio</a>
    </form>
</body>
</html>



