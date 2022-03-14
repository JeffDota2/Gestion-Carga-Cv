<div class="box box-info padding-1">
    <div class="box-body">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <div align="center">
                <img src="http://userscontent2.emaze.com/images/33c58489-cf42-4a76-9ca4-94bb149cfa8d/Slide7_Pic3_636408719339374930.png" 
                alt="logo" style="inline-size:auto;"
                width="500px" height="150px"> 
            </div>
            &nbsp;
            &nbsp;
            <div class="row g-3">
                <div class="col-3 ">
                    <h3>Datos Personales</h3>
                    {{ Form::label('Numero de Cedula') }}
                    {{ Form::text('cedula', $hoja->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => '1750000000']) }}
                    {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            
        <div class="row g-3">
                    <div class="col-3 ">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('nombreuno', $hoja->nombreuno, ['class' => 'form-control' . ($errors->has('nombreuno') ? ' is-invalid' : ''), 'placeholder' => 'Jefferson']) }}
                    {!! $errors->first('nombreuno', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-3 ">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('nombredos', $hoja->nombredos, ['class' => 'form-control' . ($errors->has('nombredos') ? ' is-invalid' : ''), 'placeholder' => 'Enrique']) }}
                    {!! $errors->first('nombredos', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-3 ">
                    {{ Form::label('Apellido Paterno') }}
                    {{ Form::text('apellidouno', $hoja->apellidouno, ['class' => 'form-control' . ($errors->has('apellidouno') ? ' is-invalid' : ''), 'placeholder' => 'Cuello']) }}
                    {!! $errors->first('apellidouno', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-3 ">
                    {{ Form::label('Apellido Materno') }}
                    {{ Form::text('apellidos', $hoja->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Pillajo']) }}
                    {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                
        </div>

         <div class="row g-3">
                <div class="col-5 ">
                {{ Form::label('Dirección') }}
                {{ Form::text('direccion', $hoja->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Yaruqui, Jesus de Nazareth y Pasaje S9-23']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3 ">
                {{ Form::label('Teléfono ') }}
                {{ Form::text('telefono', $hoja->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => '0995444110']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="row g-3">
            <div class="col-3 ">{{ Form::label('correo') }}
                {{ Form::text('correo', $hoja->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => '@yavirac.edu.ec']) }}
                {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        &nbsp;
        &nbsp;
        <h3>Formación Aacadémica</h3>
        <hr />

        <div class="row g-3">
                <div class="col-5 ">
                {{ Form::label('Unidad Educativa/Colegio') }}
                {{ Form::text('colegio', $hoja->colegio, ['class' => 'form-control' . ($errors->has('colegio') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Educativa Particular Israel']) }}
                {!! $errors->first('colegio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('Año de Ingreso') }}
                {{ Form::text('fechaingreso', $hoja->fechaingreso, ['class' => 'form-control' . ($errors->has('fechaingreso') ? ' is-invalid' : ''), 'placeholder' => '2002']) }}
                {!! $errors->first('fechaingreso', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            &nbsp;
            &nbsp;
            <div class="col-2 ">
                {{ Form::label('Año de Egreso') }}
                {{ Form::text('fechafin', $hoja->fechafin, ['class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : ''), 'placeholder' => '2008']) }}
                {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
           </div>
         </div>

         <div class="row g-3">
                <div class="col-5 ">
                {{ Form::label('Universidad/Instituto') }}
                {{ Form::text('uni', $hoja->uni, ['class' => 'form-control' . ($errors->has('uni') ? ' is-invalid' : ''), 'placeholder' => 'Instituto Superior Yavirac']) }}
                {!! $errors->first('uni', '<div class="invalid-feedback">:message</div>') !!}
            </div>
                <div class="col-2 ">
                {{ Form::label('Año de Ingreso') }}
                {{ Form::text('fechainicio', $hoja->fechainicio, ['class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : ''), 'placeholder' => '2010']) }}
                {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
                &nbsp;
                &nbsp;
                <div class="col-2 ">
                {{ Form::label('Año de Egreso') }}
                {{ Form::text('fechafinal', $hoja->fechafinal, ['class' => 'form-control' . ($errors->has('fechafinal') ? ' is-invalid' : ''), 'placeholder' => '2015']) }}
                {!! $errors->first('fechafinal', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="row g-3">
                <div class="col-5 ">
                {{ Form::label('Cursos/Talleres') }}
                {{ Form::text('curso', $hoja->curso, ['class' => 'form-control' . ($errors->has('curso') ? ' is-invalid' : ''), 'placeholder' => 'Cisco']) }}
                {!! $errors->first('curso', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('Año de Inicio') }}
                {{ Form::text('fechaini', $hoja->fechaini, ['class' => 'form-control' . ($errors->has('fechaini') ? ' is-invalid' : ''), 'placeholder' => '2011']) }}
                {!! $errors->first('fechaini', '<div class="invalid-feedback">:message</div>') !!}
            </div>
                &nbsp;
                &nbsp;
            <div class="col-2 ">
                {{ Form::label('Año de Finalización') }}
                {{ Form::text('fechafi', $hoja->fechafi, ['class' => 'form-control' . ($errors->has('fechafi') ? ' is-invalid' : ''), 'placeholder' => '2011']) }}
                {!! $errors->first('fechafi', '<div class="invalid-feedback">:message</div>') !!}
            </div>
                &nbsp;
                &nbsp;
                <h3>Experiencia Laboral</h3>
                <hr />
        </div>
        <div class="row g-3">
                <div class="col-3">
                {{ Form::label('Nombre Empresa') }}
                {{ Form::text('empresa', $hoja->empresa, ['class' => 'form-control' . ($errors->has('empresa') ? ' is-invalid' : ''), 'placeholder' => 'Yavirac Tec']) }}
                {!! $errors->first('empresa', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('cargo') }}
                {{ Form::text('cargo', $hoja->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Desarrollador Backend']) }}
                {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-4 ">
                {{ Form::label('descripcion') }}
                {{ Form::text('descripcion', $hoja->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Implementacion del modulo de notas']) }}
                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-1 ">
            {{ Form::label('Ingreso') }}
            {{ Form::text('periodouno', $hoja->periodouno, ['class' => 'form-control' . ($errors->has('periodouno') ? ' is-invalid' : ''), 'placeholder' => '2019']) }}
            {!! $errors->first('periodouno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-1 ">
            {{ Form::label('Terminacion') }}
            {{ Form::text('periododos', $hoja->periododos, ['class' => 'form-control' . ($errors->has('periododos') ? ' is-invalid' : ''), 'placeholder' => '2022']) }}
            {!! $errors->first('periododos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="row g-3">
            <div class="col-3">
                {{ Form::label('Nombre Empresa') }}
                {{ Form::text('empresados', $hoja->empresados, ['class' => 'form-control' . ($errors->has('empresados') ? ' is-invalid' : ''), 'placeholder' => 'Linkear']) }}
                {!! $errors->first('empresados', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2">
                {{ Form::label('Desarrollador') }}
                {{ Form::text('cargodos', $hoja->cargodos, ['class' => 'form-control' . ($errors->has('cargodos') ? ' is-invalid' : ''), 'placeholder' => 'Desarrollador Web']) }}
                {!! $errors->first('cargodos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            
            <div class="col-4">
                {{ Form::label('Descripcion') }}
                {{ Form::text('descripciondos', $hoja->descripciondos, ['class' => 'form-control' . ($errors->has('descripciondos') ? ' is-invalid' : ''), 'placeholder' => 'Micro-Servicios CRM']) }}
                {!! $errors->first('descripciondos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-1">
                {{ Form::label('Ingreso') }}
                {{ Form::text('periodou', $hoja->periodou, ['class' => 'form-control' . ($errors->has('periodou') ? ' is-invalid' : ''), 'placeholder' => '2002']) }}
                {!! $errors->first('periodou', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-1">
                {{ Form::label('Terminacion') }}
                {{ Form::text('periodod', $hoja->periodod, ['class' => 'form-control' . ($errors->has('periodod') ? ' is-invalid' : ''), 'placeholder' => '2002']) }}
                {!! $errors->first('periodod', '<div class="invalid-feedback">:message</div>') !!}
            </div>
    </div>
                &nbsp;
                &nbsp;
                <h3>Idiomas</h3>
                <hr />

                <div class="row g-3">
                    <div class="col-3">
                    {{ Form::label('idioma') }}
                    {{ Form::text('idioma', $hoja->idioma, ['class' => 'form-control' . ($errors->has('idioma') ? ' is-invalid' : ''), 'placeholder' => 'Ingles']) }}
                    {!! $errors->first('idioma', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-3">
                    {{ Form::label('nivel') }}
                    {{ Form::text('nivel', $hoja->nivel, ['class' => 'form-control' . ($errors->has('nivel') ? ' is-invalid' : ''), 'placeholder' => 'Intermedio']) }}
                    {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="row g-3">
                <div class="col-3">
                    {{ Form::label('Idioma') }}
                    {{ Form::text('idiomados', $hoja->idiomados, ['class' => 'form-control' . ($errors->has('idiomados') ? ' is-invalid' : ''), 'placeholder' => 'Español']) }}
                    {!! $errors->first('idiomados', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col-3">
                    {{ Form::label('Nivel') }}
                    {{ Form::text('niveldos', $hoja->niveldos, ['class' => 'form-control' . ($errors->has('niveldos') ? ' is-invalid' : ''), 'placeholder' => 'Nativo']) }}
                    {!! $errors->first('niveldos', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            &nbsp;
            &nbsp;
            <h3>Areas de Conocimiento</h3>
            <hr />
            <div class="row g-3">
                <div class="col-3">
        
                {{ Form::label('Lenguajes de Programacion') }}
                {{ Form::text('areau', $hoja->areau, ['class' => 'form-control' . ($errors->has('areau') ? ' is-invalid' : ''), 'placeholder' => 'Php, JavaScrip, C#']) }}
                {!! $errors->first('areau', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            <div class="col-3">
                {{ Form::label('conocimiento') }}
                {{ Form::text('conocimientou', $hoja->conocimientou, ['class' => 'form-control' . ($errors->has('conocimientou') ? ' is-invalid' : ''), 'placeholder' => 'POO,Mvc, Hilos']) }}
                {!! $errors->first('conocimientou', '<div class="invalid-feedback">:message</div>') !!}
            </div>
             <div class="col-3">
                {{ Form::label('nivel') }}
                {{ Form::text('nivelu', $hoja->nivelu, ['class' => 'form-control' . ($errors->has('nivelu') ? ' is-invalid' : ''), 'placeholder' => 'Avanzado']) }}
                {!! $errors->first('nivelu', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="row g-3">
            <div class="col-3">
            {{ Form::label('Frameworks') }}
            {{ Form::text('aread', $hoja->aread, ['class' => 'form-control' . ($errors->has('aread') ? ' is-invalid' : ''), 'placeholder' => 'Laravel, Tailwins, React']) }}
            {!! $errors->first('aread', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-3">
            {{ Form::label('conocimiento') }}
            {{ Form::text('conocimientod', $hoja->conocimientod, ['class' => 'form-control' . ($errors->has('conocimientod') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('conocimientod', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-3">
            {{ Form::label('niveld') }}
            {{ Form::text('niveld', $hoja->niveld, ['class' => 'form-control' . ($errors->has('niveld') ? ' is-invalid' : ''), 'placeholder' => 'Basico']) }}
            {!! $errors->first('niveld', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
        <div class="row g-3">
            <div class="col-3">
            {{ Form::label('Area') }}
            {{ Form::text('areat', $hoja->areat, ['class' => 'form-control' . ($errors->has('areat') ? ' is-invalid' : ''), 'placeholder' => 'Otros']) }}
            {!! $errors->first('areat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-3">
            {{ Form::label('conocimiento') }}
            {{ Form::text('conocimientot', $hoja->conocimientot, ['class' => 'form-control' . ($errors->has('conocimientot') ? ' is-invalid' : ''), 'placeholder' => 'Mantenimiento de Pc']) }}
            {!! $errors->first('conocimientot', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-3">
            {{ Form::label('niveltr') }}
            {{ Form::text('niveltr', $hoja->niveltr, ['class' => 'form-control' . ($errors->has('niveltr') ? ' is-invalid' : ''), 'placeholder' => 'Avanzado    ']) }}
            {!! $errors->first('niveltr', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
            &nbsp;
            &nbsp;
            <h3>Referencias Personales</h3>
            <hr />
            <div class="row g-3">
                <div class="col-3">
                {{ Form::label('Nombres') }}
                {{ Form::text('nom', $hoja->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Jorge Perez']) }}
                {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
                <div class="col-3">
                {{ Form::label('Parentezco') }}
                {{ Form::text('relacion', $hoja->relacion, ['class' => 'form-control' . ($errors->has('relacion') ? ' is-invalid' : ''), 'placeholder' => 'Tio']) }}
                {!! $errors->first('relacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
                <div class="col-2">
                {{ Form::label('contacto') }}
                {{ Form::text('contacto', $hoja->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => '095555555']) }}
                {!! $errors->first('contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
             <div class="row g-3">
                <div class="col-3">
                {{ Form::label('Nombres') }}
                {{ Form::text('nomu', $hoja->nomu, ['class' => 'form-control' . ($errors->has('nomu') ? ' is-invalid' : ''), 'placeholder' => 'Marco Cruz']) }}
                {!! $errors->first('nomu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('Parentezco') }}
            {{ Form::text('relaciond', $hoja->relaciond, ['class' => 'form-control' . ($errors->has('relaciond') ? ' is-invalid' : ''), 'placeholder' => 'Padre']) }}
            {!! $errors->first('relaciond', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-2">
            {{ Form::label('contactod') }}
            {{ Form::text('contactod', $hoja->contactod, ['class' => 'form-control' . ($errors->has('contactod') ? ' is-invalid' : ''), 'placeholder' => '098888888']) }}
            {!! $errors->first('contactod', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    &nbsp;
    &nbsp;
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>