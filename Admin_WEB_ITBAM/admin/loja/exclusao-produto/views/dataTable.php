<?php
function getDataTableView($resultList)
{
  if(empty($resultList)){

    $html['aaData'][0][0]   = null;
    $html['aaData'][0][1]   = null;
    $html['aaData'][0][2]   = null;
    $html['aaData'][0][3]   = null;
    $html['aaData'][0][4]   = null;
    $html['aaData'][0][5]   = null;

    }else{
      $i=0;
      foreach($resultList as $row){

          $idProduto                = $row['ID'];
          $nomeProduto              = $row['NOME'];
          $marcaProduto             = $row['MARCA'];
          $valorProduto             = $row['VALOR'];

          $html['aaData'][$i][0] = $row['ID'];
          $html['aaData'][$i][1] = $row['NOME'];
          $html['aaData'][$i][2] = $row['MARCA'];
          $html['aaData'][$i][3] = $row['VALOR'];
          $html['aaData'][$i][4] = $row['DATA'];
          $html['aaData'][$i][5] = "<div style=\"white-space:nowrap\"  class=\"form-group \">";
          $html['aaData'][$i][5] .= "<a title=\"Excluir Produto\" href=\"#\" data-toggle=\"modal\" data-target=\"\" onclick=\"excluir('$idProduto')\"><button class=\"btn btn-danger btn-sm\"
          type=\"button\"><i class=\"fa fa-trash\"></i> <span class=\"bold\"></span></button></a>&nbsp;</div>";
          $i++;
      }
    }
      return json_encode($html);
}
