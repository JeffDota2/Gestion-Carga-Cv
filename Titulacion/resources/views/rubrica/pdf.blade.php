<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubrica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div align="center">
<img src="http://userscontent2.emaze.com/images/33c58489-cf42-4a76-9ca4-94bb149cfa8d/Slide7_Pic3_636408719339374930.png"
     width="300"
     height="101">
</div>
     
<div align="center">
    <h2>Rubrica de evaluacion</h2>
</div>
<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-sm table-bordered">
					<thead>
                    @foreach ($rubricas as $rubrica)
  <tr>
  <th>Nombre Estudiante</th>
      <td>{{ $rubrica->nom_estudiante }}</td>
  </tr>
  <tr>
  <th>Nivel</th>
  <td>{{ $rubrica->nivel }}</td>
  <th>Período Lectivo</th>
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
  </tr>
  <tr>
  <tr>
  <th>Fecha evaluación</th>
      <td>{{ $rubrica->fecha_evaluacion }}</td>
  </tr>
  <tr>
  <th>Horas de practica</th>
      <td>{{ $rubrica->hr_practica }}</td>
  </tr>
  <tr>
  <th>Desde</th>
  <td>{{ $rubrica->desde }}</td>
  <th>Hasta</th>
  <td>{{ $rubrica->hasta }}</td>
  </tr><br><br>
  <h4 align="center">Calificación Instituto(50%)</h4>
  <br>
  <tr>
  <th>Entrega Documentación</th>
      <td>{{ $rubrica->ent_documento }}</td>
  </tr>
  <tr>
  <th>Presentación proyecto</th>
      <td>{{ $rubrica->pres_proyecto }}</td>
  </tr>
  <tr>
  <th>Adquisición de conocimientos</th>
      <td>{{ $rubrica->ad_conocimiento }}</td>
  </tr>
  <tr>
  <th>Aplicación de conocimientos</th>
      <td>{{ $rubrica->ap_conocimiento }}</td>
  </tr>
  <tr>
  <th>Suma</th>
  <td>{{ $rubrica->sum_uno }}</td>
  <th>Promedio</th>
  <td>{{ $rubrica->pro_uno }}</td>
  </tr><br><br><br><br><br>
  <h4 align="center">Calificación Empresa(50%)</h4>
  <br>
  <tr>
  <th>Promedio de evaluación</th>
      <td>{{ $rubrica->prom_evaluacion }}</td>
  </tr>
  <tr>
  <th>Presentación proyecto</th>
      <td>{{ $rubrica->pres_proyecto }}</td>
      <br>
  </tr>
  <tr>
  <th>Cumplimiento objetivos</th>
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
  </tr><br><br>
  <h4 align="center">Consolidado fase práctica</h4>
  <br>
  <tr>
  <th>Calificación instituto</th>
      <td>{{ $rubrica->cal_instituto}}</td>
  </tr>
  <tr>
  <th>Calificación empresa</th>
      <td>{{ $rubrica->cal_empresa }}</td>
  </tr>
  <tr>
  <th>Calificación final</th>
      <td>{{ $rubrica->cal_final }}</td>
  </tr>
  
  @endforeach
	</tbody>
	  </table>
 <br><br><br><br><br>
 <div style="width:100px; height:auto; float:left; display:inline">
        <hr width="100"/>
        <p align="center">Tutor instituto</p>
        <p align="center">{{ $rubrica->tut_instituto }}</p>
</div> 
<div style="width:300px; height:auto; float:left; display:inline"> 
        <hr width="100" />
        <p align="center">Tutor empresa</p>
        <p align="center">{{ $rubrica->tut_empresa }}</p></div> 
</div>

	</div>
		</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>