

<?php


$message = "";

if(isset($_POST["submit"])){
       
   $message = "

<html>

<table align='left' border='0' cellpadding='0' cellspacing='0' width='600'>
  <tr>
    <td background-color='#ffffff' style='padding: 20px 10px 20px 10px; font-family: Arial, sans-serif; font-size: 14px; color: #1e227b;'>
      <b>Área de Interesse: ".$_POST['area']."</b>
   
      
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
  <tr>
    <td background-color='#ffffff' style='padding: 20px 10px 20px 10px; font-family: Arial, sans-serif; font-size: 14px; color: #1e227b;'>
      <b>Telefone: ".$_POST['phone']."</b>
   
      
     </td>
  </tr>
 <tr>
   <td background-color='#ffffff;' style='padding: 20px 10px 20px 10px; font-family: Arial, sans-serif; font-size: 14px; color: #1e227b;'>
   <b> Assunto: ".$_POST['assunto']."</b>
   </td>
  </tr>
 <tr>
   <td background-color='#ffffff;' style='padding: 20px 10px 20px 10px; font-family: Arial, sans-serif; font-size: 14px; color: #1e227b;'>
   <b> Mensagem:".$_POST['mensaggem']."</b>
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
        
        $mail2->From = "teste_lucas@praxisjr.com.br";
        $mail2->FromName = "Praxis Empresa Junior";

        $mail2->Host    = "praxisjr.com.br";
        $mail2->Port    = 587;
        $mail2->SMTPAuth        = true;
        $mail2->Username = "teste_lucas@praxisjr.com.br";
        $mail2->Password = "Teste123*";
        
        $mail2->AddAddress('rodrigo.melo@praxisjr.com.br', 'Rodrigo');

        $mail2->Subject= 'Contato - LM Engenharia';
        
        $mail2->IsHTML(true);
        
        $mail2->MsgHTML($message);
        
        if($mail2->Send()){
            $message = "<div class='btn-success p-3' >Message sent successfully!</div>";
        }else{
            $message = "<div class='btn-danger p-3' >ERROR! Try again.</div>";
            
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
    <title>Contato</title>
</head>
<body>

                    <!-- NAVBAR AREA -->
                    <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand" href="index.html">
                        <img src="../img/icon/marca.webp" height="85px" width="185px" id="img1" class="img-logo"></a>
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
                                                aria-expanded="false">About us</a>
                                        <div class="sub-item">
                                                <a class="sub-itens" href="history.html"
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                        Our
                                                        story</a>
                                                <a class="sub-itens" href="corporativo.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                        Corporate
                                                </a>
                                                <a class="sub-itens" href="politica.html"
                                                        style=" font-size: 16px ; border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">
                                                        Management
                                                        Policy</a>
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
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px;">Industrial
                                                        Electrical</a>
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
                                                aria-expanded="false">Portfolio</a>
                                        <div class="sub-item">
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
                                                        style=" font-size: 16px ;border-bottom: 1px solid #1e227b ; border-bottom-width: 1px; ">Recovery Boiler</a>
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
                                                        <img src="img/icon/in2.png" height="25px" width="25px"id='in1'>
                                                </a>
                                        </li>

                                        <li class="nav-item">
                                                <a class="nav-link" href="login.php">
                                                        <img src="img/icon/login2.png" height="25px" width="25px"id='login1'>
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
                                        <h1 class="page-title">CONTACT</h1>

                                </div>
                </div>


        
                
                
        </section>
        
        
        <section id="contact2">

                
                <section id="contact">

                        <div class="contato-form">
                                
                                
                                <div class="page-contact">
                                        
                                        <div class="container-contact">
                                                <div class="border-contact">
                                                        
                                                        <h3 class="title-contact">Contact us</h3>
                                                </div>
                                                
                                        </div>
                                </div>
                                
                                <?php
                                echo ($message);
                                ?>
                                
                                <form  id="contato-form" method="POST">                                                                                                                    
                                        <div class="contato-title">                                                
                                                <select name="area" class="form-control form-controle" required>
                                                        <option value="">Field of interest*</option>
                                                        <option value="1">2</option>
                                                        <option value="2">3</option>
                                                        <option value="3">4</option>
                                                        <option value="4">5</option>
                                                </select>
                                                <br>
                                                
                                        </div>
                                        
                                        
                                        <!-- <label for="input-2">Nome*</label> -->
                                        <div class="contato-title">
                                                
                                                
                                                
                                                <input type="text" name="name" class="form-control form-controle name" id="input-2" placeholder="Name*" required>
                                                
                                                
                                        </div>        
                                        
                                        <!-- <label for="input-3">E-mail*</label> -->
                                        <div class="contato-title"> 
                                                
                                                
                                                
                                                <input type="email" name="email" class="form-control form-controle email" id="input-3" placeholder="E-mail*" required>
                                                
                                                
                                        </div>

                                        <div class="contato-title"> 
                                                
                                                
                                                
                                                <input type="tel" required="required" placeholder="Telephone*" maxlength="15" name="phone" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" class="form-control form-controle" />
                                                        
                                                        
                                        </div>
                                        
                                        
                                        <!-- <label for="input-4">Assunto*</label> -->
                                        <div class="contato-title"> 
                                                
                                                
                                                
                                                <input type="text" name="assunto" class="form-control form-controle about" id="input-4" placeholder="Subject*" required>
                                                <br>
                                                
                                        </div>        
                                        
                                        
                                        <!-- <label for="input-5">Comentários*</label> -->
                                        <div class="contato-title">
                                                
                                                
                                                
                                                <textarea name="mensagem" class="form-control form-controle-text" id="input-5" rows="4" placeholder="Message..." required></textarea>
                                                <br>
                                                
                                        </div>        
                                        
                                        
                                        
                                        
                                        
                                               
                                        <div class="contato-title">
                                                 <input type="hidden" name="acao" value="enviar"/>
                                                <button type="submit" class="form-controle submit" value="Submit" name="submit" >SEND MESSAGE</button>
                                                
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
                        
                         <a href="../contato.php.html" class="lang">
                                                                        
                                <img src="../img/icon/br.webp"
                                style="position: fixed;max-width: 33px;bottom: 20px;left: 20px; " >
                        </a>
                        <a href="contato.php.html" class="lang">
                                
                                <img src="../img/icon/uk.webp"
                                style="position: fixed;max-width: 33px;height: 21px;bottom: 20px;left: 68px; filter:none ">
                        </a>
                        <a href="../es/contato.php.html" class="lang">
                                
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

       



        <script src="../css/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


</body>
</html>