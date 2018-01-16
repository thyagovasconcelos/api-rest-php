<?php
include '../../control/ControlPaciente.php';
$ControlPaciente = new ControlPaciente();

header('Content-Type: application/json');

foreach($ControlPaciente->findAll() as $valor){
	echo json_encode($valor);
}

?>
