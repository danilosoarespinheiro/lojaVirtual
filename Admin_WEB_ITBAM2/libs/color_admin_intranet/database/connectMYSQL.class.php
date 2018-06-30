<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
class connectMYSQL {

   private $host;
   private $bd;
   private $usuario;
   private $senha;
   private $sql;

   function conectar(){

      $conexao = mysql_connect('localhost','root','') or die($this->mensagem(mysql_error()));
      return $conexao;

   }

   function selecionarDB(){

      $banco = mysql_select_db($this->bd) or die($this->mensagem(mysql_error()));
      if($banco){
         return true;
      }else{
         return false;
      }
   }

   function executar(){

      $query = mysql_query($this->sql) or die ($this->mensagem(mysql_error()));
      return $query;

   }

   function set($propriedade,$valor){
      $this->$propriedade = $valor;
   }

   function mensagem($erro){
      echo $erro;
   }


   function getConsulta($rst){

        while($row = @mysql_fetch_array($rst)) {
            $data[] = $row;
        }

        return $data;
    }

    function getNumRows($rst){
      return $rows = mysql_num_rows($rst);
    }

   function close($conexao){
   $close =  mysql_close($conexao);
   }

}

?>
