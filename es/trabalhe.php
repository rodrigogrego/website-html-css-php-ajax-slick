

<?php


$message = "";

if(isset($_POST["submit"])){
   $path = 'upload/'.$_FILES['arquivo']['name'];
   move_uploaded_file($_FILES['arquivo']['tmp_name'],
   $path);
       
   $message = "

<html>

<table align='left' border='0' cellpadding='0' cellspacing='0' width='600'>
  <tr>
    <td background-color='#ffffff' style='padding: 20px 10px 20px 10px; font-family: Arial, sans-serif; font-size: 14px; color: #1e227b;'>
      <b>Área de Interesse:  ".$_POST['area']."</b>
   
      
     </td>
  </tr>
  <tr>
   <td background-color='#ffffff' style='padding: 20px 10px 20px 10px; font-family: Arial, sans-serif; font-size: 14px; color: #1e227b;'>
    <b>Nome: ".$_POST['name']."</b>
   </td>
  </tr>
  <tr>
    <td background-color='#ffffff' style='padding: 20px 10px 20px 10px; font-family: Arial, sans-serif; font-size: 14px; color: #1e227b;'>
      <b>E-mail: ".$_POST['email']."</b>
   
      
     </td>
  </tr>
 <td background-color='#c8d0d8;' style='padding: 30px 30px 30px 30px; font-family: Arial, sans-serif; font-size: 24px; color: #1e227b;'>
  <table style='border: 0'; cellpadding='0' cellspacing='0' width='100%'>
  <tr>
   <td align='right' width='25%'>
     <table border='0' cellpadding='0' cellspadding='0'>
       <tr>
         <td>
           <a href=''>
             <img src='img/icon/marca2.png' alt='LM Engenharia' width='65' height='38' style='display: block;' />
            </a>
          </td>
          <td style='font-size: 0; line-height: 0;' width='20'>&nbsp;
          </td>
          <td>
            <a href=''>
              <img src='img/icon/in.png' alt='Linkedin' width='28' height='28' style='display: block;' />
            </a>
          </td>
          <td style='font-size: 0; line-height: 0;' width='20'>&nbsp;
        </tr>
      </table>
        
   </td>
   <td width='75%' style='color:#1e227b; font-size: 12px;'>
   <b>
     Mensagem enviada através do site LM Engenharia<br>
     Acesse para mais informações.

   </b>
   </td>
  </tr>
 </table>
  </td>
 </table>
     
</html>";
       
    require 'class.phpmailer.php';
       
       
        $mail2 = new PHPMailer();
        $mail2->IsSMTP();
        $mail2->SMTPSecure = 'tls';
        $mail2->SetLanguage("br");
        
        $mail2->From = "teste2_lucas@praxisjr.com.br";
        $mail2->FromName = "Praxis Empresa Junior";

        $mail2->Host    = "praxisjr.com.br";
        $mail2->Port    = 587;
        $mail2->SMTPAuth        = true;
        $mail2->Username = "teste2_lucas@praxisjr.com.br";
        $mail2->Password = "Teste123@";
        
        $mail2->AddAddress('rodrigo.melo@praxisjr.com.br', 'Rodrigo');

        $mail2->Subject= 'Trabalhe Conosco - LM Engenharia';
        
        $mail2->IsHTML(true);
        
        $mail2->AddAttachment($path);
        
        $mail2->MsgHTML($message);
        
        if($mail2->Send()){
            $message = "<div class='btn-success p-3' >Enviado con éxito!</div>";
            unlink($path);
        }else{
            $message = "<div class='btn-danger p-3' >¡ERROR! Inténtalo de nuevo.</div>";
            
        }
       
       
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="../js/script_lang.js" async></script>
    <link rel="stylesheet" href="../css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="icon" href="../img/icon/icon.webp">
    <title>Trabaja con nosotros</title>
</head>
<body>

                    <!-- NAVBAR AREA -->
                    <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="index.html">
                <img src="../img/icon/marca.png" height="85px" width="185px" id="img1" class="img-logo"></a>
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
                                        aria-expanded="false" onclick="funcaoClick()">Sobre Nosotros</a>
                                <div class="sub-item" id="drop">
                                        <a class="sub-itens" href="history.html"
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                Nuestra Historia</a>
                                        <a class="sub-itens" href="corporativo.html"
                                                style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                Corporativo
                                        </a>
                                        <a class="sub-itens" href="politica.html"
                                                style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                Política de gerencia</a>
                                        <a class="sub-itens" href="compliance.html"
                                                style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                Conformidad,
                                                Etica y Transparencia</a> 
                                                <a class="sub-itens" href="seguranca.html"
                                                style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                Seguridad
                                        </a> 
                                        </div>
        
                        </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="about.html"
                                        id="navbarDropdownMenuLink">Servicios </a>
                                <div class="sub-item">
                                        <a class="sub-itens" href="eletrica.html"
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Eléctrico industrial</a>
                                        <a class="sub-itens" href="mecanica.html"
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Mecánica</a>
                                        <a class="sub-itens" href="instrumentacao.html"
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Instrumentación</a>
                                        <a class="sub-itens" href="civil.html"
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Ingenieria civil</a>
                                        <a class="sub-itens" href="caldeiraria.html"
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Calderería</a>
                                        <a class="sub-itens" href="valvulas.html"
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Valvulas</a>
                                        <a class="sub-itens" href="facilites.html"
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Facilities</a>
                                </div>
                        </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" onclick="funcaoClick2()" >Portafolio</a>
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
                                                style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">Caldera de recuperación</a>  
                                        </div>
        
                        </li>
                      
                        <li class="nav-item">
                                <a class="nav-link" href="contato.php">Contacto</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="trabalhe.html">Trabaja con nosotros</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="orcamento.php">Presupuesto</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="ouvidoria.html">Linéa de Ética</a>
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
                                <img src="../img/contact.jpg" class="img-fluid-serv" alt="...">
                        </picture>
                                <div class="container">
                                        <h1 class="page-title">TRABAJA CON NOSOTROS</h1>

                                </div>
                </div>

        <div class="intro-job justify-content-center" >
                <div class="sub-title col-xm-4">        
                        <h3 style="color:#1e227b; font-weight: bolder;">¡Sea bienvenido!</h3>
                        <br>
                        <p style="color:#1e227b; font-weight: bold; font-size:18px; text-align:center;"> Siempre estamos buscando profesionales en las más diversas disciplinas de
                                 Ingenieria. </p>
                                <p style="color:#1e227b; font-weight: bold; font-size:18px; text-align:center;">Si quieres formar parte de nuestro equipo,
                                 complete el formulario a continuación y adjunte su currículum:
                                </p>
                </div>
               
        </div>

                <section id="contact">

                        <div class="contato-form">
                                
                                
                                <div class="page-contact">
                                        
                                        <div class="container-contact">
                                                <div class="border-contact">
                                                        
                                                        <h3 class="title-contact">Sea parte de un equipo de excelencia</h3>
                                                </div>
                                                
                                        </div>
                                </div>
                                
                                <?php
                                echo ($message);
                                ?>
                                
                                <form id="contato-form" method="post" enctype="multipart/form-data">

                                        <div class="contato-title">




                                                
                                                <select name="area" class="form-control form-controle" required>
                                                        <option value="">Vacante de interés*</option>
                                                        <option value="1">2</option>
                                                        <option value="2">3</option>
                                                        <option value="3">4</option>
                                                        <option value="4">5</option>
                                                </select>
                                                <br>

                                        </div>


                                        <!-- <label for="input-2">Nome*</label> -->
                                        <div class="contato-title">



                                                <input type="text" name="name" class="form-control form-controle name"
                                                        placeholder="Nombre*" required>


                                        </div>

                                        <div class="contato-title">



                                                <input type="email" name="email" class="form-control form-controle email"
                                                        placeholder="E-mail*" required>


                                        </div>


                                        <div class="contato-title">
                                                <input type="file" name="arquivo" class="form-controle file"  accept=".pdf, .doc, .docx" required>

                                        </div>



                                        <div class="contato-title">


                                                <button type="submit" class="form-controle submit"
                                                        value="Submit" name="submit">ENVIAR</button>

                                        </div>


                                        </form>
                                </div>
                                
                        <div class="sidebar ">
                                        
                                        <div class="page-contact">
                                                
                                                <div class="border-contact">
                                                        
                                                        <h3 class="title-contact pb-2"> Panel de vacantes</h3>        
                                                        
                                                 </div>
                                        </div>
                        
                                <button class="dropdown-btn mb-3 col-xm-5" id="btn-vagas" >Vacante (Instrumentación técnica)
                                        <p id="btn" style="font-size: 20px;">+</p>
                                </button>
                                
                                <div class="dropdown-container mb-3" id="vagas">
                                        <li>Ubicación </li>
                                        <li> Rol </li>
                                        <li> Grado de instrucción </li>
                                        <li> Descripción </li>
                                        <li> Experiencia </li>
                                </div>
                                
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
        
        
                                 <!-- BANDEIRAS E CERTIFICADO ISO -->
                        
                        <a href="../trabalhe.php" class="lang">
                                                                
                                <img src="../img/icon/br.webp"
                                style="position: fixed;max-width: 33px;bottom: 20px;left: 20px; " >
                        </a>
                        <a href="../en/trabalhe.php" class="lang">
                                
                                <img src="../img/icon/uk.webp"
                                style="position: fixed;max-width: 33px;height: 21px;bottom: 20px;left: 68px;  ">
                        </a>
                        <a href="trabalhe.php" class="lang">
                                
                                <img src="../img/icon/es.webp"
                                style="position: fixed;max-width: 33px;height: 21px; bottom: 20px;left: 116px; filter:none ">
                        </a>



                                <!-- <img src="img/icon/iso.png"
                                style="position: fixed;max-width: 105px; bottom: 20px;right: 20px; "> -->
                        <!--  -->
                        </div>
        
                        <div class="col-md-3 mt-md-3">
                                <h5><a class="a-footer" href="contato.php">Contacto</a></h5>
                                <br>
                                <h5><a class="a-footer" href="orcamento.php">Presupuesto</a></h5>
                                <br>
                                <h5><a class="a-footer" href="trabalhe.php">Trabaja con nosotros</a></h5>
                                <br>
                                <h5><a class="a-footer" href="ouvidoria.html">Linéa de Ética</a></h5>
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
        

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
            <script src="../css/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>