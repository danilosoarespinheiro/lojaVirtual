<?php
header("Content-Type: application/json; charset=UTF-8");
include '../classes/excluir.class.php';

$excluir = new excluir();
$excluir->setIdProduto($_POST['idProduto']);

$result =$excluir->excluirProduto();

$result = json_encode($result);
echo $result;
