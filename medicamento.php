<?php

require_once '30_DB_crud.php';

/**
Objetivo: Classe responsável por representar todas as operações medicamento associado ao sintoma.


Atributos:
$nomeMedicamento- nome do medicamento
$PMVC - preco maximo vendido ao consumidor
$necessarioreceita - sim ou não
$imagem - imagem do medicamento
$nomeSintoma - descrição do sintoma
$idsintoma - id do sintoma
 
 
 
Métodos:
insert - insere um medicamento na tabela medicamento
update - atualiza um medicamento na tabela cliente



**/

class Medicamento extends CRUD{
	
	protected $table ='medicamento';
	
	
	private $nomeMedicamento;
	private $PMVC;
	private $necessarioreceita;
	private $imagem;
	
	
	
	
	private $nomeSintoma;
	private $idsintoma;
	
	
	
	public function setnomeMedicamento($nome){
		$this->nomeMedicamento = $nomeMedicamento;
	}
	public function getnomeMedicamento(){
		return $nomeMedicamento->nomeMedicamento;
	}
	
	public function setPMVC($PMVC){
		$this->PMVC = $PMVC;
	}
	public function getPMVC(){
		return $this->PMVC;
	}
	
	public function getnecessarioreceita(){
		return $this->necessarioreceita;
	}
	public function setnecessarioreceita($necessarioreceita){
		$this->necessarioreceita = $necessarioreceita;
	}
	
	public function setimagem($imagem){
		$this->imagem = $imagem;
	}
	
	public function getimagem(){
		return $this->imagem;
	}
	
	
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
	
	public function  findbySintoma($id_sintoma){	
			
					
			
			
			$sql = "SELECT sintoma.nomeSintoma , medicamento.nomeMedicamento as nome, medicamento.PMVC, medicamento.necessarioReceita FROM sintoma,sintoma_medicamento, medicamento WHERE sintoma_medicamento.FK_SINTOMA_idSintoma = sintoma.idSintoma AND sintoma_medicamento.FK_MEDICAMENTO_idMedicamento = medicamento.idMedicamento AND sintoma.idSintoma= :idsintoma";			
			$stmt = Database::prepare($sql);
			$stmt->bindParam(':idsintoma', $id_sintoma, PDO::PARAM_INT);
			$stmt->execute();			
			
			return $stmt->fetchAll(PDO::FETCH_BOTH);
			
			
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
