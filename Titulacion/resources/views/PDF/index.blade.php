@extends('layouts.app')

@section('template_title')
    Rubrica
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <div class="container">
        <form action="EnvioDatos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="exampleFormControlFile1">Nombre</label>
        <input class="form-control" type="text" name="nombre" class="form-control-file">
        </div>
        <div class="form-group">
        <label for="exampleFormControlFile1">Nivel</label>
        <input class="form-control" type="text" name="nivel" class="form-control-file">
        </div>
        <div class="form-group">
        <label for="exampleFormControlFile1">Entidad Formadora</label>
        <input class="form-control" type="text" name="entidad_formadora" class="form-control-file">
        </div>
        <div class="form-group">
        <label for="exampleFormControlFile1">Adjuntar Pdf</label>
        <input class="form-control" type="file" name="pdf" class="form-control-file">
        </div>
        <button class="btn btn-success" type="submit">ENVIAR</button>
</form>
</div>
</body>
</html>
@endsection