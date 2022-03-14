<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<img src="https://www.preuniversitarionewton.com/web/images/preuniversitario/noticias/senescyt_logo.png"
     width="300"
     height="101">
     <img src="http://userscontent2.emaze.com/images/33c58489-cf42-4a76-9ca4-94bb149cfa8d/Slide7_Pic3_636408719339374930.png"
     align="right"
    padding-top="100"
     width="200"
     height="90">
<div align="center">
    <h2>PLANEACIÓN PROYECTO EMPRESARIAL</h2>
</div>
<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-sm table-bordered">
					<thead>
                    @foreach ($empresariales as $empresariale)
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
  </tr><br><br>
  @endforeach
	</tbody>
	  </table>
 <br><br><br><br><br><br>
<h4>Comentarios</h4>
<p>{{ $empresariale->comentarios }}</p><br><br><br><br><br><br><br><br>
<div style="width:100px; height:auto; float:left; display:inline">
        <hr width="100"/>
        <p align="center">Coordinador de Carrera</p>
        <p align="center">{{ $empresariale->cor_carrera }}</p>
</div> 
<div style="width:300px; height:auto; float:left; display:inline"> 
        <hr width="100" />
        <p align="center">Estudiante</p>
        <p align="center">{{ $empresariale->nom_estudiante }}</p></div> 
</div>
<div style="width:100px; height:auto; float:left; display:inline">
    <hr width="100"/>
    <p align="center">Tutor Empresarial</p>
    <p align="center">{{ $empresariale->tut_empresa }}</p>
    </div>    
</div> 
	</div>
		</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>