@extends('layouts.app')

@section('template_title')
    {{ $empresariale->name ?? 'Empresarial' }}
@endsection

@section('content')
    <section class="content container-fluid">
            <div class="col-md-12">
                <div class="card">
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
<div class="card-header">
      <div align="center">
              <h2>PLANEACIÓN PROYECTO EMPRESARIAL</h2>
       </div>
<div class="float-right">
      <a class="btn btn-primary" href="{{ route('empresariales.index') }}"> Página inicial</a>
</div>
<div>
    <a href="{{ route('empresariales.pdf') }}" class="btn btn-sm btn-success"  data-placement="center">{{ __('Generar PDF') }}</a>
</div>
</div>
<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-sm table-bordered">
					<thead>
  <tr>
  <th>Nombre Estudiante</th>
      <td>{{ $empresariale->nom_estudiante }}</td>
  </tr>
  <tr>
  <th>Carrera</th>
  <td>{{ $empresariale->carrera }}</td>
  </tr>
  <tr>
  <th>Nivel</th>
  <td>{{ $empresariale->nivel }}</td>
  <th>Período Lectivo</th>
  <td>{{ $empresariale->pe_lectivo }}</td>
  </tr>
  <tr>
  <th>Entidad Formadora</th>
  <td>{{ $empresariale->ent_formadora }}</td>
  </tr>
  <tr>
  <th>Horas de Formación Prácticas</th>
      <td>{{ $empresariale->hr_practicas }}</td>
  </tr><br><br>
  <tr>
  <th scope="row" align="left">Titulo del Proyecto</th>
      <td colspan="2">{{ $empresariale->tit_proyecto }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Analisis de la situación</th>
      <td colspan="2">{{ $empresariale->analisis }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Objetivo del Proyecto</th>
      <td colspan="2">{{ $empresariale->obj_proyecto }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Descripcion del Proyecto</th>
      <td colspan="2">{{ $empresariale->des_proyecto }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Indicador</th>
  <td colspan="2">{{ $empresariale->indicador }}</td>
  <th scope="row" align="left">Medicion/Formula</th>
  <td colspan="2">{{ $empresariale->medicion }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Meta</th>
  <td colspan="2">{{ $empresariale->meta }}</td>
  <th scope="row" align="left">Fuente de Datos</th>
  <td colspan="2">{{ $empresariale->fuente }}</td>
  </tr>
  <th scope="row" align="left">Presupuesto</th>
  <td colspan="2">{{ $empresariale->meta }}</td>
  <th scope="row" align="left">Beneficios Esperados</th>
  <td colspan="2">{{ $empresariale->beneficios }}</td>
  </tr>
					</tbody>
				</table><br>
<h4>Comentarios</h4>
<p>{{ $empresariale->comentarios }}</p><br><br>
<div style="width:100px; height:auto; float:left; display:inline">
        <p align="center">Coordinador de Carrera</p>
        <p align="center">{{ $empresariale->cor_carrera }}</p>
</div> 
<div style="width:400px; height:auto; float:left; display:inline">
        <p align="center">Nombre Estudiante</p>
        <p align="center">{{ $empresariale->nom_estudiante }}</p>
</div> 
<div style="width:300px; height:auto; float:left; display:inline"> 
        <p align="center">Tutor Empresarial</p>
        <p align="center">{{ $empresariale->tut_empresa }}</p></div> 
</div>
			</div>
		</div>
</div>
</section>
@endsection
