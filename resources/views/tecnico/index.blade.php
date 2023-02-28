<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tecnico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Tecnico</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('tecnico.create') }}"> Nueva Categoria </a>
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
                    <th>T.No</th>
                    <th>Nombre</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tecnicos as $tecnico)
                    <tr>
                        <td>{{ $tecnico->id }}</td>
                        <td>{{ $tecnico->nombre }}</td>
                        <td>
                            <form action="{{ route('tecnico.destroy',$tecnico->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('tecnico.edit',$tecnico->id) }}">Edit</a>
                                <a class="btn btn-primary" href="{{ route('tecnico.show',$tecnico->id) }}">Show</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Estás seguro que deseas eliminar el registro?')" >Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $tecnicos->links() !!}
    </div>
</body>
</html>