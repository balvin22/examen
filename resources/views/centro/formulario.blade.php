
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos</title>
   
</head>
<body>
    <h1>Datos del centro</h1>

    <form action="{{ route('centro.store') }}" method="POST">
        @csrf
        <label for="codigo">codigo:</label>
        <input type="text" name="codigo" id="codigo">

        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="direccion">Posición:</label>
        <input type="text" name="direccion" id="direccion">

        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono">

        <div class="button-group">
            <button type="submit">Enviar</button>
            <a href="{{ route('centro.index') }}">Atrás</a>
        </div>
    </form>
</body>
</html>
