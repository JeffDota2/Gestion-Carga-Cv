@extends('layouts.app')
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@section('template_title')
    {{ $hoja->name ?? 'Show Hoja' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Hoja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('hojas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $hoja->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreuno:</strong>
                            {{ $hoja->nombreuno }}
                        </div>
                        <div class="form-group">
                            <strong>Nombredos:</strong>
                            {{ $hoja->nombredos }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidouno:</strong>
                            {{ $hoja->apellidouno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $hoja->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $hoja->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $hoja->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $hoja->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Colegio:</strong>
                            {{ $hoja->colegio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaingreso:</strong>
                            {{ $hoja->fechaingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafin:</strong>
                            {{ $hoja->fechafin }}
                        </div>
                        <div class="form-group">
                            <strong>Uni:</strong>
                            {{ $hoja->uni }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $hoja->fechainicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafinal:</strong>
                            {{ $hoja->fechafinal }}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{ $hoja->curso }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaini:</strong>
                            {{ $hoja->fechaini }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafi:</strong>
                            {{ $hoja->fechafi }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $hoja->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $hoja->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $hoja->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Periodouno:</strong>
                            {{ $hoja->periodouno }}
                        </div>
                        <div class="form-group">
                            <strong>Periododos:</strong>
                            {{ $hoja->periododos }}
                        </div>
                        <div class="form-group">
                            <strong>Empresados:</strong>
                            {{ $hoja->empresados }}
                        </div>
                        <div class="form-group">
                            <strong>Cargodos:</strong>
                            {{ $hoja->cargodos }}
                        </div>
                        <div class="form-group">
                            <strong>Descripciondos:</strong>
                            {{ $hoja->descripciondos }}
                        </div>
                        <div class="form-group">
                            <strong>Periodou:</strong>
                            {{ $hoja->periodou }}
                        </div>
                        <div class="form-group">
                            <strong>Periodod:</strong>
                            {{ $hoja->periodod }}
                        </div>
                        <div class="form-group">
                            <strong>Idioma:</strong>
                            {{ $hoja->idioma }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $hoja->nivel }}
                        </div>
                        <div class="form-group">
                            <strong>Idiomados:</strong>
                            {{ $hoja->idiomados }}
                        </div>
                        <div class="form-group">
                            <strong>Niveldos:</strong>
                            {{ $hoja->niveldos }}
                        </div>
                        <div class="form-group">
                            <strong>Areau:</strong>
                            {{ $hoja->areau }}
                        </div>
                        <div class="form-group">
                            <strong>Conocimientou:</strong>
                            {{ $hoja->conocimientou }}
                        </div>
                        <div class="form-group">
                            <strong>Nivelu:</strong>
                            {{ $hoja->nivelu }}
                        </div>
                        <div class="form-group">
                            <strong>Aread:</strong>
                            {{ $hoja->aread }}
                        </div>
                        <div class="form-group">
                            <strong>Conocimientod:</strong>
                            {{ $hoja->conocimientod }}
                        </div>
                        <div class="form-group">
                            <strong>Niveld:</strong>
                            {{ $hoja->niveld }}
                        </div>
                        <div class="form-group">
                            <strong>Areat:</strong>
                            {{ $hoja->areat }}
                        </div>
                        <div class="form-group">
                            <strong>Conocimientot:</strong>
                            {{ $hoja->conocimientot }}
                        </div>
                        <div class="form-group">
                            <strong>Niveltr:</strong>
                            {{ $hoja->niveltr }}
                        </div>
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $hoja->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Relacion:</strong>
                            {{ $hoja->relacion }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $hoja->contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Nomu:</strong>
                            {{ $hoja->nomu }}
                        </div>
                        <div class="form-group">
                            <strong>Relaciond:</strong>
                            {{ $hoja->relaciond }}
                        </div>
                        <div class="form-group">
                            <strong>Contactod:</strong>
                            {{ $hoja->contactod }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
