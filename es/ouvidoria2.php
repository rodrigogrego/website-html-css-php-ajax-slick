<?php

if(isset($_POST['dados_denuncia'],$_POST['natureza_denuncia'],$_POST['localidade_denuncia'],$_POST['descricao_denuncia'],$FILES['documento'])){                
        $dados_denuncia = $_POST['dados_denuncia']; 
        $natureza_denuncia = $_POST['natureza_denuncia']; 
        $localidade_denuncia = $_POST['localidade_denuncia']; 
        $descricao_denuncia = $_POST['descricao_denuncia'];
        $documento = $_POST['documento'];
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
                        <td width='500'>Dados da Denúncia: $dados_denuncia</td>
                        </tr>
                        <tr>
                        <td width='320'>Natureza da Denúncia: <b>$natureza_denuncia</b></td>
        </tr>
        <tr>
                        <td width='320'>Localidade da Denúncia: <b>$localidade_denuncia</b></td>
                        </tr>
        <tr>
                        <td width='320'>Descrição da Denúnicia: $descricao_denuncia</td>
                        </tr>
                </td>
                </tr>  
                
                </table>
        </html>
        
        ";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        //Fazendo anexo do documento
        $fp = fopen($documento["tmp_name"], "rb"); // abre o arquivo enviado
        $anexo = fread($fp, filesize($documento["tmp_name"])); // calcula o tamanho
        $anexo = base64_encode($anexo); // codifica o anexo em base 64
        fclose($fp); // fecha o arquivo

        $msg .= "Content-Type: ".$documento["type"]."; name=".$documento['name']." \n";
        $msg .= "Content-Transfer-Encoding: base64 \n";
        $msg .= "Content-Disposition: attachment; filename=".$documento['name']." \r\n";
        $msg .= "$anexo \n";


        $enviaremail = mail($destinatario, "[Denúncia] $natureza_denuncia.", $msg, $headers);
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
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" media="(max-width: 800px)" href="../css/style.css" />
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="icon" href="../img/icon/icon.png">
        <title>LM Engenharia - Auditoría</title>
</head>

<body>


<div class="title-ouvi">
                <picture class="image-ouvi">
                        <img src="../img/ouvidoria_es.png" class="img-fluid-ouvi" alt="...">
                </picture>
                <div class="container-ouvi">
                        
                        
                        
                        <div class="img-index">
                                
                                
                                <a href="index.html" class="img-ouvi">
                                        <img src="../img/icon/marca2.png"></a>
                                        
                                        
                                        
                                </div>
                </div>
        </div>




     
        <div class="row-nav-ouvi mt-4">
                <div class="col-sm-auto ">
                        <a href="ouvidoria.html" class="ouvi-title">Página de inicio</a>

                </div>
                <div class="col-sm-auto ">
                        <a href="ouvidoria2.php" class="ouvi-title">Has un reporte</a>

                </div>
                <div class="col-sm-auto ">
                        <a href="ouvidoria3.html" class="ouvi-title">Código de ética y conducta</a>

                </div>
        </div>


        <section id="ouvidoria">
                <div class="ouvidoria-form">


                        <div class="page-ouvidoria">

                                <div class="container-ouvidoria">
                                        <div class="border-ouvidoria">

                                                <h3 class="title-ouvidoria">HAS UN REPORTE</h3>
                                        </div>

                                </div>
                        </div>

                        <form id="ouvidoria-form" action="ouvidoria2.php" method="post">



                                <div class="ouvidoria-title">




                                        <select name="dados_denuncia" class="form-control form-controle" id="input-1" required>
                                                <option value="">Datos de informes *</option>
                                                <option value="1">2</option>
                                                <option value="2">3</option>
                                                <option value="3">4</option>
                                                <option value="4">5</option>
                                        </select>
                                        <br>

                                </div>



                                <div class="ouvidoria-title">



                                        <select name="natureza_denuncia" class="form-control form-controle" id="input-1" required>
                                                <option value="">Naturaleza del informe *</option>
                                                <option value="1">2</option>
                                                <option value="2">3</option>
                                                <option value="3">4</option>
                                                <option value="4">5</option>
                                        </select>
                                        <br>


                                </div>

                                <div class="ouvidoria-title">



                                        <select name="localidade_denuncia" class="form-control form-controle" id="input-1" required>
                                                <option value="">Ubicación del informe *</option>
                                                <option value="1">2</option>
                                                <option value="2">3</option>
                                                <option value="3">4</option>
                                                <option value="4">5</option>
                                        </select>
                                        <br>


                                </div>




                                <div class="ouvidoria-title">



                                        <textarea name="descricao_denuncia" class="form-control form-controle-text" id="input-5"
                                                rows="4" placeholder="Descripción de la queja..." required></textarea>
                                        <br>

                                </div>

                                <div class="ouvidoria-title">
                                        <input type="file" name="documento" value='1' class="form-controle file" required>

                                </div>

                                <div class="ouvidoria-title">


                                        <button type="submit" class="form-controle submit"
                                                value="SEND MESSAGE">ENVIAR</button>

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
                                        <a href="history.html" class="a-footer">Nuestra historia</a>
                                </li>
                                <br>
                                <li>
                                        <a href="corporativo.html" class="a-footer">Corporativo</a>
                                </li>
                                <br>
                                <li>
                                        <a href="compliance.html" class="a-footer">Conformidad, Ética y
                                                Transparencia</a>
                                </li>
                                <br>
                                <li>
                                        <a href="politica.html" class="a-footer">Política de Gerencia</a>
                                </li>
                                <br>
                                <li>
                                        <a href="seguranca.html" class="a-footer">Seguridad</a>
                                </li>
                        </ul>
                        <br>
                </div>
                <div class="col-md-2 mt-md-3">

                        <h5 class="text-uppercase"><a href="about.html" class="a-footer">Servicios</a></h5>
                        <br>
                        <ul class="list-unstyled">
                                <li>
                                        <a href="caldeiraria.html" class="a-footer">Calderería</a>
                                </li>
                                <br>
                                <li>
                                        <a href="civil.html" class="a-footer">Ingenieria Civil</a>
                                </li>
                                <br>
                                <li>
                                        <a href="eletrica.html" class="a-footer">Eléctrica Industrial</a>
                                </li>
                                <br>
                                <li>
                                        <a href="facilites.html" class="a-footer">Facilities</a>
                                </li>
                                <br>
                                <li>
                                        <a href="instrumentacao.html" class="a-footer">Instrumentación</a>
                                </li>
                                <br>
                                <li>
                                        <a href="mecanica.html" class="a-footer">Mecánica</a>
                                </li>
                                <br>
                                <li>
                                        <a href="valvulas.html" class="a-footer">Valvulas</a>
                                </li>
                        </ul>
                        <br>


                        <a href="../ouvidoria2.php">

                                <img src="../img/icon/br.png"
                                        style="position: fixed;max-width: 45px;bottom: 20px;left: 20px;">
                        </a>
                </div>

                <div class="col-md-3 mt-md-3">
                        <h5><a class="a-footer" href="contato.php">Contacto</a></h5>
                        <br>
                        <h5><a class="a-footer" href="orcamento.php">Presupuesto</a></h5>
                        <br>
                        <h5><a class="a-footer" href="trabalhe.php">Trabaja con nosotros</a></h5>
                        <br>
                        <h5><a class="a-footer" href="ouvidoria.html">Auditoría</a></h5>
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
                © 2020 Copyright - Praxis Júnior Company

        </p>
        <a href="http://www.praxisjr.com.br" alt="http://www.praxisjr.com.br">

                <img src="../img/icon/praxis.png" style="position: relative;max-width: 20px; bottom: .2rem;">
        </a>
</div>

        <!-- BOOTSTRAP JS FILE -->
        <script src="css/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

</body>

</html>