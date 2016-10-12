<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sistema especialista em Simpósios">
  <meta name="keywords" content="sgagro, Agronegócios,Faculdade de Ciências Agrárias e Veterinárias, Universidade Estadual Paulista (FCAV/UNESP), FCAV,UNESP,Gestão do Agronegócio,Simpósio em Gestão do Agronegócio, Simpósio, UNESP: Câmpus de Jaboticabal, jaboticabal">
  <link href="../webroot/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../webroot/js/bootstrap.min.js"></script>
  <title>SGAgro</title>
  <style type="text/css">
    body{
      margin-top:30px;
      margin-bottom: 30px;
      background-image: url('../webroot/images/natureza.jpg');
      border-radius: 100px;
    }
    .container{background-color: white; min-height: 700px;    box-shadow: -0px -0px 200px #999;}
    .navbar-default{
      background-color: transparent;
      border: none;
      margin-bottom: 60px;
    }
    .active{color: white; text-decoration:none; background-color: rgb(50,180,74);}
    a{font-weight: bolder; color: black;}
    .div{background-color: #fff }

    #rodape{

      background-color: #f9f9f9;
      min-height: 150px;
      font-weight: bold;
    }


  </style>
</head>

<nav class="navbar navbar-default">
  <!--div class="row">
      <div class="col-md-2 col-xs-2">
          <img src="../webroot/images/logo.png" style="height: 50%">
      </div>

      <div class="col-md-8 col-xs-10">
          <center><h1 style="color: rgb(50,180,74)">II simposio em gestão do agronegocio</h1></center>
      </div>
    </div-->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-brand">
      <a href="home.php">
        <img src="../webroot/images/SGAGRO LOGO.png" width="10%">
      </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li id="home" class="nav-item"><a class="nav-link" href="home.php?id=home">HOME</a></li>
        <li id="submissao" class="nav-item"><a class="nav-link" href="submissao.php?id=submissao">SUBMISSÃO</a></li>
        <li id="resultado" class="nav-item"><a class="nav-link" href="resultado.php?id=resultado" >RESULTADOS</a></li>
        

        <li class="dropdown" id="evento">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            EVENTO <span class="glyphicon glyphicon-menu-down"></span>
            <ul class="dropdown-menu">
              <li id="apresentacao" class="nav-item"><a class="nav-link" href="apresentacao.php?id=evento">APRESENTAÇÃO</a></li>
              <li id="datas" class="nav-item"><a class="nav-link" href="datasimportantes.php?id=evento">DATAS IMPORTANTES</a></li>
              <li id="programacao" class="nav-item"><a class="nav-link" href="programacao.php?id=evento">PROGRAMAÇÃO</a></li>
              <li id="expediente" class="nav-item"><a class="nav-link" href="expediente.php?id=evento">EXPEDIENTE</a></li>
            </ul>
          </a>
        </li>

        <li class="dropdown" id="edicoes">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            EDIÇÕES <span class="glyphicon glyphicon-menu-down"></span>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="anais.php?id=edicoes">EDIÇÃO ATUAL</a></li>
              <li class="nav-item"><a class="nav-link" href="edicaoant.php?id=edicoes">EDIÇÃO ANTERIORES</a></li> 
            </ul>
          </a>
        </li>

        <li id="inscricao" class="nav-item"><a class="nav-link" href="inscricao.php?id=inscricao">INSCRIÇÃO</a></li>
        <li id="contato" class="nav-item"><a class="nav-link" href="contato.php?id=contato">CONTATO</a></li>
        <li id=" login" class="nav-item"><a class="nav-link" href="../sistema/submissao/index.php?id=login" target="blank">LOGIN</a></li>

      </ul>
    </div>
  </nav>

  <script type="text/javascript">
  $(document).ready(function(){
    var status = "<?php echo $_GET['id']; ?>";
    console.log(status);
    $('#'+status).addClass('active');


  });
</script>