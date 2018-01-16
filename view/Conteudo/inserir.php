<?php
include '../../control/ControlPaciente.php';

$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

if(!empty($data)){
 $ControlPaciente = new ControlPaciente();
 $ControlPaciente->insert($obj);
 header('Location:listar.php');
}
?>
