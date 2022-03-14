@extends('layouts.app')

@section('template_title')
    {{ $rubrica->name ?? 'Rubrica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Rubrica</span>
                        </div>
                        <div class="float-right">
      <a class="btn btn-primary" href="{{ route('empresariales.index') }}"> Página inicial</a>
</div>
<div>
    <a href="{{ route('rubricas.pdf') }}" class="btn btn-sm btn-success"  data-placement="center">{{ __('Generar PDF') }}</a>
</div>
</div>
<div align="center">
<img src="http://userscontent2.emaze.com/images/33c58489-cf42-4a76-9ca4-94bb149cfa8d/Slide7_Pic3_636408719339374930.png"
     width="300"
     height="101">
</div>
                    <div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-sm table-bordered">
					<thead>
  <tr>
  <th>Nombre Estudiante</th>
      <td> {{ $rubrica->nom_estudiante }}</td>
  </tr>
  <tr>
  <th>Nivel</th>
  <td>{{ $rubrica->nivel  }}</td>
  <th>Perido Lectivo</th>
  <td>{{ $rubrica->pe_lectivo }}</td>
  </tr>
  <tr>
  
  <th>Entidad Formadora</th>
  <td>{{ $rubrica->ent_formadora }}</td>
  </tr>
  <tr>
  <th>Tutor Empresa</th>
  <td>{{ $rubrica->tut_empresa }}</td>
  </tr>
  <tr>
  <th>Tutor Instituto</th>
  <td>{{ $rubrica->tut_instituto }}</td>
  </tr><br><br>
  <tr>
  <th scope="row" align="left">Fecha evaluacion</th>
      <td colspan="2">{{ $rubrica->fecha_evaluacion }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Horas Practica</th>
      <td colspan="2">{{ $rubrica->hr_practica }}</td>
  </tr>
  <tr>
  <th>Desde</th>
  <td>{{ $rubrica->desde  }}</td>
  <th>Hasta</th>
  <td>{{ $rubrica->hasta }}</td>
  </tr>
  <tr>
  <th>Entrega documentacion</th>
  <td>{{ $rubrica->ent_documento }}</td>
  </tr>
  <tr>
  <th>Presentacion Proyecto</th>
  <td>{{ $rubrica->pres_proyecto }}</td>
  </tr>
  <tr>
  <th>Adquisicion de conocimientos</th>
  <td>{{ $rubrica->ad_conocimiento }}</td>
  </tr>
  <tr>
  <th>Aplicación de conocimientos</th>
  <td>{{ $rubrica->ap_conocimiento }}</td>
  </tr>
  <tr>
  <th>Suma</th>
  <td>{{ $rubrica->sum_uno  }}</td>
  <th>Promedio</th>
  <td>{{ $rubrica->pro_uno }}</td>
  </tr>
  <tr>
  <th>Promedio Evaluacion</th>
  <td>{{ $rubrica->prom_evaluacion }}</td>
  </tr>
  <tr>
  <th>Presentacion Proyectos</th>
  <td>{{ $rubrica->pres_proyecto }}</td>
  </tr>
  <tr>
  <th>Cumplimiento Objetivo</th>
  <td>{{ $rubrica->cum_objetivo }}</td>
  </tr>
  <tr>
  <th>Actitud</th>
  <td>{{ $rubrica->actitud }}</td>
  </tr>
  <tr>
  <th>Suma</th>
  <td>{{ $rubrica->sum_dos }}</td>
  <th>Promedio</th>
  <td>{{ $rubrica->pro_dos }}</td>
  </tr>
  <tr>
  <th>Calificacion Instituto</th>
  <td>{{ $rubrica->cal_instituto }}</td>
  </tr>
  <tr>
  <th>Califiacacion Empresa</th>
  <td>{{ $rubrica->cal_empresa }}</td>
  </tr>
  <tr>
  <th>Calificacion Final</th>
  <td>{{ $rubrica->cal_final }}</td>
  </tr>
</table><br><br>
<div style="width:100px; height:auto; float:left; display:inline">
        <p align="center">Tutor Institucional</p>
        <p align="center">{{ $rubrica->tut_instituto }}</p>
</div> 
<div style="width:400px; height:auto; float:left; display:inline">
        <p align="center">Tutor Empresarial</p>
        <p align="center">{{ $rubrica->tut_empresa }}</p>
</div> 
		</div>
        </div>
    </section>
@endsection
