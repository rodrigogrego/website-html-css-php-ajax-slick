<?php

  session_start();
  if(!$_SESSION['Authentication']){
    header('location: index.html');
    exit();
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-dash.css">
    <link href="css/dashboard.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-custom p-0 border-bottom">
        <a class="navbar-lm col-sm-2 col-md-2 mr-5 justify-content-center" href="#">
            <img src="img/marca2.png" height="80px" width="160px" id="img1">

        </a>
          <form action="php/logout.php" method="POST">
            <button class="btn btn-primary nav-link">Sair</button>            
          </form>
          </li>
        </ul>
      </nav>
  
      <div class="container-fluid pt-4 ">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block navbar-custom sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Home<span class="sr-only">(atual)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    SGI
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                      <span data-feather="users"></span>
                      Quem é quem
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="calendar"></span>
                    Eventos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="clipboard"></span>
                    Auditoria
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="key"></span>
                    Reservas de salas
                  </a>
                </li>
              </ul>
  
            </div>
          </nav>
  
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3">
              <h1 class="h2">Home</h1>
            </div>
                <div class="card-avaible">
                    <h4 class="title-card mt-4">Avaliações</h4>

                    <form methdo="POST" id="questions_form">
                        <div class="form-group mt-4">
                            <textarea class="form-control" id="questions" name="questions_input" type="text" rows="3" placeholder="Escreva aqui sua avaliação..." required></textarea>
                          </div>
                          <button id="question-btn" type="submit" value="Perguntar" class="btn btn-primary mb-2">Enviar</button>
                    </form>
                    <div class="questions-block mt-5">
                        
                        <p class="card-subtitle">
                            Ultimas avaliações
                        </p>

                        <ul class="questions-list">
                            <li class="questions-group"></li>
                        </ul>
                    </div>

                </div>

  
            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
  

          </main>
        </div>
      </div>
  
      <!-- Principal JavaScript do Bootstrap
      ================================================== -->
      <!-- Foi colocado no final para a página carregar mais rápido -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
  
      <!-- Ícones -->
      <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
      <script>
        feather.replace()
      </script>
  
     
</body>
</html>