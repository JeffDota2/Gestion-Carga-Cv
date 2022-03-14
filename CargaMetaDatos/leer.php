<?php 
        require 'vendor/autoload.php';
        require 'conexion.php';
    
        use PhpOffice\PhpSpreadsheet\IOFactory;
        use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

        $nombreArchivo = 'listaalumnos.xlsx';
        $documento = IOFactory::load($nombreArchivo);
        $totalHojas = $documento ->getSheetCount();
    
            $hojaActual = $documento ->getSheet(0);
            $numeroFilas = $hojaActual-> getHighestDataRow();
            $letra = $hojaActual -> getHighestColumn();
    
            $numeroLetra = Coordinate::columnIndexFromString($letra);
            
            for($indiceFila = 1; $indiceFila<=$numeroFilas; $indiceFila++){
    
                    $valorA= $hojaActual->getCellByColumnAndRow(1,$indiceFila);
                    $valorB= $hojaActual->getCellByColumnAndRow(2,$indiceFila);
                    $valorC= $hojaActual->getCellByColumnAndRow(3,$indiceFila);
                    $valorD= $hojaActual->getCellByColumnAndRow(4,$indiceFila);
                    $valorE= $hojaActual->getCellByColumnAndRow(5,$indiceFila);
                    $valorF= $hojaActual->getCellByColumnAndRow(6,$indiceFila);
                    $valorG= $hojaActual->getCellByColumnAndRow(7,$indiceFila);
                    $valorH= $hojaActual->getCellByColumnAndRow(8,$indiceFila);
                    $valorI= $hojaActual->getCellByColumnAndRow(9,$indiceFila);
                    $valorJ= $hojaActual->getCellByColumnAndRow(10,$indiceFila);
                    $valorK= $hojaActual->getCellByColumnAndRow(11,$indiceFila);
                    $valorL= $hojaActual->getCellByColumnAndRow(12,$indiceFila);
                    $valorM= $hojaActual->getCellByColumnAndRow(13,$indiceFila);

                    $sql = "INSERT INTO estudiantes(cedula_estudiante, apellido1, apellido2, nombre1, nombre2, sexo, correo_institucional, telefono_celular, telefono_fijo, tipo_matricula, periodo_academico_principal, jornada_principal, jornada_operativa)
                    VALUES ('$valorA','$valorB','$valorC','$valorD','$valorE','$valorF','$valorG','$valorH','$valorI','$valorJ','$valorK','$valorL','$valorM')";
                    $mysqli->query($sql);


            }
                echo 'Carga Masiva Correcta';
    
                    