<?php
    require('conexao.php');

    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $marca = $_POST['marca'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];

    $sql = "UPDATE produtos SET descricao= '$descricao', marca= '$marca', estoque= '$estoque', preco= '$preco' WHERE id= $id";

    mysqli_query($conexao, $sql);

?>