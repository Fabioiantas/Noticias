<?php
	require_once('clientePers.php');
	$a = new ClientePers();
	if(isset($_POST['email'])) {
        $email = $_POST['email'];
		if ($a->BuscarEmail($email))
			header('Location: loginusuario.php');
		if (isset($_POST['apelido']))
			$apelido = $_POST['apelido'];
		if(isset($_POST['nome']))
			$nome = $_POST['nome'];
		if (isset($_POST['senha']))
			$senha = $_POST['senha'];
		$last_id = $a->Inserir($apelido,$nome,$email,$senha);
		if($last_id == NULL)
			echo "Erro ao Cadastrar usuario";
		else
			session_start();
			$_SESSION['id_user_logado'] = $last_id;
			echo "<script>alert('Cadastrado com Sucesso');</script>";	
			header('Location: painelcontrole.php');
    }
?>