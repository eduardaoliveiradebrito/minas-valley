<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>PROJETO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../img/logo/favicon04.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../styles/project.css">
<link rel="stylesheet" type="text/css" href="../styles/avaliacao.css">
<link rel="stylesheet" type="text/css" href="../styles/like.css">
<link rel="stylesheet" type="text/css" href="../styles/about.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<header>
<br><br><br>

</header>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="https://minasvalley.herokuapp.com/"><img src="../../img/logo/2.png" width="150" height="26" alt="Minas Valley"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../../index.php">Home</a></li>
          <li><a href="#about">Sobre nós</a></li>
          <li><a href="#redes">Nossas redes</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form> 
        <ul class="nav navbar-nav navbar-right">

        <?php

            if(isset($_SESSION["usu_id"])){

              echo "<li><a href='perfil.php'><span class='glyphicon glyphicon-user'></span> Perfil</a></li>";
              echo "<li><a href='../back-end/logout.php'><span class='glyphicon glyphicon-off'></span> Logout</a></li>";
            }else{

              echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Cadastre-se</a></li>";
              echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
            }

        ?>

        </ul>
      </div>
    </div>
  </nav>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">

        <!-- Head Line -->
        <div class="w3-white w3-text-grey" style="margin: 0 0 30px 0">
            <div class="w3-container">
                <img class="w3-image about-align" src="../../img/logo/6.png">
                <br>
            </div>
        </div>
  
    <!-- Left Column -->
    <div class="w3-half">

      <div class="w3-white w3-text-grey">
      
        <!-- First Left Column -->
        <div class="w3-white w3-text-grey w3-card-4">
            <div class="w3-container">
                <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-address-book-o fa-fw w3-margin-right w3-xxlarge"></i>Sobre Nós</h2><hr>

                <p><i class="w3-margin-right w3-large"></i>O nome San Pedro Valley surgiu como uma brincadeira e hoje é referência para empresas de base tecnológica de Belo Horizonte. A comunidade surgiu em 2011, durante encontros informais dos empreendedores das startups Beved, Deskmetrics, Everwrite e Hotmart.</p>
                   <p>Hoje somos mais de 200 empresas de diversos setores, além de espaços de coworking, aceleradoras, investidores e interessados. Se você tem uma Startup em Belo Horizonte, ou um projeto que tenha sinergia com o nosso ecossistema, não deixe de se cadastrar.</p>
                   <p>O objetivo é reunir as Startups de Belo Horizonte para juntos identificar oportunidades, necessidades e incentivos para este mercado, além de divulgar vagas e notícias.</p>
                   <p>Contamos com sua participação!</p>
                <br>
            </div>
        </div><br>



      <!-- End Class After Column -->
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-half">
    
      <div class="w3-container w3-white w3-margin-bottom">
        <div class="project-space-img">
            <img src="../../img/about/cidadeConectada.jpg" style="width:100%">
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

</div>

<footer class="w3-padding-32 w3-black w3-center w3-margin-top" id="redes">
    <h5>Nos siga em nossa redes sociais:</h5>
    <div class="w3-xlarge w3-padding-16">
        <a href="https://facebook.com/" target="_blank"><img src="../../img/socialFavicon/facebook-3-24.png"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="../../img/socialFavicon/instagram-24.png"></a>
        <a href="https://www.snapchat.com/l/pt-br/" target="_blank"><img src="../../img/socialFavicon/snapchat-24.png"></a>
        <a href="https://br.pinterest.com/" target="_blank"><img src="../../img/socialFavicon/pinterest-3-24.png"></a>
        <a href="https://twitter.com/" target="_blank"><img src="../../img/socialFavicon/twitter-3-24.png"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="../../img/socialFavicon/linkedin-3-24.png"></a>
    </div>
</footer>

</body>
</html>

<script src="../scripts/like.js"></script>