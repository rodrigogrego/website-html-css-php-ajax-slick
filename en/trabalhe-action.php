<?php

include("class.phpmailer.php");

        $area       = strip_tags(trim($_POST['area'])); 
        $nome       = strip_tags(trim($_POST['name'])); 
        $email_from = strip_tags(trim($_POST['email_from']));
        $file       = $_FILE['pdf'];

        $tamanho = 600000;
        $tipo = array('application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/msword');
        
        if($file['size'] > $tamanho){
            echo "<script>alert('O limite do tamanho do arquivo é 600KB')</script>";
        }elseif(in_array($file['type'], $tipo)){
             echo "<script>alert('O tipo de arquivo permitido é apenas PDF')</script>";
        }else{
    
        
        $mailer = new PHPMailer;
        $mailer->IsSMTP();
        
        $mail2->From = "teste_lucas@praxisjr.com.br";
        $mail2->FromName = "Praxis Empresa Junior";

        $mailer->Host     = "praxisjr.com.br";
        $mailer->Port     = 587;
        $mailer->SMTPAuth = true;
        $mailer->Username = "teste_lucas@praxisjr.com.br";
        $mailer->Password = "Teste123*";
        
        $mailer->AddAddress("rodrigo.melo@praxisjr.com.br", "Rodrigo");

        $mailer->Subject= "Formulário de Trabalhe Conosco";

        $mailer->AltBody = "Para ver o e-mail, use um programa compatível com HTML!";

        $mailer->MsgHTML($corpo_email);

        $mailer->AddAttachment($file);

        if ($mailer->Send())
                echo "<script>alert('Email enviado com sucesso!')</script>";
        else
               echo "<script>alert(E-mail não enviado!')</script>";
        
        

$corpo_email =  "<style type='text/css'>
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
                <td width='320'>E-mail:<b>$email_from</b></td>
</tr>
<tr>
                <td width='320'>Área de Interesse:<b>$area</b></td>
                </tr>
<tr>
                <td width='320'>Arquivo:$file</td>
                </tr>
              
        </tr>  
        
        </table>
</html>";

}

