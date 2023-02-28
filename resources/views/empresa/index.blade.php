<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Empresas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Empresas</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('empresa.create') }}"> Nuevo Empresa </a>
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
                    <th>C.No</th>
                    <th>Nombre Empresa</th>
                    <th>Direccion Empresa</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->id }}</td>
                        <td>{{ $empresa->nombre }}</td>
                        <td>{{ $empresa->direccion }}</td>
                        <td>
                            <form action="{{ route('empresa.destroy',$empresa->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('empresa.edit',$empresa->id) }}">Edit </a>
                                <a class="btn btn-primary" href="{{ route('empresa.show',$empresa->id) }}">Show</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Estás seguro que deseas eliminar el registro?')" >Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $empresas->links() !!}
    </div>
</body>
</html>