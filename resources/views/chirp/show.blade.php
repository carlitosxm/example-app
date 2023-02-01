<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Company</h2>
                </div>
                <div class="pull-right">
                    <!-- <a class="btn btn-primary" href="{{ route('chirp.index') }}" enctype="multipart/form-data">
                        regresar</a> -->
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Name:</strong>
                        <input type="text" name="name" value="{{ $chirp->name }}" class="form-control"
                            placeholder="Company name" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Company Email"
                            value="{{ $chirp->email }}" readonly="readonly">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Address:</strong>
                        <input type="text" name="address" value="{{ $chirp->address }}" class="form-control"
                            placeholder="Company Address" readonly="readonly">
                    </div>
                </div>
               <input type="button" onclick="history.back()" class="btn btn-primary ml-3" value="regresar">
            </div>
    </div>
</body>

</html>