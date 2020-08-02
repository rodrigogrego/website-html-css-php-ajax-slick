<?php
    require_once "php/connect.php";
    session_start();
    $_SESSION["Authetication"] = false;

    if(isset($_POST["usuario"], $_POST["senha"])){
        global $pdo;
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $query = $pdo->prepare("SELECT * FROM usuarios WHERE email= :email AND senha=:senha;");
        $query->bindValue(":email", $usuario);
        $query->bindValue(":senha", $senha);
        $query->execute();
        $data = $query->fetchAll();

        if(count($data) != 0){

            if($data[0]["acesso"] == 1){
                $_SESSION['Authentication'] = true;                
                header('location: dashboard.php');
                exit(); 
            }            
            exit();
        }else{
            header('location: index.html');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-dash.css">
    <link rel="stylesheet" href="css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>LM Engenharia</title>
</head>
<body class="text-center">
               
    <form class="form-login" method="POST" >
        <img class="mb-4" src="img/marca2.png" width="220px" height="100px">
                <div class="form-group">
                    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="emailHelp" placeholder="Usuário" required>
            </div>
            <div class="form-group">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required >
            </div>
            <div class="col-sm-auto mb-2">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Lembre-me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            
        </form>
        
        
    

</body>
</html>