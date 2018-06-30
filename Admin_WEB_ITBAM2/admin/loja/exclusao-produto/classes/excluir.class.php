<?php
include_once '../../../../libs/color_admin_intranet/database/connectMYSQL.class.php';
include_once '../sql/excluir.php';

class excluir {

    private $idProduto;

    public function __construct()
    {

    }

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
    }

    public function excluirProduto()
        {
            $sql = excluirProdutoSql($this->getIdProduto());
            $connectMYSQL = new connectMYSQL();
            $connectMYSQL->set('sql',$sql);
            $connnect = $connectMYSQL->conectar();
            $connectMYSQL->set('con',$connnect);
            $connectMYSQL->executar();
            $connectMYSQL->close($connnect);
            $response = array('status'  => true,
                                    'mensagem'=> "Produto excluído com sucesso!");

            return $response = json_encode($response);
        }

}
