<?php

class Conexao {

    /*private $usuario = "pesquisaeleico";
    private $senha = "KKh!@#*(5)DeC";
    private $caminho = "pesquisaeleico.mysql.dbaas.com.br";
    private $banco = "pesquisaeleico";
    private $con;
    */
    
    private $usuario = "root";
    private $senha = "";
    private $caminho = "localhost";
    private $banco = "votacao";
    private $con;

    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
        mysqli_select_db($this->con, $this->banco) or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
    }

    public function getCon() {
        return $this->con;
    }

}
?>


