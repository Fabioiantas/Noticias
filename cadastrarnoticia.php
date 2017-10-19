<?php
    require_once('categoriaPers.php');    
    $a = new CategoriaPers();        
    $a->BuscaCategoriaUsuario($_SESSION['id_user_logado']);
    if(isset($_POST['btcadastrar'])){
        if(isset($_POST['titulo']))
            $titulo = $_POST['titulo'];
        if (isset($_POST['resumo']))
            $resumo = $_POST['resumo'];
        if(isset($_POST['conteudo']))
            $conteudo = $_POST['conteudo'];    
    }
?>
<html>
<h2>CADASTRAR NOTICIA</h2>
<!--<div>
    <h3>Selecione a Categoria</h3>
    <select id="CmbUF"> 
        <option value="">Selecione a Categoria</option>
        <?php/*
            session_start();    
            foreach($a->BuscaCategoriaUsuario($_SESSION['id_user_logado']) as $row){
                echo '<option value="'.$row->titulo.'</option>';
            }       
        */?>
    </select>
</div>-->
<form method="POST" action="cadastrarnoticia.php">
    <table>
        <tr>
            <label>Titulo da Noticia</label>
			<input type="text"name="titulo" value=""><br><br>
            <label>Resumo</label>
			<input type="text"name="resumo" value=""><br><br><br>
            <label>Conteudo</label>
			<textarea name="conteudo"></textarea><br><br>
            <input type="submit" name="btcadastrar" value="cadastrar">
        </tr>
    </table>
</form>
</html>

