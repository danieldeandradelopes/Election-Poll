<?php

class RankingVotacaoDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function inserir($numeroCandidato, $numeroVotos, $nome) {
        $sql = "INSERT INTO ranking (numero, votos, nome ) VALUES('$numeroCandidato', '$numeroVotos', '$nome')";
        if (mysqli_query($this->conexao->getCon(), $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function cpf($cpf) {
        $sql = "INSERT INTO cpf (cpf) VALUES('$cpf')";
        if (mysqli_query($this->conexao->getCon(), $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function consultaVotos($numeroCandidato) {
        $sql = "SELECT * FROM ranking WHERE numero = '$numeroCandidato'";
        $resultado = mysqli_query($this->conexao->getCon(), $sql);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function consultaCPFVotacao($cpf) {
        $sql = "SELECT * FROM cpf WHERE cpf = '$cpf'";
        $resultado = mysqli_query($this->conexao->getCon(), $sql);
        if (mysqli_num_rows($resultado) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function atualizarQtdVotos($numeroCandidato, $qtdVotos) {
        $sql = "UPDATE  ranking  SET  votos = '$qtdVotos' WHERE numero = '$numeroCandidato'";
        if (mysqli_query($this->conexao->getCon(), $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function consultaVotacaoPorcentagem($candidato) {

        $sql = " SELECT  * FROM ranking WHERE numero = '$candidato'";
        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function contaTodosVotos() {

        $sql = " SELECT SUM(votos) FROM ranking";
        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function consultaMaior() {

        $sql = " SELECT * FROM ranking ORDER BY votos DESC";
        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

}

?>