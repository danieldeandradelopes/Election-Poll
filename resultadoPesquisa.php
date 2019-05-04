<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <title>Resultado Parcial Votação</title>

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
        <title></title>
    </head>
    <body> <div class="container">
            <h3 class="page-header">
                <small>Essa pesquisa não é uma pesquisa oficial, também não é registrada junto ao TRE.</small><br><br>                        
            </h3>

            <?php
            include './classes/Conexao.class.php';
            include './classes/DAO/RankingVotacao.class.php';
            $rankingVotacao = new RankingVotacaoDAO();
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
                        Resultado parcial da pesquisa
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
                }
            }
            ?>
            <div class="col-lg-4">
                <a href="index.php"><input type="submit" value="Voltar para votação!" class="btn btn-link"></a>
            </div>
        </div>



    </body>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    <div class="row">


    </div>
</body>
</html>

