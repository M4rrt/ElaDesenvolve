<?php

require_once 'Conec.php';
class aluno{
	private $id;
	private $nome;
	private $idade;
	private $telefone;
	
	public function setId($id){
		$this->id=$id;

	}
	public function getId(){
		return $this->id;
	}
	public function setNome($nome){
		$this->nome=$nome;
	}
	public function getNome(){
		return $this->nome;

	}
	public function setIdade($idade){
		$this->idade=$idade;
	}
	public function getIdade(){
		return $this->idade;
	}
	public function setTelefone($telefone){
		$this->telefone=$telefone;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function imprime(){

		echo "id=".$this->id."<br>";
		echo "nome=".$this->nome."<br>";
		echo "idade=".$this->idade."<br>";
		echo "telefone=".$this->telefone."<br>";

	}
	public function inserir(){

		$conectado= new conexao();
		$st=$conectado->conn->prepare(
		"insert into alunos(nome,idade,telefone) ".
		"values(:n,:i,:t)");
		$st->bindValue(":n",$this->getNome());
		$st->bindValue(":i",$this->getIdade());
		$st->bindValue(":t",$this->getTelefone());
		return $st->execute();

	}
	public function alterar(){

		$conectado= new conexao();
		$st=$conectado->conn->prepare(
		"update alunos set nome=:n,idade=:i,".
		"telefone=:t where id=:id");
		$st->bindValue(":id",$this->getId());
		$st->bindValue(":n",$this->getNome());
		$st->bindValue(":i",$this->getIdade());
		$st->bindValue(":t",$this->getTelefone());
		return $st->execute();

	}
	public function apagar(){

		$conectado= new conexao();
		$st=$conectado->conn->prepare(
		"delete from alunos where id=:id");
		$st->bindValue(":id",$this->getId());
		return $st->execute();

	}
	public function buscarTodos(){

		$conectado= new conexao();
		$st=$conectado->conn->prepare(
		"select * from alunos order by nome");
		$st->execute();
		return $st->fetchAll();

	}
	public function buscarId(){

		$conectado= new conexao();
		$st=$conectado->conn->prepare(
		"select * from alunos where id=:id");
		$st->bindValue(":id",$this->getId());
		$st->execute();
		return $st->fetch();

	}

}
?>