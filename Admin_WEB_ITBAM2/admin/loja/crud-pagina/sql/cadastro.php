<?php
function cadastrarProdutoSql($nome, $marca, $valor)
{

        $sql = "INSERT INTO `bditbam`.`tb_produto`
                          (`prod_nome`,
                          `prod_marca`,
                          `prod_valor`,
                          `prod_data_cad`)
               VALUES
                          ('$nome',
                          '$marca',
                          '$valor',
                          SYSDATE())";
    return $sql;
}

function verificaProdutoSql($nome, $marca)
{

        $sql = "SELECT COUNT(*) AS COUNT
                FROM `bditbam`.`tb_produto`
                WHERE `prod_nome` = '$nome'
                AND   `prod_marca` = '$marca'";
    return $sql;
}

?>
