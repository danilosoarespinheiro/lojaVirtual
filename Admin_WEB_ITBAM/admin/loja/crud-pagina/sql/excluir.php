<?php
function excluirProdutoSql($idProduto)
{
       $sql = "DELETE FROM `bditbam`.`tb_produto`
               WHERE prod_cod = '$idProduto'";
    return $sql;
}



?>
