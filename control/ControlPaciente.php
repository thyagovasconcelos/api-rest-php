<?php
include '../../model/Paciente.php';

class ControlPaciente {
	function insert($obj){
		$paciente = new Paciente();
		//echo $obj->titulo;
		return $paciente->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$paciente = new Paciente();
		return $paciente->update($obj,$id);
	}

	function delete($obj,$id){
		$paciente = new Paciente();
		return $paciente->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
			$paciente = new Paciente();
		return $paciente->findAll();
	}
}

?>
