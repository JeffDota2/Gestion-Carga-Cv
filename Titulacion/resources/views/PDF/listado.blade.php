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
     <title>listado</title>
 </head>
 <body>
     <div class="container">
     <table class="table">
         <thead>
             <th>Id</th>
             <th>Nombre</th>
             <th>Nivel</th>
             <th>Entidad Formadora</th>
             <th>Documento</th>
        </thead>
        <tbody>
            @foreach ($datos as $d)
            <tr>
                <td>{{$d->id_doc}}</td>
                <td>{{$d->nombre}}</td>
                <td>{{$d->nivel}}</td>
                <td>{{$d->entidad_formadora}}</td>
                <td><a class="btn btn-primary" href="Archivos/{{$d->documento}}" target="blank">ver documento</a></td>
            </tr>
            @endforeach
</tbody>
     </table>
     </div>
 </body>
 </html>
 @endsection