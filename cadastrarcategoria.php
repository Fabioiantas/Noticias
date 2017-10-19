<?php
	require_once('categoriaPers.php');
	$a = new CategoriaPers();
	if(isset($_POST['btcadastrar'])){
		if(isset($_POST['titulo'])){
			$titulo = $_POST['titulo'];
			if (isset($_POST['descricao']))
				$descricao = $_POST['descricao'];
		}else{
			echo "Informe titulo e descricao";
			die();
		}
		session_start();
		$last_id = $a->Inserir($_SESSION['id_user_logado'],$titulo,$descricao);
		if($last_id == NULL)
			echo "Erro ao Cadastrar Categoria";
		else{
			echo "<script>alert('Cadastrado com Sucesso');</script>";	
		}
	}
?>
<html>
<h2>CADASTRAR CATEGORIA</h2>
<form method="POST" action="cadastrarcategoria.php">
    <table>
        <tr>
            <label>Titulo da Categoria</label>
			<input type="text"name="titulo" value=""><br><br>
            <label>Descricao</label>
			<input type="text"name="descricao" value=""><br><br><br>
            <input type="submit" name="btcadastrar" value="cadastrar">
        </tr>
    </table>
</form>
</html>