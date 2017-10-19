<?php
	if(isset($_POST['btcadastrarnoticia']))
		header('Location: cadastrarnoticia.php');
	if(isset($_POST['btcadastrarcategoria']))
		header('Location: cadastrarcategoria.php');
?>
<html>
<form method="POST" action="painelcontrole.php">
    <table>
        <tr>
			<input type="submit"  name="btcadastrarcategoria" value="cadastrar categoria">
            <input type="submit"  name="btcadastrarnoticia" value="cadastrar noticia">
        </tr>
    </table>
</form>
</html>
