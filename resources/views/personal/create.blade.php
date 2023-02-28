<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Personal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar Personal</h2>
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
        <form action="{{ route('personal.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Departamento:</strong>
                        <select name="departamento_id" class="selectpicker form-control show-tick" data-width="100px">
                            @forelse($departamentos as $departamento)
                            <option value="{{$departamento->id}}">{{$departamento->nombre}}</option> 
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
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Company Email">
                        @error('nombre')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        <input type="text" name="apellido" class="form-control" placeholder="Company Email">
                        @error('apellido')
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