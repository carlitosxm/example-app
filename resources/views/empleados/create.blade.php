<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Agregar empleado - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Agregar empleado</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Empresa:</strong>
                        <select name="chirp_id" class="selectpicker form-control show-tick" data-width="100px">
                            @forelse($chirps as $chirp)
                            <option value="{{$chirp->id}}">{{$chirp->id}} {{$chirp->name}}</option> 
                            @empty  
                            <option value="">no hay registros</option>
                             @endforelse 
                    </select>
                     <!--   @error('chirp')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>nombre:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Company Email">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>apellido:</strong>
                        <input type="text" name="apellido" class="form-control" placeholder="Company Email">
                        @error('apellido')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>fecha:</strong>
                        <input type="date" name="fecha" class="form-control" placeholder="Company Address">
                        @error('fecha')
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