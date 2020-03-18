<!DOCTYPE html>
<html>
<style type="text/css">
	.borda{ border: solid black 2px; }
	.list-group>.list-group-item{padding: 12.8px;}
	.alert-success{
		background-color: #ffffff;

	}
</style>
<body> 

	<div class="container-fluid">
		<?php include_once("menu.php"); ?>
		<!-- inicio da primeira row -->
		<div class="row firstRow ">
			<div class="col-md-6 ">

				<div class="row">
					<div class="col-md-12">
						<div class="thumbnail">
							<img src="../webroot/images/estudando.jpg" alt="...">
							<div class="caption">
								<h3>Trabalhos</h3>
								<p>
									O SGAgro receberá trabalhos em formato completo ou em formato de resumo expandido para apresentação oral estudos ou relatos tecnológicos na área de Gestão do Agronegócio. Todos os trabalhos serão encaminhados para processo de dupla avaliação às cegas. Somente os trabalhos aprovados pelos avaliadores e inscritos nos programas serão publicados nos Anais do simpósio. Os melhores trabalhos serão encaminhados para revistas parceiras do evento em processo fast track, logo, caso sejam aceitos pelo sistema de avaliação destes periódicos os trabalhos poderão ser publicados nas revistas.
									<!--O SGAgro receberá trabalhos em formato completo para apresentação oral ou em formato de resumo expandido para apresentação em painel estudos ou relatos tecnológicos na área de Gestão do Agronegócio.

									Todos os trabalhos serão encaminhados para processo de dupla avaliação às cegas. Somente os trabalhos aprovados pelos avaliadores e inscritos nos programas serão publicados nos Anais do simpósio.

									Os melhores trabalhos serão encaminhados para revistas parceiras do evento em processo fast track, logo, caso sejam aceitos pelo sistema de avaliação destes periódicos os trabalhos poderão ser publicados nas revistas.-->
								</p>

								<!--p><a href="../template/TemplateSGAgro2018.docx" class="btn btn-primary" download>Clique aqui pra fazer download do template de submissão</a></p><br-->

								<p><a href="../template/Template_resumo_expandido.docx" class="btn btn-primary" download>Clique aqui pra fazer download do template do resumo expandido</a></p>
								<p><a href="../template/Template_Relato_Tecnico.docx" class="btn btn-primary" download>Clique aqui pra fazer download do template do relato técnico</a></p>
								<p><a href="../template/Template_Artigo.docx" class="btn btn-primary" download>Clique aqui pra fazer download do template do artigo</a></p>

								<p><a href="../template/Template_ProjetoPesquisa.docx" class="btn btn-primary" download>Clique aqui pra fazer download do template de projeto de pesquisa</a></p>

								<p><a href="../template/Template_PlanoNegocio.docx" class="btn btn-primary" download>Clique aqui pra fazer download do template do plano de negócios</a></p>

								<p>Para submissão do trabalho, o autor deverá realizar o seu cadastro no sistema de submissão do SGAgro na área de <a href="http://sistema.sgagro.org/" class="btn btn-primary">Login</a>
								</p>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-6 ">
					<div class="alert alert-success" style="background-color: #ffffff;">
			    		<center><p><b>Clique no botão abaixo para ver os resultados do Fast Track 2019:</b><br><a href="../template/Fast_Track_2019.pdf" target="_blanck" class="btn btn-primary">Resultado do Fast Track 2019</a></p></center>
			    	</div>

					<div class="alert alert-success" style="background-color: #ffffff;">
			    		<center><p><b>Clique no botão abaixo para ver os resultados do Fast Track 2018:</b><br><a href="../template/Fast_Track_2018.pdf" target="_blanck" class="btn btn-primary">Resultado do Fast Track 2018</a></p></center>
			    	</div>

					<div class="alert alert-success" style="background-color: #ffffff;">
			    		<center><p><b>Clique no botão abaixo para ver os resultados do Fast Track 2017:</b><br><a href="../template/fast_track_2017.pdf" target="_blanck" class="btn btn-primary">Resultado do Fast Track 2017</a></p></center>
			    	</div>

					<div class="text">
						<ul class="list-group">
							<li class="list-group-item active" style="background-color: #b5cf79; border-color:#b5cf79; color: black; font-weight: bold ">As opções de fast track são:</li>
							<li class="list-group-item"><a href="#">Contabilidade, Gestão e Governança</a></li>
							<li class="list-group-item"><a href="#">Revista Científica</a></li>
							<li class="list-group-item"><a href="#">Revista Capital Cientifico</a></li>
							<li class="list-group-item"><a href="#">Revista Verde de Agroecologia e Desenvolvimento Sustentável</a></li>
							<li class="list-group-item"><a href="#">Cuyonomics. Investigaciones en Economía Regional</a></li>
							<li class="list-group-item"><a href="#">Desenvolve Revista de Gestão Unilasalle</a></li>
							<li class="list-group-item"><a href="#">Caderno de Administração</a></li>
							<li class="list-group-item"><a href="#">Revista Desafio online</a></li>
							
							
							
						</ul>
					</div>

				</div>
			</div>
			<!-- fim da row 1 -->

			<!-- inicio da segunda row -->
			<div class="row">

				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading" style="text-align: center">Os trabalhos devem estar de acordo com as normas descritas neste documento para serem aceitos, caso contrário serão desclassificados.</div>
						<div class="panel-body">
							<iframe  class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1" src="../template/TemplateSGAgro2019.pdf" height="1000"> </iframe>
						</div>
					</div>
					
				</div>
			</div>
			<!-- fim da row 2 -->

			<?php require_once('rodape2019.php'); ?>
		</div>
		<!-- fim do container-fluid -->



	</body>
	</html>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-91044140-1', 'auto');
	ga('send', 'pageview');

</script>