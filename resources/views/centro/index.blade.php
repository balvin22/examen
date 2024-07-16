<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centros</title>
   
</head>
<body>
    <div class="container">
        <h1>centros registrados</h1>
        <a href="{{ route('centro.store') }}" class="btn-primary">Ingresar nuevo centro</a>
        <ul class="list-unstyled">
            @foreach ($centro as $centro)
                <li class="jugador-item">
                    <div class="jugador-info">
                        <a href="{{ route('centro.show', $centro->id) }}">{{ $centro->nombre }}</a>
                    </div>
                    <div class="jugador-actions">
                        <a href="{{ route('centro.edit', $centro->id) }}" class="btn-warning">Editar</a>
                        <form action="{{ route('centro.destroy', $centro->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
