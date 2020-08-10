
<?php

if(isset($_POST['nome'],$_POST['telefone'],$_POST['email'],$_POST['servico_desejado'],$_POST['local_servico'], $_POST['prazo_execucao'],$_POST['descricao_orcamento'], $_FILES['documento'])){                
        $nome = $_POST['nome']; 
        $telefone = $_POST['telefone']; 
        $email_from = $_POST['email']; 
        $servico_desejado = $_POST['servico_desejado'];
        $local_servico = $_POST['local_servico'];
        $prazo_execucao = $_POST['prazo_execucao'];
        $descricao_orcamento = $_POST['descricao_orcamento'];
        $documento = $_FILES['documento'];

        $destinatario = "jaymeoficial123@gmail.com";

        $msg = "
        <style type='text/css'>
        body {
        margin:0px;
        font-family:Verdane;
        font-size:12px;
        color: #666666;
        }
        a{
        color: #666666;
        text-decoration: none;
        }
        a:hover {
        color: #FF0000;
        text-decoration: none;
        }
        </style>
        <html>
                <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
                <tr>
                <td>
                <tr>
                        <td width='500'>Nome:$nome</td>
                        </tr>
                        <tr>
                            <td width='320'>Telefone: <b>$telefone</b></td>
                        </tr>
                        <tr>
                            <td width='320'>E-mail:<b>$email_from</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Serviço Desejado: <b>$servico_desejado</b></td>
                        </tr>
                        <tr>
                            <td width='320'>Local do Serviço: $local_servico</td>
                        </tr>
                        <tr>
                            <td width='320'>Prazo de Execução do Serviço: $prazo_execucao</td>
                        </tr>
                        <tr>
                            <td width='320'>Descrição do Serviço: $descricao_orcamento</td>
                        </tr>
                </td>
                </tr>  
                
                </table>
        </html>
        
        ";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.$nome.' <'.$email.'>';

        //Fazendo anexo do documento
        $fp = fopen($documento["tmp_name"], "rb"); // abre o arquivo enviado
        $anexo = fread($fp, filesize($documento["tmp_name"])); // calcula o tamanho
        $anexo = base64_encode($anexo); // codifica o anexo em base 64
        fclose($fp); // fecha o arquivo

        $msg .= "Content-Type: ".$documento["type"]."; name=".$documento["name"]." \n";
        $msg .= "Content-Transfer-Encoding: base64 \n";
        $msg .= "Content-Disposition: attachment; filename=".$documento['name']." \r\n";
        $msg .= "$anexo \n";


        $enviaremail = mail($destinatario, "Solicitação de Orçamento", $msg, $headers);
        if($enviaremail){
                echo("<script>alert('E-mail enviado com sucesso!')</script>");
        } else {
                echo("<script>alert('ERROR!!')</script>");
                echo "";
        }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="(max-width: 800px)" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="icon" href="img/icon/icon.png">
    <title>Orçamento</title>
</head>

<body>

    <!-- NAVBAR AREA -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="index.html">
            <img src="img/icon/marca.png" height="85px" width="185px" id="img1"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="conteudoNavbarSuportado">
            <ul class="navbar-nav">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="drop" onclick="funcaoClick()">Quem Somos</a>
                        <div class="sub-item" id="drop">
                                                <a class="sub-itens" href="history.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; 
                                                        border-bottom-width: 1px;">
                                                        Nossa
                                                        História
                                                </a>
                                                <a class="sub-itens" href="corporativo.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ;
                                                         border-bottom-width: 1px;">
                                                        Corporativo
                                                </a>
                                                <a class="sub-itens" href="politica.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ;
                                                         border-bottom-width: 1px;">
                                                        Política
                                                        de Gestão
                                                </a>
                                                <a class="sub-itens" href="compliance.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ;
                                                         border-bottom-width: 1px;">
                                                        Compliance,
                                                        Ética e Transparência
                                                </a> 
                                                        <a class="sub-itens" href="seguranca.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ;
                                                         border-bottom-width: 1px;">
                                                        Segurança
                                                </a> 
                        </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="about.html"
                                                id="navbarDropdownMenuLink">Serviços </a>
                                                <div class="sub-item">
                                                <a class="sub-itens" href="eletrica.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ;
                                                         border-bottom-width: 1px;">
                                                         Elétrica
                                                        Industrial
                                                </a>

                                                <a class="sub-itens" href="mecanica.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ;
                                                         border-bottom-width: 1px;">
                                                         Mecânica
                                                        </a>

                                                <a class="sub-itens" href="instrumentacao.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ;
                                                         border-bottom-width: 1px;">
                                                         Instrumentação
                                                        </a>

                                                <a class="sub-itens" href="civil.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; 
                                                        border-bottom-width: 1px;">
                                                        Civil
                                                </a>

                                                <a class="sub-itens" href="caldeiraria.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ;
                                                         border-bottom-width: 1px;">
                                                         Caldeiraria
                                                        </a>

                                                <a class="sub-itens" href="valvulas.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; 
                                                        border-bottom-width: 1px;">
                                                        Válvulas
                                                </a>

                                                <a class="sub-itens" href="facilites.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; 
                                                        border-bottom-width: 1px;">
                                                        Facilites
                                                </a>
                                        </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" onclick="funcaoClick2()">
                                                Portfólio</a>

                        <div class="sub-item" id="drop2">
                                <a class="sub-itens" href="cenpes.html"
                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">Cenpes</a>
                                <a class="sub-itens" href="sergipe.html"
                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">Sergipe</a>
                                <a class="sub-itens" href="roque.html"
                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">São
                                        Roque</a>
                                <a class="sub-itens" href="knauf.html"
                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">Knauf</a>
                                <a class="sub-itens" href="betumat.html"
                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">Betumat</a>
                                <a class="sub-itens" href="jpa.html"
                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">Brasilgás - Ultragaz</a>
                                <a class="sub-itens" href="oxiteno.html"
                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">Oxiteno</a>
                        </div>

                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trabalhe.php">Trabalhe Conosco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orcamento.php">Orçamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ouvidoria.html">Ouvidoria</a>
                </li>
                <div class="icons-nav">

                    <li class="nav-item">
                        <a class="nav-link"><img src="img/icon/in2.png" height="25px" width="25px" id='in1'></a>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><img src="img/icon/login2.png" height="25px" width="25px"
                                id='login1'></a>
                    </li>

                </div>
            </ul>
        </div>
    </nav>
    <!-- END NAVBAR AREA -->

    <div class="title-page">
        <picture class="image-title">
                <img src="img/orcamento.png" class="img-fluid-serv" alt="...">
        </picture>
        <div class="container">
                <h1 class="page-title">ORÇAMENTO</h1>

        </div>
    </div>
    <section id="contact2">
        <section id="contact">

            <div class="contato-form orcamento-form">


                <div class="page-contact">

                    <div class="container-contact">
                        <div class="border-contact">

                            <h3 class="title-contact">Faça seu Orçamento</h3>
                        </div>

                    </div>
                </div>

                <form id="contato-form" action="orcamento.php" method="POST">
                    <div class="contato-title">
                        <input type="text" name="name" class="form-control form-controle name" id="input-2"
                            placeholder="Nome ou Empresa*" required>
                    </div>
                    <div class="contato-title">
                        <input type="tel" name="telefone" id="telefone" pattern="^[1-9]{2}[2-9][0-9]{7,8}$" maxlength="15" class="form-control form-controle email"
                            id="input-3" placeholder="Telefone*" required>
                    </div>
                    <div class="contato-title">
                        <input type="email" name="email" class="form-control form-controle email" id="input-3"
                            placeholder="E-mail*" required>
                    </div>
                    <div class="contato-title">
                        <select name="servico_desejado" class="form-control form-controle" id="input-1" required>
                            <option value="">Serviço Desejado*</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                        </select>
                    </div>
                    <div class="contato-title">
                        <input type="text" name="local_servico" class="form-control form-controle about" id="input-4"
                            placeholder="Local do Serviço*" required>
                        <br>
                    </div>

                    <div class="contato-title">
                        <input type="text" name="prazo_execucao" class="form-control form-controle about" id="input-4"
                            placeholder="Prazo de Execução do Serviço*" required>
                        <br>
                    </div>
                    <div class="ouvidoria-title d-flex flex-column pl-2">
                        <label for="#documento">Documento</label>
                        <input type="file" name="documento" id="documento" value='1' required>
                    </div>
                    <div class="contato-title">
                        <textarea name="descricao_orcamento" class="form-control form-controle-text description" id="input-5"
                            rows="4" placeholder="Descreva o seu serviço..." required></textarea>
                        <br>
                    </div>




                    <div class="contato-title">
                        <button type="submit" class="form-controle submit" name="submit" value="Submit">ENVIAR
                            ORÇAMENTO</button>
                    </div>


                </form>

            </div>

        </section>
     

        <footer class="pt-4 text-center">
                <div class="row">

                        <div class="col-md-3 mt-md-3 mt-3">
                                <h5 class="text-uppercase">LM ENGENHARIA</h5>
                                <br>
                                <ul class="list-unstyled">
                                        <li>
                                                <a href="history.html" class="a-footer">Nossa História</a>
                                        </li>
                                        <br>
                                        <li>
                                                <a href="corporativo.html" class="a-footer">Corporativo</a>
                                        </li>
                                        <br>
                                        <li>
                                                <a href="compliance.html" class="a-footer">Compliance, Ética e
                                                        Transparência</a>
                                        </li>
                                        <br>
                                        <li>
                                                <a href="politica.html" class="a-footer">Política de Gestão</a>
                                        </li>
                                        <br>
                                        <li>
                                            <a href="seguranca.html" class="a-footer">Segurança</a>
                                        </li>
                                </ul>
                                <br>
                        </div>
                        <div class="col-md-2 mt-md-3">

                                <h5 class="text-uppercase"><a href="about.html" class="a-footer">Serviços</a></h5>
                                <br>
                                <ul class="list-unstyled">
                                        <li>
                                                <a href="caldeiraria.html" class="a-footer">Caldeiraria</a>
                                        </li>
                                        <br>
                                        <li>
                                                <a href="civil.html" class="a-footer">Civil</a>
                                        </li>
                                        <br>
                                        <li>
                                                <a href="eletrica.html" class="a-footer">Elétrica Industrial</a>
                                        </li>
                                        <br>
                                        <li>
                                                <a href="facilites.html" class="a-footer">Facilites</a>
                                        </li>
                                        <br>
                                        <li>
                                                <a href="instrumentacao.html" class="a-footer">Instrumentação</a>
                                        </li>
                                        <br>
                                        <li>
                                                <a href="mecanica.html" class="a-footer">Mecânica</a>
                                        </li>
                                        <br>
                                        <li>
                                                <a href="valvulas.html" class="a-footer">Válvulas</a>
                                        </li>
                                </ul>
                                <br>


                                <a href="en/orcamento.php">

                                        <img src="img/icon/uk.png"
                                                style="position: fixed;max-width: 45px;bottom: 20px;left: 20px;">
                                </a>
                        </div>

                        <div class="col-md-3 mt-md-3">
                                <h5><a class="a-footer" href="contato.php">Contato</a></h5>
                                <br>
                                <h5><a class="a-footer" href="orcamento.php">Orçamento</a></h5>
                                <br>
                                <h5><a class="a-footer" href="trabalhe.php">Trabalhe Conosco</a></h5>
                                <br>
                                <h5><a class="a-footer" href="ouvidoria.html">Ouvidoria</a></h5>
                                <br>
                        </div>
                        <div class="col-lg mt-md-3 ml-3">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9982939332035!2d-38.5153704845872!3d-12.971960663332494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71604e5ceeb064b%3A0x7ddb6ce56b96ddc6!2sCondom%C3%ADnio%20Edif%C3%ADcio%20Belo%20Horizonte!5e0!3m2!1spt-BR!2sbr!4v1596405226309!5m2!1spt-BR!2sbr" 
                                width="100%" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                                <p class="text-justify">Rua Miguel Calmon, 37, Edf. Belo Horizonte, Salas 607/609, Comércio, Salvador/BA, 40.015-010

                                </p>
                                <p class="text-justify"> Tel: 55 71 3021-0693 / 3130-4995</p>
                        </div>
                </div>

                <br>
        </footer>
        <div class="footer-copyright">
                <p class="text-copyright " style="  color: #222;">
                        © 2020 Copyright - Praxis Empresa Júnior

                </p>
                <a href="http://www.praxisjr.com.br" alt="http://www.praxisjr.com.br">

                        <img src="img/icon/praxis.png" style="position: relative;max-width: 20px; bottom: .2rem;">
                </a>
        </div>

        <!-- BOOTSTRAP JS FILE -->
        <!-- SCRIPT JQUERY PARA TROCAR DE COR NAVBAR  -->

        <script>

                var mq = window.matchMedia('(max-width: 780px)');
                var logo = document.getElementById('img1');
                var icon1 = document.getElementById('login1');
                var icon2 = document.getElementById('in1');

                if (mq.matches) {
                        $(logo).attr('src', 'img/icon/marca2.png');
                        $('.navbar-expand-lg').css("background-color", "#ffff");

                        $(icon1).attr('src', 'img/icon/login.png');
                        $(icon2).attr('src', 'img/icon/in.png');
                }
                else {
                        $(logo).attr('src', 'img/icon/marca.png');
                        $('.navbar-expand-lg').css("background-color", "transparent");
                        $(icon1).attr('src', 'img/icon/login2.png');
                        $(icon2).attr('src', 'img/icon/in2.png');
                }

        </script>

        <script>
                var mq = window.matchMedia('(max-width: 780px)');
                $(window).scroll(function () {

                        if (mq.matches) {
                                $('.navbar-expand-lg').css("background-color", "#ffff");
                        }

                        else if ($(this).scrollTop() > 1) {
                                $('.navbar-expand-lg').css("background-color", "#ffff");
                                $('.navbar').css("padding", "0rem 1rem 0rem 1rem");
                               


                        } else {
                                $('.navbar-expand-lg').css("background-color", "transparent");
                                $('.navbar').css("padding", ".5rem 1rem .5rem 1rem");


                        }
                });
        </script>
        <!-- SCRIPT JQUERY PARA TROCAR DE IMAGEM  -->
        <script>
                var mq = window.matchMedia('(max-width: 780px)');
                var troca = document.getElementById('img1');
                $(window).scroll(function () {

                        if (mq.matches) {
                                $(troca).attr('src', 'img/icon/marca2.png')
                        }

                        else if ($(document).scrollTop() > 1) {
                                $(troca).attr('src', 'img/icon/marca2.png');
                        } else {
                                $(troca).attr('src', 'img/icon/marca.png');
                        }

                });
        </script>

        <script>
                var mq = window.matchMedia('(max-width: 780px)');
                var troca3 = document.getElementById('login1');
                $(window).scroll(function () {
                        if (mq.matches) {
                                $(troca3).attr('src', 'img/icon/login.png');
                        }
                        else if ($(document).scrollTop() > 1) {
                                $(troca3).attr('src', 'img/icon/login.png');
                        } else {
                                $(troca3).attr('src', 'img/icon/login2.png');
                        }
                });
        </script>

        <script>
                var mq = window.matchMedia('(max-width: 780px)');
                var troca4 = document.getElementById('in1');
                $(window).scroll(function () {

                        if (mq.matches) {
                                $(troca4).attr('src', 'img/icon/in.png');
                        }

                        else if ($(document).scrollTop() > 1) {
                                $(troca4).attr('src', 'img/icon/in.png');
                        } else {
                                $(troca4).attr('src', 'img/icon/in2.png');
                        }
                });
        </script>

        <script>


                $(window).scroll(function () {

                        if ($(this).scrollTop() > 1) {
                                $('.nav-item .nav-link').css("color", "#1e227b");

                        } else {
                                $('.nav-item .nav-link').css("color", "#ffffff");

                        }
                });
        </script>

        <script>

        function funcaoClick() {
        var mq = window.matchMedia('(max-width: 780px)');
        var x = document.getElementById("drop");
          if(mq.matches && x.className.indexOf("show") == -1){
 
                          x.className += "show";
                }
           else {
            x.className = x.className.replace("show", "");
       
          }
        }
        </script>

        <script>
        function funcaoClick2() {
        var mq = window.matchMedia('(max-width: 780px)');
        var y = document.getElementById("drop2")
          if(mq.matches && y.className.indexOf("show2") == -1){
                 
                y.className += "show2";
                }
           else {
            y.className = y.className.replace("show2", "");
          }
        }
        </script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="css/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

</body>

</html>