<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Equipo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Equipo</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('equipo.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('equipo.update',$equipo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Categoria:</strong>
                        <select name="categoria_id" class="selectpicker form-control show-tick" data-width="100px">
                            @forelse($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option> 
                            @empty  
                            <option value="">no hay registros</option>
                             @endforelse 
                    </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Modelo:</strong>
                        <input type="text" name="modelo" class="form-control" value="{{$equipo->modelo}}">
                        @error('modelo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Descripcion:</strong>
                        <input type="text" name="description" class="form-control" value="{{$equipo->description}}">
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fecha de adquisicion:</strong>
                        <input type="date" name="fecha_adquisicion" class="form-control" value="{{$equipo->fecha_adquisicion}}">
                        @error('fecha_adquisicion')
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