<?php
function getDataTableSql()
{

     $sql = "SELECT `tb_produto`.`prod_cod`      AS ID,
                    `tb_produto`.`prod_nome`     AS NOME,
                    `tb_produto`.`prod_marca`    AS MARCA,
                    `tb_produto`.`prod_valor`    AS VALOR,
                    DATE_FORMAT(`tb_produto`.`prod_data_cad`,'%d/%m/%Y') AS DATA

                FROM `bditbam`.`tb_produto`";
    return $sql;
}
?>
