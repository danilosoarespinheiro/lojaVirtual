<?php
include_once '../../../../libs/color_admin_intranet/database/connectMYSQL.class.php';
include_once '../sql/editar.php';
include_once 'cadastro.class.php';

class editar extends cadastro{

    public function __construct()
    {

    }

    public function editarProduto()
        {
            $sql = editarProdutoSql($this->getId(), $this->getNome(), $this->getMarca(), $this->getValor());
            $connectMYSQL = new connectMYSQL();
            $connectMYSQL->set('sql',$sql);
            $connnect = $connectMYSQL->conectar();
            $connectMYSQL->set('con',$connnect);
            $connectMYSQL->executar();
            $connectMYSQL->close($connnect);
            $response = array('status'  => true,
                                    'mensagem'=> "Produto editado com sucesso!");

            return $response = json_encode($response);
        }
}
