<?php
include '../../control/ControlPaciente.php';

$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;

if(!empty($data)){
 $ControlPaciente = new ControlPaciente();
 $ControlPaciente->delete($obj,$id);
 header('Location:listar.php');
}
?>
