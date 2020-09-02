
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
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="../js/script_lang.js" async></script>
        <link rel="stylesheet" href="../css/bootstrap-4.1.3-dist/css/bootstrap.min.css">   
        <link rel="icon" href="../img/icon/icon.webp">
    <title>Budget</title>
</head>

<body>

    <!-- NAVBAR AREA -->
    <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="index.html">
                        <img src="../img/icon/marca.webp" height="85px" width="185px" id="img1" class="img-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado"
                        aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="conteudoNavbarSuportado">
                        <ul class="navbar-nav">
                                <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" onclick="funcaoClick()">About Us</a>
                                        <div class="sub-item" id="drop">
                                                <a class="sub-itens" href="history.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                         Our story</a>
                                                <a class="sub-itens" href="corporativo.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                        Corporate
                                                </a>
                                                <a class="sub-itens" href="politica.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                        Management Policy</a>
                                                <a class="sub-itens" href="compliance.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                                Compliance,
                                                                Ethics and Transparency</a> 
                                                        <a class="sub-itens" href="seguranca.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                        Security
                                                </a> 
                                                </div>
                
                                </li>
                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="about.html"
                                                id="navbarDropdownMenuLink">Services </a>
                                        <div class="sub-item">
                                                <a class="sub-itens" href="eletrica.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;"> Industrial Electrical</a>
                                                <a class="sub-itens" href="mecanica.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Mechanics</a>
                                                <a class="sub-itens" href="instrumentacao.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Instrumentation</a>
                                                <a class="sub-itens" href="civil.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Civil Engineering</a>
                                                <a class="sub-itens" href="caldeiraria.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Boilermaking</a>
                                                <a class="sub-itens" href="valvulas.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Valves</a>
                                                <a class="sub-itens" href="facilites.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Facilities</a>
                                        </div>
                                </li>
                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" onclick="funcaoClick2()" >Portfolio</a>
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
                                                <a class="sub-itens" href="recuperacao.html"
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">Caldeiraria de recuperação</a>  
                                        </div>
                
                                </li>
                              
                                <li class="nav-item">
                                        <a class="nav-link" href="contato.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="trabalhe.php">Work with us</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="orcamento.php">Budget</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="ouvidoria.html">Line of Ethics</a>
                                </li>
                                <div class="icons-nav">
                
                                        <li class="nav-item">
                                                <a class="nav-link">
                                                        <img src="../img/icon/in2.png" height="25px" width="25px"id='in1'>
                                                </a>
                                        </li>
                
                                        <li class="nav-item">
                                                <a class="nav-link" href="login.php">
                                                        <img src="../img/icon/login2.png" height="25px" width="25px"id='login1'>
                                                </a>
                                        </li>
                
                                </div>
                        </ul>
                </div>
</nav>
    <!-- END NAVBAR AREA -->

    <div class="title-page">
        <picture class="image-title">
                <img src="../img/orcamento.png" class="img-fluid-serv" alt="...">
        </picture>
        <div class="container">
                <h1 class="page-title">BUDGET</h1>

        </div>
    </div>
    <section id="contact2">
        <section id="contact">

            <div class="contato-form orcamento-form">


                <div class="page-contact">

                    <div class="container-contact">
                        <div class="border-contact">

                            <h3 class="title-contact">Make your Budget</h3>
                        </div>

                    </div>
                </div>

                <form id="contato-form" action="orcamento.php" method="POST">
                    <div class="contato-title">
                        <input type="text" name="name" class="form-control form-controle name" id="input-2"
                            placeholder="Name or Company*" required>
                    </div>
                    <div class="contato-title">
                        <input type="tel" name="telefone" id="telefone" pattern="^[1-9]{2}[2-9][0-9]{7,8}$" maxlength="15" class="form-control form-controle email"
                            id="input-3" placeholder="Telephone*" required>
                    </div>
                    <div class="contato-title">
                        <input type="email" name="email" class="form-control form-controle email" id="input-3"
                            placeholder="E-mail*" required>
                    </div>
                    <div class="contato-title">
                        <select name="servico_desejado" class="form-control form-controle" id="input-1" required>
                            <option value="">Desired Service*</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                        </select>
                    </div>
                    <div class="contato-title">
                        <input type="text" name="local_servico" class="form-control form-controle about" id="input-4"
                            placeholder="Service Location*" required>
                        <br>
                    </div>

                    <div class="contato-title">
                        <input type="text" name="prazo_execucao" class="form-control form-controle about" id="input-4"
                            placeholder="Service Execution Deadline*" required>
                        <br>
                    </div>
                    <div class="contato-title d-flex flex-column pl-2">
                        <label for="#documento">Document</label>
                        <input type="file" name="documento" id="documento" value='1' required>
                    </div>
                    <div class="contato-title">
                        <textarea name="descricao_orcamento" class="form-control form-controle-text description" id="input-5"
                            rows="4" placeholder="Describe your service..." required></textarea>
                        <br>
                    </div>




                    <div class="contato-title">
                        <button type="submit" class="form-controle submit" name="submit" value="Submit">SUBMIT
                             BUDGET</button>
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
                                        <a href="history.html" class="a-footer">Our story</a>
                                </li>
                                <br>
                                <li>
                                        <a href="corporativo.html" class="a-footer">Corporate</a>
                                </li>
                                <br>
                                <li>
                                        <a href="compliance.html" class="a-footer">Compliance, Ethics and
                                                Transparency</a>
                                </li>
                                <br>
                                <li>
                                        <a href="politica.html" class="a-footer">Management Policy</a>
                                </li>
                                <br>
                                <li>
                                    <a href="seguranca.html" class="a-footer">Security</a>
                                </li>
                        </ul>
                        <br>
                </div>
                <div class="col-md-2 mt-md-3">

                        <h5 class="text-uppercase"><a href="about.html" class="a-footer">Services</a></h5>
                        <br>
                        <ul class="list-unstyled">
                                <li>
                                        <a href="caldeiraria.html" class="a-footer">Boilermaking</a>
                                </li>
                                <br>
                                <li>
                                        <a href="civil.html" class="a-footer">Civil Engineering</a>
                                </li>
                                <br>
                                <li>
                                        <a href="eletrica.html" class="a-footer">Industrial Electrical</a>
                                </li>
                                <br>
                                <li>
                                        <a href="facilites.html" class="a-footer">Facilities</a>
                                </li>
                                <br>
                                <li>
                                        <a href="instrumentacao.html" class="a-footer">Instrumentation</a>
                                </li>
                                <br>
                                <li>
                                        <a href="mecanica.html" class="a-footer">Mechanics</a>
                                </li>
                                <br>
                                <li>
                                        <a href="valvulas.html" class="a-footer">Valves</a>
                                </li>
                        </ul>
                        <br>


                         <!-- BANDEIRAS E CERTIFICADO ISO -->
                        
                        <a href="../orcamento.php.html" class="lang">
                                
                                <img src="../img/icon/br.webp"
                                style="position: fixed;max-width: 33px;bottom: 20px;left: 20px; " >
                        </a>
                        <a href="orcamento.php" class="lang">
                                
                                <img src="../img/icon/uk.webp"
                                style="position: fixed;max-width: 33px;height: 21px;bottom: 20px;left: 68px; filter:none ">
                        </a>
                        <a href="../es/orcamento.php" class="lang">
                                
                                <img src="../img/icon/es.webp"
                                style="position: fixed;max-width: 33px;height: 21px; bottom: 20px;left: 116px; ">
                        </a>
                                
                        <!--  -->
                </div>

                <div class="col-md-3 mt-md-3">
                        <h5><a class="a-footer" href="contato.php">Contact</a></h5>
                        <br>
                        <h5><a class="a-footer" href="orcamento.php">Budget</a></h5>
                        <br>
                        <h5><a class="a-footer" href="trabalhe.php">Work with us</a></h5>
                        <br>
                        <h5><a class="a-footer" href="ouvidoria.html">Line of Ethics</a></h5>
                        <br>
                </div>
                <div class="col-lg mt-md-3 ml-3">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9982939332035!2d-38.5153704845872!3d-12.971960663332494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71604e5ceeb064b%3A0x7ddb6ce56b96ddc6!2sCondom%C3%ADnio%20Edif%C3%ADcio%20Belo%20Horizonte!5e0!3m2!1spt-BR!2sbr!4v1596405226309!5m2!1spt-BR!2sbr" 
                        width="100%" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                        <p class="text-justify">Rua Miguel Calmon, 37, Edf. Belo Horizonte, Sala 607/609, Comércio, Salvador/BA, 40.015-010

                        </p>
                        <p class="text-justify"> Tel: 55 71 3021-0693 / 3130-4995</p>
                </div>
        </div>

        <br>
</footer>

        <div class="footer-copyright">
                <p class="text-copyright " style="  color: #222;">
                        © 2020 Copyright - Praxis Junior Company

                </p>
                <a href="http://www.praxisjr.com.br" alt="http://www.praxisjr.com.br">

                        <img src="../img/icon/praxis.png" style="position: relative;max-width: 20px; bottom: .2rem;">
                </a>
        </div>

      


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
       

</body>

</html>