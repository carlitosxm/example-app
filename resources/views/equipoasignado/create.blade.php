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
        <form action="{{ route('equipoasignado.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Equipo:</strong>
                        <select name="equipo_id" class="selectpicker form-control show-tick" data-width="100px">
                            @forelse($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->modelo}}</option> 
                            @empty  
                            <option value="">no hay registros</option>
                             @endforelse 
                    </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Empresa:</strong>
                        <select name="empresa_id" class="selectpicker form-control show-tick" data-width="100px">
                            @forelse($empresas as $empresa)
                            <option value="{{$empresa->id}}">{{$empresa->nombre}}</option> 
                            @empty  
                            <option value="">no hay registros</option>
                             @endforelse 
                    </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Encargado:</strong>
                        <select name="personal_id" class="selectpicker form-control show-tick" data-width="100px">
                            @forelse($personals as $personal)
                            <option value="{{$personal->id}}">{{$personal->nombre}}</option> 
                            @empty  
                            <option value="">no hay registros</option>
                             @endforelse 
                    </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>SN:</strong>
                        <input type="text" name="sn" class="form-control" placeholder="Company Email">
                        @error('sn')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Imei:</strong>
                        <input type="text" name="imei" class="form-control" placeholder="Company Email">
                        @error('imei')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Programas:</strong>
                        <input type="text" name="programas" class="form-control" placeholder="Company Address">
                        @error('programas')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Novedades:</strong>
                        <input type="text" name="novedades" class="form-control" placeholder="Company Address">
                        @error('novedades')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha de entrega:</strong>
                        <input type="date" name="fecha_entrega" class="form-control" placeholder="Company Address">
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