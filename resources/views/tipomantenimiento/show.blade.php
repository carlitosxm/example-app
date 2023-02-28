<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tipo de mantenimiento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Tipo de mantenimiento</h2>
                </div>
                <div class="pull-right">
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tipo de mantenimiento:</strong>
                        <input type="text" name="nombre" value="{{ $tipomantenimiento->nombre }}" class="form-control"
                            readonly='readonly'>
                        @error('nombre')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <a class="btn btn-primary" href="{{ route('tipomantenimiento.index') }}" enctype="multipart/form-data">
                        Back</a>
            </div>
        </form>
    </div>
</body>

</html>