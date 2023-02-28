<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Equipo</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('equipo.create') }}">Agregar Equipo</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Categoria</th>
                    <th>Modelo</th>
                    <th>Descripcion</th>
                    <th>Adquisicion</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->id }}</td>
                        <td>{{ $equipo->categoria->nombre }}</td>
                        <td>{{ $equipo->modelo }}</td>
                        <td>{{ $equipo->description }}</td>
                        <td>{{ $equipo->fecha_adquisicion }}</td>
                        <td>
                            <form action="{{ route('equipo.destroy',$equipo->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('equipo.edit',$equipo->id) }}">Edit</a>
                                <a class="btn btn-primary" href="{{ route('equipo.show',$equipo->id) }}">Show</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Estás seguro que deseas eliminar el registro?')" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $equipos->links() !!}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>