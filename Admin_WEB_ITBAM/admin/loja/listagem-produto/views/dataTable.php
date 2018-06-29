<?php
function getDataTableView($resultList)
{
  if(empty($resultList)){

    $html['aaData'][0][0]   = null;
    $html['aaData'][0][1]   = null;
    $html['aaData'][0][2]   = null;
    $html['aaData'][0][3]   = null;
    $html['aaData'][0][4]   = null;


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
          
          $i++;
      }
    }
      return json_encode($html);
}
