<?php
session_start();

function validCPF($cpf) {
    // determina um valor inicial para o digito $d1 e $d2
    // pra manter o respeito ;)
    $d1 = 0;
    $d2 = 0;
    // remove tudo que não seja número
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    // lista de cpf inválidos que serão ignorados
    $ignore_list = array(
        '00000000000',
        '01234567890',
        '11111111111',
        '22222222222',
        '33333333333',
        '44444444444',
        '55555555555',
        '66666666666',
        '77777777777',
        '88888888888',
        '99999999999'
    );
    // se o tamanho da string for dirente de 11 ou estiver
    // na lista de cpf ignorados já retorna false
    if (strlen($cpf) != 11 || in_array($cpf, $ignore_list)) {
        return false;
    } else {
        // inicia o processo para achar o primeiro
        // número verificador usando os primeiros 9 dígitos
        for ($i = 0; $i < 9; $i++) {
            // inicialmente $d1 vale zero e é somando.
            // O loop passa por todos os 9 dígitos iniciais
            $d1 += $cpf[$i] * (10 - $i);
        }
        // acha o resto da divisão da soma acima por 11
        $r1 = $d1 % 11;
        // se $r1 maior que 1 retorna 11 menos $r1 se não
        // retona o valor zero para $d1
        $d1 = ($r1 > 1) ? (11 - $r1) : 0;
        // inicia o processo para achar o segundo
        // número verificador usando os primeiros 9 dígitos
        for ($i = 0; $i < 9; $i++) {
            // inicialmente $d2 vale zero e é somando.
            // O loop passa por todos os 9 dígitos iniciais
            $d2 += $cpf[$i] * (11 - $i);
        }
        // $r2 será o resto da soma do cpf mais $d1 vezes 2
        // dividido por 11
        $r2 = ($d2 + ($d1 * 2)) % 11;
        // se $r2 mair que 1 retorna 11 menos $r2 se não
        // retorna o valor zeroa para $d2
        $d2 = ($r2 > 1) ? (11 - $r2) : 0;
        // retona true se os dois últimos dígitos do cpf
        // forem igual a concatenação de $d1 e $d2 e se não
        // deve retornar false.
        return (substr($cpf, -2) == $d1 . $d2) ? true : false;
    }
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <title>Registrar Votação</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">
    </head>
    <body>
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Pesquisa Eleições 2016 -  Presidente Prudente
                    </h1>

                    <h3 class="page-header">
                        <small>Essa pesquisa não é uma pesquisa oficial, também não é registrada junto ao TRE.</small><br><br>                        
                    </h3>

                    <?php
                    if (!isset($_POST['confirmar'])) {
                        echo '
                    <form action="registraVotacao.php" method="POST">
                        <p class="lead">Você deseja votar em: ';

                        if (isset($_REQUEST['valor'])) {

                            if ($_REQUEST['valor'] > 0) {



                                if ($_REQUEST['valor']) {
                                    $_SESSION['candidato'] = $_REQUEST['valor'];
                                    $candidato = $_SESSION['candidato'];

                                    if ($candidato == '15') {
                                        $_SESSION['votarEm'] = 'Agripino Lima - 15';
                                        $_SESSION['caminho'] = '<img src="imagens/agripino-lima-d.jpg" alt="...">';
                                    } else if ($candidato == '77') {
                                        $_SESSION['votarEm'] = 'Daniel Grandolfo - 77';
                                        $_SESSION['caminho'] = '<img src="imagens/daniel-grandolfo-d.jpg" alt="...">';
                                    } else if ($candidato == '70') {
                                        $_SESSION['votarEm'] = 'Dodo - 70';
                                        $_SESSION['caminho'] = '<img src="imagens/dodo-pt-do-b-d.jpg" alt="...">';
                                    } else if ($candidato == '23') {
                                        $_SESSION['votarEm'] = 'Fábio Sato - 23';
                                        $_SESSION['caminho'] = '<img src="imagens/fabio-sato-d.jpg" alt="...">';
                                    } else if ($candidato == '10') {
                                        $_SESSION['votarEm'] = 'José Lemes - 10';
                                        $_SESSION['caminho'] = '<img src="imagens/jose-lemes-soares-d.jpg" alt="...">';
                                    } else if ($candidato == '14') {
                                        $_SESSION['votarEm'] = 'Nelson Bugalho - 14';
                                        $_SESSION['caminho'] = '<img src="imagens/nelson-bugalho-d.jpg" alt="...">';
                                    } else if ($candidato == '50') {
                                        $_SESSION['votarEm'] = 'Professor Donizete - 50';
                                        $_SESSION['caminho'] = '<img src="imagens/prof-donizete-d.jpg" alt="...">';
                                    } else if ($candidato == '13') {
                                        $_SESSION['votarEm'] = 'Regina Penati - 13';
                                        $_SESSION['caminho'] = '<img src="imagens/regina-penati-d.jpg" alt="...">';
                                    }
                                }
                            }
                            echo $_SESSION['votarEm'] . ' ? ';
                            echo $_SESSION['caminho'];
                        }

                        echo' </p>

                        
                        <div class="row">
                            <div class="col-lg-3">
                                Digite o seu CPF sem pontos para validar a pesquisa: <input type="number" class="form-control" name="cpf" required  placeholder="Ex.: 11122233344"  />
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="submit" name="confirmar" value="Confirmar Voto!" class="btn btn-success">
                            </div>
                            <div class="col-lg-8">
                            </div>                           
                        </div>

                    </form>';
                    }
                    ?>
                    <br>
                    <div class="panel-footer">

                        <div class="row">                        
                            <div class="col-lg-4">
                                <a href="index.php"><input type="submit" value="Voltar para escolha de candidatos!" class="btn btn-primary"></a>
                            </div>                                     

                            <div class="col-lg-4">
                                <a href="resultadoPesquisa.php"><input type="submit" value="Ver resultado parcial da pesquisa!" class="btn btn-link"></a>
                            </div>

                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <?php
            $gatilho = 0;
            if ($_POST) {

                include './classes/Conexao.class.php';
                include './classes/DAO/RankingVotacao.class.php';
                if ($_POST['confirmar']) {
                    if (isset($_SESSION['candidato'])) {
                        $candidatoEscolhido = $_SESSION['candidato'];
                    } else {
                        header("Location: resultadoPesquisa.php");
                    }

                    if (isset($_SESSION['caminho'])) {
                        $imagemCandidato = $_SESSION['caminho'];
                    } else {
                        header("Location: resultadoPesquisa.php");
                    }

                    if (isset($_SESSION['votarEm'])) {
                        $nomeCandidato = $_SESSION['votarEm'];
                    } else {
                        header("Location: resultadoPesquisa.php");
                    }



                    $cpf = addslashes($_POST['cpf']);


                    $cpfReformulado = ((((($cpf / 3.14) / 4.16) * 7.36) * 3.11) + 2016);





                    if (validCPF($cpf) == true) {



                        $rankingVotacao = new RankingVotacaoDAO();

                        $consultaCPF = $rankingVotacao->consultaCPFVotacao(round($cpfReformulado));
                        if (!$consultaCPF == true) {


                            if ($resultado = $rankingVotacao->consultaVotos($candidatoEscolhido)) {
                                for ($i = 0; $i < mysqli_num_rows($resultado); $i++) {
                                    $linha = mysqli_fetch_array($resultado);
                                    $qtdVotosAntigos = $linha['votos'];
                                }

                                $novaQtdVotos = $qtdVotosAntigos + 1;

                                if ($resultadoAtualizacao = $rankingVotacao->atualizarQtdVotos($candidatoEscolhido, $novaQtdVotos)) {

                                    if ($resultadoCPF = $rankingVotacao->cpf(round($cpfReformulado))) {
                                        echo '<div class = "alert alert-success" role = "alert">
                                        <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                                        Voto computado com sucesso!
                                    </div>';
                                        session_destroy();
                                        $gatilho = 1;
                                    } else {
                                        echo '<div class = "alert alert-danger" role = "alert">
                                        <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                                        Falha ao computar voto, verifique as informações digitadas!
                                    </div>';
                                    }
                                } else {
                                    echo '<div class = "alert alert-danger" role = "alert">
                                        <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                                        Falha ao computar voto, verifique as informações digitadas!
                                    </div>';
                                }
                            } else {
                                if ($resultadoInsercao = $rankingVotacao->inserir($candidatoEscolhido, 1, $nomeCandidato)) {

                                    if ($resultadoCPF = $rankingVotacao->cpf(round($cpfReformulado))) {
                                        echo '<div class = "alert alert-success" role = "alert">
                                        <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                                        Voto computado com sucesso!
                                        
                                    </div>';
                                        session_destroy();
                                        $gatilho = 1;
                                    } else {
                                        echo '<div class = "alert alert-danger" role = "alert">
                                        <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                                        Falha ao computar voto, verifique as informações digitadas!
                                    </div>';
                                    }
                                } else {
                                    echo '<div class = "alert alert-danger" role = "alert">
                                        <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                                        Falha ao computar voto, verifique as informações digitadas!
                                  </div>';
                                }
                            }
                        } else {
                            echo '<div class = "alert alert-danger" role = "alert">
                            <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                            O seu CPF já consta em nossa votação!
                          </div>';
                            $gatilho = 1;
                        }
                    } else {
                        echo '<div class = "alert alert-danger" role = "alert">
                            <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                            O CPF digitado é inválido!
                          </div>';
                        $gatilho = 0;
                    }
                } else {
                    echo '<div class = "alert alert-danger" role = "alert">
                            <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                            O CPF digitado é inválido!
                          </div>';
                    $gatilho = 0;
                }
            }

            if ($gatilho == 1) {

                $qtdTotal = $rankingVotacao->contaTodosVotos();
                if ($qtdTotal == false) {
                    echo "
                        <div class = 'alert alert-danger' role = 'alert'><span class = 'glyphicon glyphicon-exclamation-sign' aria-hidden = 'true'></span> Ainda não foram computados votos!</div>
                    ";
                    return;
                } else {

                    for ($i = 0; $i < mysqli_num_rows($qtdTotal); $i++) {
                        $linha = mysqli_fetch_array($qtdTotal);

                        $qtdTotalVotosTabela = $linha['SUM(votos)'];
                    }
                    //echo $qtdTotalVotosTabela;


                    if ($consultaAgripino = $rankingVotacao->consultaVotacaoPorcentagem(15)) {


                        for ($i = 0; $i < mysqli_num_rows($consultaAgripino); $i++) {
                            $linha = mysqli_fetch_array($consultaAgripino);

                            $votosAgripino = $linha['votos'];
                            // echo $votosAgripino;
                        }
                    }

                    if ($consultaDaniel = $rankingVotacao->consultaVotacaoPorcentagem(77)) {


                        for ($i = 0; $i < mysqli_num_rows($consultaDaniel); $i++) {
                            $linha = mysqli_fetch_array($consultaDaniel);

                            $votosDaniel = $linha['votos'];
                            // echo $votosAgripino;
                        }
                    }


                    if ($consultaDodo = $rankingVotacao->consultaVotacaoPorcentagem(70)) {


                        for ($i = 0; $i < mysqli_num_rows($consultaDodo); $i++) {
                            $linha = mysqli_fetch_array($consultaDodo);

                            $votosDodo = $linha['votos'];
                            // echo $votosAgripino;
                        }
                    }
                    if ($consultaFabio = $rankingVotacao->consultaVotacaoPorcentagem(23)) {


                        for ($i = 0; $i < mysqli_num_rows($consultaFabio); $i++) {
                            $linha = mysqli_fetch_array($consultaFabio);

                            $votosFabio = $linha['votos'];
                            // echo $votosAgripino;
                        }
                    }


                    if ($consultaJose = $rankingVotacao->consultaVotacaoPorcentagem(10)) {


                        for ($i = 0; $i < mysqli_num_rows($consultaJose); $i++) {
                            $linha = mysqli_fetch_array($consultaJose);

                            $votosJose = $linha['votos'];
                            // echo $votosAgripino;
                        }
                    }
                    if ($consultaNelson = $rankingVotacao->consultaVotacaoPorcentagem(14)) {


                        for ($i = 0; $i < mysqli_num_rows($consultaNelson); $i++) {
                            $linha = mysqli_fetch_array($consultaNelson);

                            $votosNelson = $linha['votos'];
                            // echo $votosAgripino;
                        }
                    }

                    if ($consultaDonizete = $rankingVotacao->consultaVotacaoPorcentagem(50)) {


                        for ($i = 0; $i < mysqli_num_rows($consultaDonizete); $i++) {
                            $linha = mysqli_fetch_array($consultaDonizete);

                            $votosDonizete = $linha['votos'];
                            // echo $votosAgripino;
                        }
                    }

                    if ($consultaRegina = $rankingVotacao->consultaVotacaoPorcentagem(13)) {


                        for ($i = 0; $i < mysqli_num_rows($consultaRegina); $i++) {
                            $linha = mysqli_fetch_array($consultaRegina);

                            $votosRegina = $linha['votos'];
                            // echo $votosAgripino;
                        }
                    }
                    echo ' <hr><div class="col-lg-12">
                    <h2 class="page-header">
                        Resultado da pesquisa
                    </h2></div>';
                    if ($consultaMaior = $rankingVotacao->consultaMaior()) {

                        $contador = 0;
                        for ($i = 0; $i < mysqli_num_rows($consultaMaior); $i++) {
                            $linha = mysqli_fetch_array($consultaMaior);

                            $maior[$i] = $linha['numero'];
                            $nome[$i] = $linha['nome'];
                            $votos[$i] = $linha['votos'];
                            $contador = $contador + 1;
                        }

                        for ($i = 0; $i < $contador; $i++) {

                            // echo $votosAgripino;

                            echo $nome[$i] . ' ( Intenções de votos: ' . number_format(($votos[$i] * 100) / $qtdTotalVotosTabela, 2, ",", "") . ' %) : <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="' . ($votos[$i] * 100) / $qtdTotalVotosTabela . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . ($votos[$i] * 100) / $qtdTotalVotosTabela . '%">
                              <span class="sr-only">40% Complete (success)</span>
                            </div>
                          </div>';
                        }
                        echo '<p> Os candidatos não listados, ainda não receberam votos!<p>';

                        //echo '<div class="panel-footer"><h2> A quantidade total de votos da pesquisa é: ' . $qtdTotalVotosTabela . ' </h2></div>';
                    }
                }
            } else {
                
            }
            ?>
        </div>
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/wow.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/creative.js"></script>
    </body>
</html>
