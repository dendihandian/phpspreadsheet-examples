<?php

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// Create A Spreadsheet
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Get Active (Default) Sheet From The Spreadsheet (Optional)
$sheet = $spreadsheet->getActiveSheet();

// Set The Sheet Title (Optional)
$sheet->setTitle('a_sheet_title');

// Create (Xlsx) Spreadsheet Writer
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

// Write and Save Spreadsheet as File
$writer->save('the_spreadsheet_name.xlsx');
