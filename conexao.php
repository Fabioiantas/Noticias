<?php
class Conexao{
	public function conectar(){
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		$banco = "aps01";
		
		try {
			$bd = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
			$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $bd;
		}
		catch(PDOException $e){
			throw new PDOException($e);
            die(); 
		}
	}
}
?>