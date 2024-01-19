<?php

require "src/conexao_bd.php";
require "src/modelo/Produto.php";
require "src/repositorio/produto_repositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_POST['id']);

header("Location: admin.php");