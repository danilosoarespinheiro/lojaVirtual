<?php
header("Content-Type: application/json; charset=UTF-8");
include '../classes/editar.class.php';

  $editar = new editar();

  $editar->setId($_POST['idProduto']);
  $editar->setNome($_POST['nomeProduto']);
  $editar->setMarca($_POST['marcaProduto']);
  $valor = $_POST['valorProduto'];

  $editar->setValor($valor);

  $result =$editar->editarProduto();

  $result = json_encode($result);
  echo $result;
