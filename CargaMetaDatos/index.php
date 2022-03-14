<?php

    require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

    $spreadsheet = new Spreadsheet();
    $spreadsheet->getProperties()->setCreator("Jefferson Cuello")->setTitle("Carga Masiva");

    $spreadsheet->setActiveSheetIndex(0);
    $hojaActiva = $spreadsheet-> getActiveSheet();

    $spreadsheet-> getDefaultStyle()->getFont()->setName('Tahoma');
    $spreadsheet-> getDefaultStyle()->getFont()->setSize(15);


    $hojaActiva-> setCellValue('A1','CODIGOS DE PROGRAMACION');
    $hojaActiva-> setCellValue('B2',199605.214);
    $hojaActiva-> setCellValue('C1','Jefferson Cuello')->setCellValue('D1','CDP');

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="MiExcel.xlsx"');
    header('Cache-Control: max-age=0');

    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');

?>