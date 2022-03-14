<div class="container">
    <div class="col-4" align="center"><img src="http://userscontent2.emaze.com/images/33c58489-cf42-4a76-9ca4-94bb149cfa8d/Slide7_Pic3_636408719339374930.png" 
            alt="logo" style="inline-size:auto;"
            width="400px" height="100px"> </div>
                </div>
            </div>
            <div class="box box-info padding-1">
    <div class="box-body">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <b> <h3>Datos</h3></b>
    <div class="row g-3">
        <div class="col-3 ">
            {{ Form::label('Nombre Estudiante') }}
            {{ Form::text('nom_estudiante', $rubrica->nom_estudiante, ['class' => 'form-control' . ($errors->has('nom_estudiante'))]) }}
            {!! $errors->first('nom_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('Nivel') }}
            {{ Form::text('nivel', $rubrica->nivel, ['class' => 'form-control' . ($errors->has('nivel'))]) }}
            {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('Periódo Lectivo') }}
            {{ Form::text('pe_lectivo', $rubrica->pe_lectivo, ['class' => 'form-control' . ($errors->has('pe_lectivo') ? ' is-invalid' : '')]) }}
            {!! $errors->first('pe_lectivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">
            {{ Form::label('Entidad Formadora') }}
            {{ Form::text('ent_formadora', $rubrica->ent_formadora, ['class' => 'form-control' . ($errors->has('ent_formadora') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ent_formadora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('Tutor Empresa') }}
            {{ Form::text('tut_empresa', $rubrica->tut_empresa, ['class' => 'form-control' . ($errors->has('tut_empresa') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tut_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">
            {{ Form::label('Tutor Instituto') }}
            {{ Form::text('tut_instituto', $rubrica->tut_instituto, ['class' => 'form-control' . ($errors->has('tut_instituto') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tut_instituto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">           
            {{ Form::label('Fecha EValuación') }}
            {{ Form::text('fecha_evaluacion', $rubrica->fecha_evaluacion, ['class' => 'form-control' . ($errors->has('fecha_evaluacion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fecha_evaluacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">           
            {{ Form::label('Horas Práctica') }}
            {{ Form::text('hr_practica', $rubrica->hr_practica, ['class' => 'form-control' . ($errors->has('hr_practica') ? ' is-invalid' : '')]) }}
            {!! $errors->first('hr_practica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">         
            {{ Form::label('Desde') }}
            {{ Form::text('desde', $rubrica->desde, ['class' => 'form-control' . ($errors->has('desde') ? ' is-invalid' : '')]) }}
            {!! $errors->first('desde', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">            
            {{ Form::label('Hasta') }}
            {{ Form::text('hasta', $rubrica->hasta, ['class' => 'form-control' . ($errors->has('hasta') ? ' is-invalid' : '')]) }}
            {!! $errors->first('hasta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <b> <h3>Califiación Instituto (50%) </h3></b>
        <div class="col-3 ">         
            {{ Form::label('Entrega Documentación') }}
            {{ Form::text('ent_documento', $rubrica->ent_documento, ['class' => 'form-control' . ($errors->has('ent_documento') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ent_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">          
            {{ Form::label('Presentación Proyecto') }}
            {{ Form::text('pres_proyecto', $rubrica->pres_proyecto, ['class' => 'form-control' . ($errors->has('pres_proyecto') ? ' is-invalid' : '')]) }}
            {!! $errors->first('pres_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">             
            {{ Form::label('Adquisición Conocimiento') }}
            {{ Form::text('ad_conocimiento', $rubrica->ad_conocimiento, ['class' => 'form-control' . ($errors->has('ad_conocimiento') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ad_conocimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">             
            {{ Form::label('Aplicación Conocimiento') }}
            {{ Form::text('ap_conocimiento', $rubrica->ap_conocimiento, ['class' => 'form-control' . ($errors->has('ap_conocimiento') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ap_conocimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">             
            {{ Form::label('sum_uno') }}
            {{ Form::text('sum_uno', $rubrica->sum_uno, ['class' => 'form-control' . ($errors->has('sum_uno') ? ' is-invalid' : ''), 'placeholder' => 'Ap Conocimiento']) }}
            {!! $errors->first('sum_uno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">           
            {{ Form::label('pro_uno') }}
            {{ Form::text('pro_uno', $rubrica->pro_uno, ['class' => 'form-control' . ($errors->has('pro_uno') ? ' is-invalid' : ''), 'placeholder' => 'Pro Uno']) }}
            {!! $errors->first('pro_uno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <b> <h3>Califiación Empresa (50%) </h3></b>
        <div class="row g-3">
        <div class="col-3 "> 
            {{ Form::label('Promedio Evaluación') }}
            {{ Form::text('prom_evaluacion', $rubrica->prom_evaluacion, ['class' => 'form-control' . ($errors->has('prom_evaluacion') ? ' is-invalid' : ''), 'placeholder' => 'Prom Evaluacion']) }}
            {!! $errors->first('prom_evaluacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 "> 
            {{ Form::label('Presentación Proyecto') }}
            {{ Form::text('pre_proyecto', $rubrica->pre_proyecto, ['class' => 'form-control' . ($errors->has('pre_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Pre Proyecto']) }}
            {!! $errors->first('pre_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">             
            {{ Form::label('Cumplimiento Objetivo') }}
            {{ Form::text('cum_objetivo', $rubrica->cum_objetivo, ['class' => 'form-control' . ($errors->has('cum_objetivo') ? ' is-invalid' : ''), 'placeholder' => 'Cum Objetivo']) }}
            {!! $errors->first('cum_objetivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">             
            {{ Form::label('Actitud') }}
            {{ Form::text('actitud', $rubrica->actitud, ['class' => 'form-control' . ($errors->has('actitud') ? ' is-invalid' : ''), 'placeholder' => 'Actitud']) }}
            {!! $errors->first('actitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">            
            {{ Form::label('sum_dos') }}
            {{ Form::text('sum_dos', $rubrica->sum_dos, ['class' => 'form-control' . ($errors->has('sum_dos') ? ' is-invalid' : ''), 'placeholder' => 'Sum Dos']) }}
            {!! $errors->first('sum_dos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">            
            {{ Form::label('pro_dos') }}
            {{ Form::text('pro_dos', $rubrica->pro_dos, ['class' => 'form-control' . ($errors->has('pro_dos') ? ' is-invalid' : ''), 'placeholder' => 'Pro Dos']) }}
            {!! $errors->first('pro_dos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <b> <h3>Consolidado Fase Práctica</h3></b>
        <div class="row g-3">
        <div class="col-3 ">             
            {{ Form::label('Calificación Instituto') }}
            {{ Form::text('cal_instituto', $rubrica->cal_instituto, ['class' => 'form-control' . ($errors->has('cal_instituto') ? ' is-invalid' : ''), 'placeholder' => 'Cal Instituto']) }}
            {!! $errors->first('cal_instituto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3 ">             
            {{ Form::label('Califiación Empresa') }}
            {{ Form::text('cal_empresa', $rubrica->cal_empresa, ['class' => 'form-control' . ($errors->has('cal_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Cal Empresa']) }}
            {!! $errors->first('cal_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row g-3">
        <div class="col-3 ">             
            {{ Form::label('Calificación Final') }}
            {{ Form::text('cal_final', $rubrica->cal_final, ['class' => 'form-control' . ($errors->has('cal_final') ? ' is-invalid' : ''), 'placeholder' => 'Cal Final']) }}
            {!! $errors->first('cal_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>