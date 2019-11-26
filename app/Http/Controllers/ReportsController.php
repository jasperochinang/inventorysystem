<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class ReportsController extends Controller
{
    public function word(){

    	$templateProcessor = new TemplateProcessor('./templates/Certificate of Recognition.docx');
    	$templateProcessor->setValue('first_name', 'Juan');
		$templateProcessor->setValue('last_name', 'Toe');
		$templateProcessor->saveAs('Juan Toe Certificate.docx');
		return response()->download('Juan Toe Certificate.docx');

    }
    public function excel(){
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('./templates/form138.xlsx');
	$worksheet = $spreadsheet->getActiveSheet();
	$worksheet->getCell('A7')->setValue('Name: Juan Toe');
	$worksheet->getCell('A8')->setValue('11-B');
	$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
	$writer->save('form138.xls');
	return response()->download('form138.xls');
    }
}
