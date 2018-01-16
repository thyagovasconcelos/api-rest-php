<?php
include '../../conexao/Conexao.php';

class Paciente extends Conexao{
	  private $id;
    private $nome;
    private $idade;
    private $status;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setStatus ($status){
      $this->status = $status;
    }

    public function insert($obj){
    	$sql = "INSERT INTO paciente(id, nome, idade, status) VALUES (:id,:nome,:idade,:status)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',  $obj->id);
        $consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('idade' , $obj->idade);
        $consulta->bindValue('status' , $obj->status);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE paciente SET id = :id, nome = :nome, idade = :idade, status = :status WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
  		$consulta->bindValue('id', $obj->id);
  		$consulta->bindValue('nome', $obj->nome);
  		$consulta->bindValue('idade' , $obj->idade);
  		$consulta->bindValue('status', $obj->status);

  		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM paciente WHERE id = :id";
    $consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM paciente";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>
