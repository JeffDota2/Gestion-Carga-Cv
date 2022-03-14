<div class="container">
                    <div class="row justify-content-between">
                        <div class="col-4"><img src="https://www.preuniversitarionewton.com/web/images/preuniversitario/noticias/senescyt_logo.png" 
                                alt="logo" style="inline-size:auto;"
                                width="400px" height="100px"> </div>
                             <div class="col-4"><img src="http://userscontent2.emaze.com/images/33c58489-cf42-4a76-9ca4-94bb149cfa8d/Slide7_Pic3_636408719339374930.png" 
                                     alt="logo" style="inline-size:auto;"
                                     width="400px" height="100px"> </div>
                </div>
            </div>
<div class="box box-info padding-1">
    <div class="box-body">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <b> <h3>Datos Personales</h3></b>
    <div class="row g-3">
        <div class="col-3 ">
            {{ Form::label('Nombre Estudiante') }}
            {{ Form::text('nom_estudiante', $empresariale->nom_estudiante, ['class' => 'form-control' . ($errors->has('nom_estudiante') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nom_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('Carrera') }}
            {{ Form::text('carrera', $empresariale->carrera, ['class' => 'form-control' . ($errors->has('carrera') ? ' is-invalid' : '')]) }}
            {!! $errors->first('carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('Nivel') }}
            {{ Form::text('nivel', $empresariale->nivel, ['class' => 'form-control' . ($errors->has('nivel') ? ' is-invalid' : '')]) }}
            {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">
            {{ Form::label('Periodo_lectivo') }}
            {{ Form::text('pe_lectivo', $empresariale->pe_lectivo, ['class' => 'form-control' . ($errors->has('pe_lectivo') ? ' is-invalid' : '')]) }}
            {!! $errors->first('pe_lectivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('Entidad_formadora') }}
            {{ Form::text('ent_formadora', $empresariale->ent_formadora, ['class' => 'form-control' . ($errors->has('ent_formadora') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ent_formadora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('horas de practicas') }}
            {{ Form::text('hr_practicas', $empresariale->hr_practicas, ['class' => 'form-control' . ($errors->has('hr_practicas') ? ' is-invalid' : '')]) }}
            {!! $errors->first('hr_practicas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <b> <h3>Estructura Proyecto</h3></b>
        <div class="col-3 ">
            {{ Form::label('Titulo Proyecto') }}
            {{ Form::text('tit_proyecto', $empresariale->tit_proyecto, ['class' => 'form-control' . ($errors->has('tit_proyecto') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tit_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">
            {{ Form::label('Analisis') }}
            {{ Form::text('analisis', $empresariale->analisis, ['class' => 'form-control' . ($errors->has('analisis') ? ' is-invalid' : ''), 'placeholder' => 'Describir el problema']) }}
            {!! $errors->first('analisis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">           
             {{ Form::label('Objetivo Proyecto') }}
            {{ Form::text('obj_proyecto', $empresariale->obj_proyecto, ['class' => 'form-control' . ($errors->has('obj_proyecto') ? ' is-invalid' : '')]) }}
            {!! $errors->first('obj_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('Descripción Proyecto') }}
            {{ Form::text('des_proyecto', $empresariale->des_proyecto, ['class' => 'form-control' . ($errors->has('des_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Por que se escogio?']) }}
            {!! $errors->first('des_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">             
            {{ Form::label('Indicador') }}
            {{ Form::text('indicador', $empresariale->indicador, ['class' => 'form-control' . ($errors->has('indicador') ? ' is-invalid' : '')]) }}
            {!! $errors->first('indicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('Meta') }}
            {{ Form::text('meta', $empresariale->meta, ['class' => 'form-control' . ($errors->has('meta') ? ' is-invalid' : '')]) }}
            {!! $errors->first('meta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">             
            {{ Form::label('Presupuesto') }}
            {{ Form::text('presupuesto', $empresariale->presupuesto, ['class' => 'form-control' . ($errors->has('presupuesto') ? ' is-invalid' : '')]) }}
            {!! $errors->first('presupuesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">             
            {{ Form::label('Medicion') }}
            {{ Form::text('medicion', $empresariale->medicion, ['class' => 'form-control' . ($errors->has('medicion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('medicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">             
            {{ Form::label('Fuente') }}
            {{ Form::text('fuente', $empresariale->fuente, ['class' => 'form-control' . ($errors->has('fuente') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fuente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">             
            {{ Form::label('Beneficios Esperados') }}
            {{ Form::text('beneficios', $empresariale->beneficios, ['class' => 'form-control' . ($errors->has('beneficios') ? ' is-invalid' : '')]) }}
            {!! $errors->first('beneficios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">             
            {{ Form::label('Comentarios') }}
            {{ Form::text('comentarios', $empresariale->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : '')]) }}
            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <b> <h3>Firmas</h3></b>
        <div class="col-3 "> 
            {{ Form::label('cor_carrera') }}
            {{ Form::text('cor_carrera', $empresariale->cor_carrera, ['class' => 'form-control' . ($errors->has('cor_carrera') ? ' is-invalid' : ''), 'placeholder' => 'Cor Carrera']) }}
            {!! $errors->first('cor_carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 "> 
            {{ Form::label('tut_empresa') }}
            {{ Form::text('tut_empresa', $empresariale->tut_empresa, ['class' => 'form-control' . ($errors->has('tut_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Tut Empresa']) }}
            {!! $errors->first('tut_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
</div>