<?php
include "../core/autoload.php";
include "../core/modules/index/model/TeamData.php";
include "../core/modules/index/model/AlumnTeamData.php";
include "../core/modules/index/model/AlumnData.php";

require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();

$pdf = new  PhpOffice\PhpWord\PhpWord();

$team =  TeamData::getById($_GET["team_id"]);
$alumns = AlumnTeamData::getAllByTeamId($_GET["team_id"]);

$section1 = $pdf->AddSection();
$section1->addText("ALUMNOS - ".strtoupper($team->name),array("size"=>22,"bold"=>true,"align"=>"right"));


$styleTable = array('borderSize' => 6, 'borderColor' => '888888', 'cellMargin' => 40);
$styleFirstRow = array('borderBottomColor' => '0000FF', 'bgColor' => 'AAAAAA');

$table1 = $section1->addTable("table1");
$table1->addRow();
$table1->addCell()->addText("Nombre Completo");
foreach($alumns as $al){
$alumn = $al->getAlumn();
$table1->addRow();
$table1->addCell(15000)->addText($alumn->name." ".$alumn->lastname);
}

$pdf->addTableStyle('table1', $styleTable,$styleFirstRow);
/// datos bancarios
$section1->addText("");
$section1->addText("");
$section1->addText("");
$section1->addText("Generado por Xoolar Lite v1.1");

$filename = "Grupo-".time().".pdf";
#$word->setReadDataOnly(true);
$pdf->save($filename,"PDF");
//chmod($filename,0444);
header("Content-Disposition: attachment; filename=$filename");
readfile($filename); // or echo file_get_contents($filename);
unlink($filename);  // remove temp file



?>