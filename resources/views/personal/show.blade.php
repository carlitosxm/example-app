<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar Personal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Mostrar Personal</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('personal.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Departamento:</strong>
                        <input type="text" name="nombre" class="form-control" value="{{$personal->departamento->nombre}}" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Empresa:</strong>
                        <input type="text" name="nombre" class="form-control" value="{{$personal->empresa->nombre}}" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nombre" class="form-control" value="{{$personal->nombre}}" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        <input type="text" name="apellido" class="form-control" value="{{$personal->apellido}}" readonly="readonly">
                    </div>
                </div>
            </div>
    </div>
</body>
</html>