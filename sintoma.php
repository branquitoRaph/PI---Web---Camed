<?php

require_once '30_DB_crud.php';

/**
Objetivo: Classe responsável por representar todas as operações sintoma associado ao sintoma.


Atributos:
$nomeSintoma - descrição do sintoma
$idsintoma - id do sintoma
 
 
 
Métodos:
insert - insere um sintoma na tabela sintoma
update - atualiza um sintoma na tabela sintoma



**/

class Sintoma extends CRUD{
	
	protected $table ='sintoma';
	
	
	
	private $nomeSintoma;
	private $idsintoma;
	
	
	
	public function setnomeSintoma($nomeSintoma){
		$this->nomeSintoma = $nomeSintoma;
	}
	
	public function getnomeSintoma(){
		return $this->nomeSintoma;
	}
	
	
	public function setidsintoma($idsintoma){
		$this->idsintoma = $idsintoma;
	}
	
	public function getidsintoma(){
		return $this->idsintoma;
	}
	
	
	
	public function insert(){
		/* Implementar
		$sql="INSERT INTO $this->table (nome,sobrenome,email,idade) VALUES (:nome,:sobrenome,:email,:idade)";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':sobrenome', $this->sobrenome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
		echo $this->idade;
		return $stmt->execute();
		*/
	}
	
	public function update($id){
		/* Implementar
		$sql="UPDATE $this->table SET nome = :nome, sobrenome = :sobrenome, email = :email , idade = :idade WHERE id = :id ";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':sobrenome', $this->sobrenome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
		*/
		
	}
	
}

?>
