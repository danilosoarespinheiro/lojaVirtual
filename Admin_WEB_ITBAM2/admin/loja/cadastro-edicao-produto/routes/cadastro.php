<?php
header("Content-Type: application/json; charset=UTF-8");
include '../classes/cadastro.class.php';

$cadastro = new cadastro(null,null,null,null,null);
$cadastro->setNome($_POST['nome']);
$cadastro->setMarca($_POST['marca']);
$valor = $_POST['valor'];

$cadastro->setValor($valor);
$result =$cadastro->cadastrarProduto();

$result = json_encode($result);
echo $result;
