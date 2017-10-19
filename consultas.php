<?php

    function validaCadastro($email, $apelido){
        require_once('conexao.php');
        //echo "valida cadastro " . $email . $apelido . '<br>';
        //$query = $bd->prepare("select * from cadastro where email = ${email} and apelido = ${apelido}");
        $query = $bd->prepare("select * from usuario");
        //$query->bindParam(':email', $email);
        //$query->bindParam(':apelido', $apelido);
        while($usuario = $query->fetch()){
                 var_dump($usuario);
        }
        die();
    }

?>