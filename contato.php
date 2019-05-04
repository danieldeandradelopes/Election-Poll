<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-80653855-1', 'auto');
            ga('send', 'pageview');

        </script>










        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contato
                        <small>Contact</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Página Inicial</a>
                        </li>
                        <li class="active">Contato</li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Content Row -->
            <div class="row">
                <!-- Map Column -->
                <div class="col-md-8">
                    <!-- Embedded Google Map -->
                    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1847.8293659671608!2d-51.17408766565747!3d-22.138983767280177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94946d6721f0575b%3A0xd3998f686759e18f!2sR.+Jos%C3%A9+Vasconcelos%2C+66%2C+Martin%C3%B3polis+-+SP%2C+19500-000!5e0!3m2!1spt-BR!2sbr!4v1470970117546"></iframe>

                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <h3>Contato</h3>
                    <p>
                        Rua José Vasconcelos <br>Martinópolis, SP<br>
                    </p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Phone">Evellyn</abbr>: (18)99622-5304                        
                    <p><i class="fa fa-envelope-o"></i> 
                        <abbr title="Email">E-mail</abbr>: <a href="mailto:evellynzambon@hotmail.com">evellynzambon@hotmail.com</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">Horário de Atendimento</abbr>: Seg a Sex 9:00 às 18:00</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="https://www.facebook.com/zamboncerimonial/?pnref=lhc" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <!-- <li>
                             <a href="#"><i class="fa fa-linkedin-square fa-2x" target="_blank"></i></a>
                         </li>
                         <li>
                             <a href="#"><i class="fa fa-twitter-square fa-2x" target="_blank"></i></a>
                         </li>
                         <li>
                             <a href="#"><i class="fa fa-google-plus-square fa-2x" target="_blank"></i></a>
                         </li>-->
                    </ul>
                </div>
            </div>
            <!-- /.row -->

            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
                <div class="col-md-8">
                    <h3>Envie-nos uma mensagem</h3>                    
                    <form action="index.php?op=' .<?php echo base64_encode("contato") ?> . '" method="POST">	                    
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Nome Completo:</label>
                                <input type="text" class="form-control" name="nome" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Telefone:</label>
                                <input type="tel" class="form-control" id="phone" name="telefone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Data Evento:</label>
                                <input type="date" class="form-control" id="data" name="dataEvento" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Número de convidados:</label>
                                <input type="number" min="0" class="form-control" name="qtdConvidados" id="numeroConvidados" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Local da cerimônia:</label>
                                <input type="text" class="form-control" id="localCerimonia" name="localCerimonia" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Local da recepção:</label>
                                <input type="text" class="form-control" id="localRecepcao" name="localRecepcao" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Como nos conheceu?:</label>
                                <input type="text" class="form-control" id="comoNosConheceu"  name="comoNosConheceu" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Mensagem:</label>
                                <textarea rows="10" cols="100" class="form-control" name="mensagem" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>


                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary">Enviar Menssagen</button>
                    </form>
                </div>



                <?php
                if ($_POST) {

                    include './classes/Conexao.class.php';
                    include './classes/entidades/Contato.class.php';
                    include './classes/DAO/ContatoDAO.class.php';


                    $contato = new contato();
                    $contatoDAO = new contatoDAO();

                    date_default_timezone_set('America/Sao_Paulo');
                    $date = date('Y-m-d H:i:s');

                    $nome = $_POST['nome'];
                    $telefone = $_POST['telefone'];
                    $email = $_POST['email'];
                    $dataEvento = $_POST['dataEvento'];
                    $qtdConvidados = $_POST['qtdConvidados'];
                    $localCerimonia = $_POST['localCerimonia'];
                    $localRecepcao = $_POST['localRecepcao'];
                    $comoNosConheceu = $_POST['comoNosConheceu'];
                    $mensagem = $_POST['mensagem'];








                    $contato->setConvidados($qtdConvidados);
                    $contato->setDataContato($date);
                    $contato->setDataEvento($dataEvento);
                    $contato->setEmail($email);
                    $contato->setLocalCerimonia($localCerimonia);
                    $contato->setLocalRecepcao($localRecepcao);
                    $contato->setMensagem($mensagem);
                    $contato->setNome($nome);
                    $contato->setNosConheceu($comoNosConheceu);
                    $contato->setTelefone($telefone);
                    $contato->setStatus('pendente');




                    if ($contatoDAO->inserirEventos($contato)) {
                        echo '<div class="row">
                    
                    <div class="col-lg-8">
                        <div class = "alert alert-success" role = "alert">
                        <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                        Mensagem Enviada com Sucesso!
                        </div>
                    </div>
              
              </div>';
                    } else {
                        echo '<div class = "alert alert-danger" role = "alert">
              <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
              Falha ao enviar mensagem!
              </div>';
                    }
                }
                ?>
            </div>
            <!-- /.row -->

            <hr>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Contact Form JavaScript -->
        <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
    </body>
</html>

