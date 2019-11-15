<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Simpósio de Gestão do Agronegócio">
  <meta name="keywords" content="SGAgro, Agronegócios, Faculdade de Ciências Agrárias e Veterinárias, Universidade Estadual Paulista (FCAV/UNESP), FCAV, UNESP, Gestão do Agronegócio,Simpósio em Gestão do Agronegócio, Simpósio, UNESP: Câmpus de Jaboticabal, Jaboticabal, Trabalhos em PDF, Artigos">
  <link rel="shortcut icon" href="../webroot/images/SGAGRO_LOGO.ico" type="image/x-icon"/>
  <link href="../webroot/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../webroot/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../webroot/js/bootstrap.min.js"></script>
  <title>SGAgro</title>
  <style type="text/css">
    body{
      margin-top:0px;
      margin-bottom: 0px;
      background-image: url('../webroot/images/backgroundSgagro2020.jpg');
      background-color: #e3dbd3;
      background-size: 100%;
      background-attachment: fixed;
      border-radius: 100px;
      
    }
    /*.container-fluid{background-color: white; min-height: 700px;}*/
    .navbar-default{
      /*background-color: transparent;*/
      border: none;
      margin-bottom: 0px;
      font-size:13px;
      padding-bottom: 0px;
      color: #161f39;
      padding-right: 100px

    }
    .active{color: white; text-decoration:none; background-color: rgb(50,180,74);}
    a{font-weight: bolder; color: black;}
    .div{background-color: #fff }

    #rodape{

      background-color: #A8C660;
      min-height: 150px;
      font-weight: bold;
    }
    table{background-color: white}

    .firstRow{
      margin-top: 100px;
    }

   
   

  </style>
</head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91044140-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="row">
<nav class="navbar navbar-default">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-brand">
      <a href="home.php">
        <img src="../webroot/images/SGAGRO_LOGO.png" width="8%">
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
        <li id="sobre" class="nav-item"><a class="nav-link" href="sobre.php?id=sobre">SOBRE</a></li>
        <li id="datas" class="nav-item"><a class="nav-link" href="datasimportantes.php?id=evento">DATAS IMPORTANTES</a></li>
        <li id="submissao" class="nav-item"><a class="nav-link" href="submissao.php?id=submissao">SUBMISSÃO</a></li>
        <li id="resultado" class="nav-item"><a class="nav-link" href="http://sistema.sgagro.org/resultado/evento" target="_blank" >RESULTADOS</a></li>
        

        <li class="dropdown" id="evento">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            EVENTO <span class="glyphicon glyphicon-menu-down"></span>
            <ul class="dropdown-menu">
              <li id="apresentacao" class="nav-item"><a class="nav-link" href="apresentacao.php?id=evento">APRESENTAÇÃO</a></li>
              <li id="programacao" class="nav-item"><a class="nav-link" href="programacao.php?id=evento">PROGRAMAÇÃO</a></li>
              <!-- <li id="expediente" class="nav-item"><a class="nav-link" href="expediente.php?id=evento">EXPEDIENTE</a></li> -->
              <li id="expediente" class="nav-item"><a class="nav-link" href="expediente.php?id=evento">ÁREAS TEMÁTICAS</a></li>
              <li id="comissao" class="nav-item"><a class="nav-link" href="comissao.php?id=evento">COMISSÃO</a></li>
            </ul>
          </a>
        </li>

        <li class="dropdown" id="edicoes">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            EDIÇÕES <span class="glyphicon glyphicon-menu-down"></span>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="edit2019.php">EDIÇÃO 2019</a></li>
              <li class="nav-item"><a class="nav-link" href="edit2018.php">EDIÇÃO 2018</a></li>
              <li class="nav-item"><a class="nav-link" href="anais.php?id=edicoes">EDIÇÃO 2017</a></li>
              <li class="nav-item"><a class="nav-link" href="edicaoant.php?id=edicoes">EDIÇÃO 2016</a></li> 
            </ul>
          </a>
        </li>

        <li id="inscricao" class="nav-item"><a class="nav-link" href="inscricao.php?id=inscricao">INSCRIÇÃO</a></li>
        <li id="contato" class="nav-item"><a class="nav-link" href="contato.php?id=contato">CONTATO</a></li>
        <li id=" login" class="nav-item"><a class="nav-link" HREF="http://sistema.sgagro.org" TARGET="_blank">LOGIN</a></li>

      </ul>
    </div>
  </nav>
 </div>
  <script type="text/javascript">
  $(document).ready(function(){
    var status = "<?php echo $_GET['id']; ?>";
    console.log(status);
    $('#'+status).addClass('active');


  });
</script>

<body>