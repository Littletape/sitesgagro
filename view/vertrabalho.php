<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" ></link>
    <link type="text/css" rel="stylesheet" href="../css/style.css" ></link>
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <?php include("../controller/funcoes/funcoesmysql.php"); ?>
    <link rel="shortcut icon" href="../images/SGAGRO LOGO.ico" type="image/x-icon"/>
	<title>Visualizar Trabalho</title>
</head>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-91044140-1', 'auto');
	ga('send', 'pageview');

</script>
<body>
	<div class="container-fluid">
		<!--Banner-->
	    <div class="jumbotron" style="background-image: url('../images/fundo.png'); background-size: cover;">
	        <div class="row" style="margin-left: -6.5%; margin-right: 6.5%">
	            <div class="col-md-12 col-xs-12 col-lg-12">
	                <div class="col-md-4 col-xs-4 col-lg-4">
	                    <img src="../images/SGAGRO LOGO.png" style="width: 40%; height: 15%;">
	                    <img src="../images/unesp.jpg" style="width: 40%; height: 15%; margin-left: 5%;">
	                </div>
	            </div>
	        </div>

	    </div>
	    <!--Fim Banner-->

	    
	                    <?php
					
					if(isset($_GET['id'])){

						$id = $_GET['id'];
						if(!empty($id)){
						echo '
							<div class="row">
				 				<iframe  class="col-md-12 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1"src="../Trabalhos2017/'.$id.'.pdf" height="1500"> </iframe>
				 			</div><br/><br/>'; 
				 		}else{
				 			echo'
			 				<div class="row">
				 				<h2 style="text-align:center"> O arquivo do trabalho não foi enviado pelo autor ! </h2>
				 				</div>
				 			<br/><br/>';
				 		}
				 	}
				 		?>