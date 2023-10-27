<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asistentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Tabla asistentes</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-info">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Hora Ingreso</th>
                    <th>Cantidad Acompañantes</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assistants as $assistant)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$assistant->name}}</td>
                    <td>{{$assistant->last_name}}</td>
                    <td>{{$assistant->age}}</td>
                    <td>{{$assistant->num_companions}}</td>
                    <td>{{$assistant->register_time}}</td>
                    <td>
                    <form action="{{ route('assistants.destroy', $assistant->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>