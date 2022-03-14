<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoja de Vida</title>
</head>
<body>

    <style>
        #principal{
            border: solid 1px black;
            width: 100%;
            margin: 0 auto;
            padding: 5px;
        }
        fieldset{

            margin: 10px;
        }

        legend{
            border: solid 1px skyblue;
            padding: 5px;
            font-weight: bold;
            border-radius: 20px;
            background: #6DB8FA;
        }

        #mifoto{
            margin: 5px;
            
        }

        body{
            background: url()
        }
    </style>
     @foreach ($hojas as $hoja)
    <div id="principal">
        <img src="mifoto.jpg" id="mifoto" width="150" align="left">
        <br>
        <h2>{{ $hoja->nombreuno }}&nbsp;{{ $hoja->nombredos }}&nbsp;{{ $hoja->apellidouno }}&nbsp;{{ $hoja->apellidos }}</h2>
        <br><br><br><br><br>
       
        <fieldset>
            <legend>Datos Generales:</legend>
            <ul>
                <li>Cedula:{{ $hoja->cedula }}</li>
                <li>Direccion: {{ $hoja->direccion }}</li>
                <li>Celular: {{ $hoja->telefono }}</li>
                <li>Correo: {{ $hoja->correo }}</li>
            </ul>
        </fieldset>
        <br>

        <fieldset>
            <legend>Estudios Realizados</legend>
            <ul>
                <li>Secuendaria: {{ $hoja->colegio }}</li>
                <li>Año de Ingreso: {{ $hoja->fechaingreso }}</li>
                <li>Año de Egreso: {{ $hoja->fechafin }}</li>
                <br>
                <li>Universidad/Instituto: {{ $hoja->uni }}</li>
                <li>Año Ingreso: {{ $hoja->fechainicio }}</li>
                <li>Año Egreso: {{ $hoja->fechafinal }}</li>
                <br>
                <li>Cursos Realizados:{{ $hoja->curso }}</li>
                <li>Fecha Inicio:{{ $hoja->fechaini }}</li>
                <li>Fecha Fin:{{ $hoja->fechafi }}</li>
            </ul>

        </fieldset>
<br>
        <fieldset>
            <legend>Experiencia Laboral</legend>
            <ul>
                <li>Nombre de la Empresa: {{ $hoja->empresa }}</li>
                <li>Cargo: {{ $hoja->cargo }}</li>
                <li>Descripcion: {{ $hoja->descripcion }}</li>
                <li>Año Ingreso: {{ $hoja->periodouno }}</li>
                <li>Año Salida: {{ $hoja->periododos }}</li>
                <br>
                <li>Nombre de la Empresa: {{ $hoja->empresados }}</li>
                <li>Cargo: {{ $hoja->cargodos }}</li>
                <li>Descripcion: {{ $hoja->descripciondos }}</li>
                <li>Año Ingreso: {{ $hoja->periodou }}</li>
                <li>Año Salida: {{ $hoja->periodod }}</li>

            </ul>
        </fieldset>
        <br><br><br><br><br><br><br><br><br><br>&nbsp;

        <fieldset>
            <legend>Idiomas</legend>
            <ul>
                <li>Idioma: {{ $hoja->idioma }}</li>
                <li>Nivel: {{ $hoja->nivel }}</li>
                <br>
                <li>Idioma: {{ $hoja->idiomados }}</li>
                <li>Nivel: {{ $hoja->niveldos }}</li>
            </ul>
            
        </fieldset>
        <br>
        <fieldset>
            <legend>Areas de Conocimiento</legend>
            <ul>
                <li>Lenguajes de Programacion: {{ $hoja->areau }}</li>
                <li>Cococimiento: {{ $hoja->conocimientou }}</li>
                <li>Nivel: {{ $hoja->nivelu }}</li>
                <br>
                <li>Frameworks: {{ $hoja->aread }}</li>
                <li>Cococimiento: {{ $hoja->conocimientod }}</li>
                <li>Nivel:{{ $hoja->niveld }}</li>
                <br>
                <li>Otros: {{ $hoja->areat }}</li>
                <li>Cococimiento: {{ $hoja->conocimientot }}</li>
                <li>Nivel: {{ $hoja->niveltr }}</li>
                <br>

            </ul>
        </fieldset>
<br>
        <fieldset>
            <legend>Refrecias</legend>
            <ul>
                <li>Nombres: {{ $hoja->nom }}</li>
                <li>Parentezco: {{ $hoja->relacion }}</li>
                <li>Contacto: {{ $hoja->contacto }}<</li>
                <br>  <br>
                <li>Nombres:{{ $hoja->nomu }}</li>
                <li>Parentezco: {{ $hoja->relaciond }}</li>
                <li>Contacto: {{ $hoja->contactod }}</li>
                <br>

            </ul>
        </fieldset>
        @endforeach
    </div>
    
</body>
</html>