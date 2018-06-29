<?php
include_once '../../../../libs/color_admin_intranet/database/connectMYSQL.class.php';
include_once '../sql/cadastro.php';

class cadastro{

  private $id;
  private $nome;
  private $marca;
  private $valor;
  private $data;

  public function __construct($id, $nome, $marca, $valor, $data){

      $this->id          = $id;
      $this->nome        = $nome;
      $this->marca       = $marca;
      $this->valor       = $valor;
      $this->data        = $data;

  }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function cadastrarProduto()
    {

      $verificador = $this->verificaProduto();

      if($verificador > 0){

        $response = array('status'  => false,
                                'mensagem'=> "Já existe um Produto com esse nome e marca!");
      }else{

      $sql = cadastrarProdutoSql($this->getNome(), $this->getMarca(), $this->getValor());
      $connectMYSQL = new connectMYSQL();
      $connectMYSQL->set('sql',$sql);
      $connnect = $connectMYSQL->conectar();
      $connectMYSQL->set('con',$connnect);
      $connectMYSQL->executar();
      $connectMYSQL->close($connnect);
      $response = array('status'  => true,
                              'mensagem'=> "Produto cadastrado com sucesso!");
      }
      return $response = json_encode($response);
    }

    public function verificaProduto()
    {
      $sql = verificaProdutoSql($this->getNome(), $this->getMarca());
      $connectMYSQL = new connectMYSQL();
      $connectMYSQL->set('sql', $sql);
      $connnect = $connectMYSQL->conectar();
      $connectMYSQL->set('con',$connnect);
      $result = $connectMYSQL->executar();
      $connectMYSQL->set('rst',$result);
      $resultList = $connectMYSQL->getConsulta($result);
      $connectMYSQL->close($connnect);

      foreach($resultList as $row){
           $count                   = $row['COUNT'];
      }

      return $count;

    }
}
