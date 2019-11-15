<?php
include 'contador.php';

if (isset($_COOKIE['counte'])) {
  $counte = $_COOKIE['counte'] + 1;
} else {
  $counte = 1;
  $a++;
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);
?>
<!DOCTYPE html>
<html>
<!--acrescente na sua pagina principal substitua 3700 pelo tento que quiser em segundos-->


<!--e coloque onde você quiser que que exiba o contador, personalize do jeito que quiser-->

<body>

  <div class="container">

    <?php include_once("menu.php"); ?>

    <div class="row">

      <div class="col-md-8 col-xs-12" style="background-color: white">

        <!--div class="alert alert-info text text-center" style="padding: 0px;margin-top: 30px">
          <p style="color: blue; font-size: 17px"><b>IV SGAgro<br>Úlimo prazo para submissão de trabalhos:<br>18/03/2019</b></p>
          <a style="color: blue" href="datasimportantes.php" target="_blank"><b>Clique aqui para ver todas as datas</b></a>
        </div-->

        <div class="alert alert-info text text-center" style="padding: 0px;margin-top: 30px">
          <a style="color: blue; font-size: 17px"" href="http://www.system4college.com.br" target="_blank"><b>Os resultados do processo de avaliação estão disponíveis no sistema do IV SGAgro.<br> Clique aqui para ver</b></a>
        </div>

       

        <div class="alert alert-success text text-center" style="padding: 0px">
          <a style="color: green" href="../template/Fast_Track_2019.pdf" target="_blank"><b>Clique para ver o resultado do Fast Track 2019</b></a>
        </div>

        <!--div class="alert alert-success text text-center" style="padding: 0px">
          <a style="color: green" href="../template/Fast_Track_2018.pdf" target="_blank"><b>Clique aqui para ver a publicação de Fast Track 2018</b></a>
        </div-->

        <!-- <div class="alert alert-success text text-center" style="padding: 0px">
          <a style="color: blue" href="https://eventos.funep.org.br/Eventos/Detalhes#/exibir/2169" target="_blank"><b>Clique aqui para realizar a sua inscrição no evento</b></a>
        </div> -->

       <!--  <div class="alert alert-info text text-center" style="padding: 0px"><a style="color: blue" href="http://www.system4college.com.br/resultado/evento" target="_blank">Clique aqui para ver a lista de trabalhos aprovados</a>
       </div> -->

      <!--   <div class="alert alert-info text text-center" style="padding: 0px"><a style="color: blue" href="programacao.php?id=evento">Clique aqui para ver a prévia da programação do evento</a></div>

        <div class="alert alert-info text text-center" style="padding: 0px">
          <a style="color: blue" href="../template/Programacao_das_Apresentacoes_2018.pdf" target="_blank"><b>Clique aqui para ver a programação das apresentações</b></a>
        </div> -->

        <article class="text-justify">
          <h3>Evento</h3>

          <p>O Simpósio em Gestão do Agronegócio é organizado pelo Programa de
           Pós-Graduação em Administração junto a Faculdade de Ciências Agrárias e
           Veterinárias da Universidade Estadual Paulista “Júlio de Mesquita
         Filho”(FCAV/UNESP).</p>

         <p>Este evento tem como objetivo integrar a academia com o mercado, a partir
           de um ambiente para difusão de conhecimento técnico-científico na área de
           Gestão do Agronegócio. O SGAgro proporciona um ambiente voltado à formação
           de redes de relacionamentos universidade-empresa e qualificação de
         recursos humanos nas atividades empresariais do agronegócio.</p>

         <p>O público alvo do evento compreende profissionais e pesquisadores na área
          do agronegócio que demandam fóruns para discussão de técnicas e processos
        de gestão que possam incrementar a competitividade organizacional.</p>

        <p>Em 2019 o evento irá para a sua quarta edição <!--(7 a 9 de junho de 2017)--> e
         contará com diferentes espaços para discussão de temas ligados à gestão do
       Agronegócio (palestras, apresentações de trabalho e workshops).</p>
       <br>

       <h3>Programa de Pós-Graduação em Administração - G.O. Agro</h3>
       <p>A FCAV está localizada no município de Jaboticabal/SP sendo um importante
         centro na formação de profissionais e no desenvolvimento de pesquisas nos
       seus 5 cursos de graduação e 11 de pós-graduação (mestrado e doutorado).</p>

       <p>O Programa de Pós-Graduação em Administração (Mestrado Profissional) foi
        recomendado pela CAPES em 2014 e iniciou suas atividades em 2015 com área
      de concentração em Gestão de Organizações Agroindustriais.</p>


    </article>

    <div class="fb-comments" data-href="https://www.facebook.com/SGAgro-164350053919134/?fref=ts" data-numposts="2"></div>

  </div>

                <!--div class="col-md-4 col-xs-12">
                  <div style="width: 50%;">
                    <script type="text/javascript" id="clstr_globe" src="//cdn.clustrmaps.com/globe.js?d=osxc0AkkEnCjV1_AUVZmCt5cRRjTxgzbptYtxz_EbX0"></script>
                  </div>
                </div-->

                <div class="col-md-4 col-xs-12">
                  <div class="panel panel-default">
                    <div class=" panel-heading">
                      <?php
                      echo "<p><span class='text text-success'>$a</span> Pessoas visitaram esse site, clique no mapa para mais detalhes</p>";
                      ?>
                    </div>
                    <div class="panel-body" >

                     <div style="width: 50%; margin-left: 25%"><br>
                      <script type="text/javascript" id="clstr_globe" src="//cdn.clustrmaps.com/globe.js?d=osxc0AkkEnCjV1_AUVZmCt5cRRjTxgzbptYtxz_EbX0" style="width: 50%"></script>
                    </div>
                  </div>
                </div>  
              </div>

              <div class="col-md-4 col-xs-12">

               <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSGAgro-164350053919134%2F%3Fref%3Dts%26fref%3Dts&tabs=timeline&width=340&height=490&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

             </div>

             <?php require_once('rodape2019.php'); ?>
           </body>
           </html>

           <style>
           th{background-color: #337AB7; color:#fff;}
           th{text-align: center}
           span{font-weight: bold;}
         </style>

         <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>


      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-91044140-1', 'auto');
        ga('send', 'pageview');

      </script>