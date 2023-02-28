<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear Orden de Trabajo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Crear Orden de Trabajo</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('ordentrabajo.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('ordentrabajo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tecnico:</strong>
                        <select name="tecnico_id" class="selectpicker form-control show-tick" data-width="100px">
                            @forelse($tecnicos as $tecnico)
                            <option value="{{$tecnico->id}}">{{$tecnico->nombre}} {{$tecnico->apellido}}</option> 
                            @empty  
                            <option value="">no hay registros</option>
                             @endforelse 
                    </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tipo de mantenimiento:</strong>
                        <select name="tipomantenimiento_id" class="selectpicker form-control show-tick" data-width="100px">
                            @forelse($tipomantenimientos as $tipomantenimiento)
                            <option value="{{$tipomantenimiento->id}}">{{$tipomantenimiento->nombre}}</option> 
                            @empty  
                            <option value="">no hay registros</option>
                             @endforelse 
                    </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Equipo Asignado:</strong>
                        <select name="equipoasignado_id" class="selectpicker form-control show-tick" data-width="100px">
                            @forelse($equipoasignados as $equipoasignado)
                            <option value="{{$equipoasignado->id}}">{{$equipoasignado->sn}}</option> 
                            @empty  
                            <option value="">no hay registros</option>
                             @endforelse 
                    </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha ingreso:</strong>
                        <input type="date" name="8k" class="form-control" >
                        @error('fecha_ingreso')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha Salida:</strong>
                        <input type="date" name="fecha_salida" class="form-control">
                        @error('fecha_salida')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Anomalias:</strong>
                        <input type="text" name="anomalias" class="form-control" placeholder="Company Address">
                        @error('anomalias')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Trabajos:</strong>
                        <input type="text" name="trabajos" class="form-control" placeholder="Company Address">
                        @error('trabajos')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Estado:</strong>
                        <input type="date" name="estado" class="form-control" placeholder="Company Address">
                        @error('estado')
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