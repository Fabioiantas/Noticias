<?php
require_once ('conexao.php');
class CategoriaPers{
	public $conn;
	public function __construct(){
		$a = new Conexao();
		$this->conn = $a->conectar();
	}
	
	public function Inserir($id_usuario,$titulo,$descricao){
		try{
			$sql = "INSERT INTO categoria (id_usuario,titulo,descricao) VALUES (?, ?, ?)";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(1,$id_usuario);
			$stmt->bindParam(2,$titulo);
			$stmt->bindParam(3,$descricao);
			$stmt->execute();
			
			return $last_id = $this->conn->lastInsertId();
			/*session_start();
			$_SESSION['cliente'] = true;
			$_SESSION['usuario'] = $cliente->getEmail();
			$_SESSION['idcliente'] = $last_id;
			header('Location: ../cliente/index.php?endereco');*/
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
			//header('Location: erro.php?cod=1');
		} 
		finally {
			$this->conn = null;
		}
	}
	
	public function BuscarCategoria($titulo){
		try{
			$sql = "SELECT * FROM categoria WHERE upper(titulo) = upper('$titulo')";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_OBJ);
			
			if($result != null){
				return true;
			}else{
				return false;
			}
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
			header('Location: erro.php?cod=3');
		} 
	}
        public function BuscarCategoriaUsuario($id_usuario){
		try{
			$sql = "SELECT id_categoria,titulo FROM categoria where id_usuario = '$id_usuario'";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_OBJ);
			print_r($result);
			if($result != null){
				return $result;
			}else{
				return NULL;
			}
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
			header('Location: erro.php?cod=3');
		} 
	}
	
}
/*public function Alterar($cliente){
		try{
			if($cliente->getSenha() != ""){
				$sql = "UPDATE tbcliente SET email = ?, nome = ?, sobrenome = ?, sexo = ?, cpf = ?, nascimento = ?, senha = ? WHERE id = ?";
				$stmt = $this->conn->prepare($sql);
				$stmt->bindParam(1,$cliente->getEmail());
				$stmt->bindParam(2,$cliente->getNome());
				$stmt->bindParam(3,$cliente->getSobrenome());
				$stmt->bindParam(4,$cliente->getSexo());
				$stmt->bindParam(5,$cliente->getCpf());
				$stmt->bindParam(6,$cliente->getNascimento());
				$stmt->bindParam(7,$cliente->getSenha());
				$stmt->bindParam(8,$cliente->getId());
			}else{
				$sql = "UPDATE tbcliente SET email = ?, nome = ?, sobrenome = ?, sexo = ?, cpf = ?, nascimento = ? WHERE id = ?";
				$stmt = $this->conn->prepare($sql);
				$stmt->bindParam(1,$cliente->getEmail());
				$stmt->bindParam(2,$cliente->getNome());
				$stmt->bindParam(3,$cliente->getSobrenome());
				$stmt->bindParam(4,$cliente->getSexo());
				$stmt->bindParam(5,$cliente->getCpf());
				$stmt->bindParam(6,$cliente->getNascimento());
				$stmt->bindParam(7,$cliente->getId());
			}
			$stmt->execute();
			header('Location: ../administrador/admins.php?status=1');
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
			header('Location: erro.php?cod=2');
		} 
		finally {
			$this->conn = null;
		}
	}
	
	public function Deletar($id){
		try{
			$sql = "DELETE FROM tbcliente WHERE id = '$id'";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			header('Location: ../administrador/admins.php?status=1');
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
			header('Location: erro.php?cod=3');
		} 
		finally {
			$this->conn = null;
		}
	}
	
	public function Listar(){
		try{
			$sql = "SELECT * FROM tbcliente";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			
			$lista=[];
			
			while($dados=$stmt->fetch(PDO::FETCH_OBJ)){
				$objeto = new ClienteDTO();
				$objeto->setId($dados->id);
				$objeto->setEmail($dados->email);
				$objeto->setNome($dados->nome);
				$objeto->setSobrenome($dados->sobrenome);
				$objeto->setSexo($dados->sexo);
				$objeto->setCpf($dados->cpf);
				$objeto->setNascimento($dados->nascimento);
				$objeto->setSenha($dados->senha);
				$lista[] = $objeto;
			}
			return $lista;
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
			header('Location: erro.php?cod=3');
		} 
		finally {
			$this->conn = null;
		}
	}
	
	public function Buscar($id){
		try{
			$sql = "SELECT * FROM tbcliente WHERE id = '$id'";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$dados = $stmt->fetch(PDO::FETCH_OBJ);
			
			$objeto = new ClienteDTO();
			$objeto->setId($dados->id);
			$objeto->setEmail($dados->email);
			$objeto->setNome($dados->nome);
			$objeto->setSobrenome($dados->sobrenome);
			$objeto->setSexo($dados->sexo);
			$objeto->setCpf($dados->cpf);
			$objeto->setNascimento($dados->nascimento);
			$objeto->setSenha($dados->senha);
			
			return $objeto;
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
			header('Location: erro.php?cod=3');
		} 
		finally {
			$this->conn = null;
		}
	}
	*/
?>
