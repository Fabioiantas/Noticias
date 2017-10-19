<?php
	  if(isset($_POST['btlogin']))
		header('Location: loginusuario.php');
?>
<html>
<table style="width: 40%">
    <tr>
        <th>E-mail</th>
        <th>Nome de Usuário</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>
</table>
<form method="POST" action="usuarioinicio.php">
    <table>
        <tr>
            <input type="text"    name="email">
            <input type="text"    name="apelido">
            <input type="text"    name="nome">
            <input type="password"name="senha">
            <input type="submit"  name="btcadastrar" value="cadastrar">
        </tr>
    </table>
</form>

</html>