<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Equipo Asignado</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Equipo Asignado</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('equipoasignado.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('equipoasignado.update',$equipo_asignado->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div>
                        <strong>Equipo:</strong>
                        <select class="selectpicker form-control" name="equipo_id" >
                            @forelse ($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->modelo}}</option>
                            @empty
                            <option>no hay registros</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Empresa:</strong>
                        <select  class="selectpicker form-control" name="empresa_id">
                        @forelse ($empresas as $empresa)
                        <option  value="{{$empresa->id}}">{{$empresa->nombre}}</option>
                        @empty
                        <option>no hay registros</option>
                        @endforelse
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Encargado:</strong>
                        <select class="selectpicker form-control" name="personal_id">
                            @forelse ($personals as $personal)
                            <option  value="{{$personal->id}}">{{$personal->nombre}} {{$personal->apellido}}</option>
                            @empty
                            <option>no hay registros</option>
                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>SN:</strong>
                        <input type="text" name="sn" value="{{$equipo_asignado->sn}}" class="form-control" placeholder="Company Email">
                        @error('sn')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Imei:</strong>
                        <input type="text" name="imei" value="{{$equipo_asignado->imei}}" class="form-control" placeholder="Company Email">
                        @error('imei')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Programas:</strong>
                        <input type="text" name="programas" value="{{$equipo_asignado->programas}}" class="form-control" placeholder="Company Address">
                        @error('programas')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Novedades:</strong>
                        <input type="text" name="novedades" value="{{$equipo_asignado->novedades}}" class="form-control" placeholder="Company Address">
                        @error('novedades')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha de entrega:</strong>
                        <input type="date" name="fecha_entrega" value="{{$equipo_asignado->fecha_entrega}}" class="form-control" placeholder="Company Address">
                        @error('fecha_entrega')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>