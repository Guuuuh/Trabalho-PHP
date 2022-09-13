<?php
    require('conexao.php');

    //conectar com o editar 
    
    $id = $_POST['id']; // Precisa?
    $descricao = $_POST['descricao']; //
    $marca = $_POST['marca']; //
    $estoque = $_POST['estoque']; //
    $preco = $_POST['preco']; //

    $usuario['descricao'] // talvez usar isso pra pegar a descrição que ta sendo alterada no editar e passar pro banco. 
?>