<?php
include_once '../classes/dataTable.class.php';

$dataTable = new dataTable();

switch ($_GET['type']) {

  case 'default':
    $response = $dataTable->getDataTable();
  break;

}

echo $response;
