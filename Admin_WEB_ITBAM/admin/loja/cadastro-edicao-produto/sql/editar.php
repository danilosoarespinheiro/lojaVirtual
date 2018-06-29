<?php
function editarProdutoSql($idProduto, $nomeProduto, $marcaProduto, $valorProduto)
{
       $sql = "UPDATE `bditbam`.`tb_produto`
              SET
              `prod_nome` = '$nomeProduto',
              `prod_marca` = '$marcaProduto',
              `prod_valor` = '$valorProduto'
              WHERE `prod_cod` = '$idProduto'";
    return $sql;
}

?>
