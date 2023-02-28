<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Empresas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Equipos Asignados</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('equipoasignado.create') }}"> Equipos Asignados </a>
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
                    <th>Asignacion.No</th>
                    <th>Modelo</th>
                    <th>SN</th>
                    <th>Imei</th>
                    <th>Encargado</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($equipo_asignados as $equipo_asignado)

                <tr>
                    <td>{{$equipo_asignado->id}}</td>
                    <td>{{$equipo_asignado->equipo->modelo}}</td>
                    <td>{{$equipo_asignado->sn}}</td>
                    <td>{{$equipo_asignado->imei}}</td>
                    <td>{{$equipo_asignado->personal->nombre}} {{$equipo_asignado->personal->apellido}}</td>
                    <td>
                    <form action="{{route('equipoasignado.destroy',$equipo_asignado->id)}}">
                        <a class="btn btn-primary" href="{{route('equipoasignado.edit',$equipo_asignado->id)}}">Edit</a>
                        <a class="btn btn-primary" href="{{route('equipoasignado.show',$equipo_asignado->id)}}">Show</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el registro?')"> Delete </button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $equipo_asignados->links() !!}
    </div>
</body>
</html>