<?php

require_once 'aluno.php';
if(isset($_GET['id'])){
$student = new aluno();
$student->setId($_GET['id']);
$resp=$student->buscarId();
?>
<h3>Alterar Aluno</h3>
<form action="alterar2.php" method="POST">
<p>Id: <input type="number" value="<?php echo $resp['id']?>" name="id" readonly="true"></p>
<p>Nome: <input type="text" value="<?php echo $resp['nome']?>" name="nome" required></p>
<p>Idade: <input type="number" value="<?php echo $resp['idade']?>" name="idade"></p>
<p>Telefone: <input type="text" value="<?php echo $resp['telefone']?>" name="telefone"></p>
<p><input type="submit" value="Alterar"></p>
</form>
<?php
}

?>