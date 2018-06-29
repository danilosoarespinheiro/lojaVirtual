<?php
include_once '../../../../libs/color_admin_intranet/database/connectMYSQL.class.php';
include_once '../sql/dataTable.php';
include_once '../views/dataTable.php';

class dataTable{

  public function __construct(){

  }

    public function getDataTable()
    {
        $sql = getDataTableSql();
        $connectMYSQL = new connectMYSQL();
        $connectMYSQL->set('sql', $sql);
        $connnect = $connectMYSQL->conectar();
        $connectMYSQL->set('con',$connnect);
        $result = $connectMYSQL->executar();
        $connectMYSQL->set('rst',$result);
        $resultList = $connectMYSQL->getConsulta($result);
        $connectMYSQL->close($connnect);
        
        return getDataTableView($resultList);
    }
}
