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
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Equipo:</strong>
                        <input type="text" class="form-control" name="" value="{{$equipo_asignado->equipo->modelo}}" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Empresa:</strong>
                        <input type="text" class="form-control" name="" value="{{$equipo_asignado->empresa->nombre}}" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Encargado:</strong><input type="text" class="form-control" name="" value="{{$equipo_asignado->personal->nombre}} {{$equipo_asignado->personal->apellido}}" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>SN:</strong>
                        <input type="text" name="sn" value="{{$equipo_asignado->sn}}" class="form-control" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Imei:</strong>
                        <input type="text" name="imei" value="{{$equipo_asignado->imei}}" class="form-control" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Programas:</strong>
                        <input type="text" name="programas" value="{{$equipo_asignado->programas}}" class="form-control" readonly="readonly">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Novedades:</strong>
                        <input type="text" name="novedades" value="{{$equipo_asignado->novedades}}" class="form-control" readonly="readonly"">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha de entrega:</strong>
                        <input type="text" name="fecha_entrega" value="{{$equipo_asignado->fecha_entrega}}" class="form-control" readonly="readonly">
                    </div>
                </div>
            </div>
    </div>
</body>
</html>