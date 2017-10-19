<?php
	$conn;
	require_once('clientePers.php');
	$a = new ClientePers();
	echo "teste";
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    if (isset($_POST['senha']))
        $senha = $_POST['senha'];
    if ($a->Validarlogin($email,$senha))
		header('Location: painelcontrole.php');
	else
        echo "Usuário ou senha invalido";
    }

?>