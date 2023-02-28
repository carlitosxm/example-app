<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orden de trabajo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Orden de trabajo</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('ordentrabajo.create') }}"> Nueva Orden de trabajo </a>
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
                    <th>N. Orden</th>
                    <th>Tecnico</th>
                    <th>Tipo mantenimiento</th>
                    <th>Equipo</th>
                    <th>Fecha de ingreso</th>
                    <th>Fecha de salida</th>
                    <th>Trabajos</th>
                    <th>Estado</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($orden_trabajos as $orden_trabajo)

                <tr>
                    <td>{{$orden_trabajo->id}}</td>
                    <td>{{$orden_trabajo->tecnico->nombre}}</td>
                    <td>{{$orden_trabajo->tipomantenimiento->nombre}}</td>
                    <td>{{$orden_trabajo->equipo_asignado->sn}}</td>
                    <td>{{$orden_trabajo->fecha_ingreso}}</td>
                    <td>{{$orden_trabajo->fecha_salida}}</td>
                    <td>{{$orden_trabajo->trabajos}}</td>
                    <td>{{$orden_trabajo->estado}}</td>
                    <td>
                    <form action="{{route('ordentrabajo.destroy',$ordentrabajo->id)}}">
                        <a class="btn btn-primary" href="{{route('ordentrabajo.edit',$ordentrabajo->id)}}">Edit</a>
                        <a class="btn btn-primary" href="{{route('ordentrabajo.show',$ordentrabajo->id)}}">Show</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el registro?')"> Delete </button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $orden_trabajos->links() !!}
    </div>
</body>
</html>