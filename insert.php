<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir produtos</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
    <body>
        <?php
            require('conexao.php');

            $descricao = $_POST['descricao'];
            $marca     =  $_POST['marca'];
            $estoque   = $_POST['estoque'];
            $preco     = $_POST['preco'];
            $erros     = 0;
        ?>
        <?php if (is_null($descricao) or $descricao == '') : ?>
            <div class="alert alert-danger" role="alert">O campo descrição não pode estar vazio.</div>
            <?php $erros++ ?>
        <?php endif; ?>
        <?php if (is_null($marca) or $marca == '') : ?>
            <div class="alert alert-danger" role="alert">O campo marca não pode estar vazio.</div>
            <?php $erros++ ?>
        <?php endif; ?>
        <?php if (is_null($estoque) or $estoque == '') : ?>
            <div class="alert alert-danger" role="alert">O campo estoque não pode estar vazio.</div>
            <?php $erros++ ?>
        <?php endif; ?>
        <?php if (is_null($preco) or $preco == '') : ?>
            <div class="alert alert-danger" role="alert">O campo preco não pode estar vazio.</div>
            <?php $erros++ ?>
        <?php endif; ?>

        <?php
            $resultado = false;

            if ($erros == 0) {
                $sql = "INSERT INTO produtos (id, descricao, marca, estoque, preco) 
                    VALUES (null , '$descricao', '$marca', '$estoque', '$preco')";

                $resultado = mysqli_query($conexao, $sql);
            }
        ?>
        <?php if ($resultado): ?>
            <div class="alert alert-success" role="alert">Produto cadastrado com sucesso.</div>
            <a href="select.php" class="btn btn-primary">Lista de Produtos</a>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">Erro!</div>
            <a href="cadastrar.php" class="btn btn-primary">Tentar novamente</a>
        <?php endif; ?>
    </body>
</html>