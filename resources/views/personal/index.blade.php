<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Personal</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('personal.create') }}"> Agregar Personal </a>
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
                    <th>N.Personal</th>
                    <th>Departamento</th>
                    <th>Empresa</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($personals as $personal)

                <tr>
                    <td>{{$personal->id}}</td>
                    <td>{{$personal->departamento->nombre}}</td>
                    <td>{{$personal->empresa->nombre}}</td>
                    <td>{{$personal->nombre}}</td>
                    <td>{{$personal->apellido}}</td>
                    <td>
                    <form action="{{route('personal.destroy',$personal->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary" href="{{route('personal.edit',$personal->id)}}">Edit</a>
                        <a class="btn btn-primary" href="{{route('personal.show',$personal->id)}}">Show</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el registro?')"> Delete </button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $personals->links() !!}
    </div>
</body>
</html>