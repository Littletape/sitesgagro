<!DOCTYPE html>
<html>
<!--acrescente na sua pagina principal substitua 3700 pelo tento que quiser em segundos-->
<?php
include 'contador.php';
if (isset($_COOKIE['counte'])) {
  $counte = $_COOKIE['counte'] + 1;
} else {
  $counte = 1;
  $a++;
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","a+");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);
?>

<!--e coloque onde você quiser que que exiba o contador, personalize do jeito que quiser-->

<body>

  <div class="container">

    <?php include_once("menu.php"); ?>

    <div class="row">
      <div class="col-md-8 col-xs-12">

        <div class="panel panel-default">
          <div class="panel-body">
            <article class="text-justify">
              <h3>Evento</h3>

              <p>O Simpósio em Gestão do Agronegócio é organizado pelo Programa de Pós-
                Graduação em Administração com área de concentração em Gestão de 
                Organizações Agroindustriais junto a Faculdade de Ciências Agrárias e 
                Veterinárias da Universidade Estadual Paulista (FCAV/UNESP).</p>

                <p>Este evento tem como objetivo integrar a academia com o mercado a partir de 
                  um espaço para difusão de conhecimento técnico-científico na área de Gestão 
                  do Agronegócio e constituir um ambiente que favoreça a formação de redes de 
                  relacionamentos universidade-empresa, contribuindo para a formação de 
                  recursos humanos nas atividades empresariais do agronegócio.</p>

                  <p>O público alvo do evento compreende profissionais e pesquisadores na área do 
                    agronegócio que demandam fóruns para discussão de técnicas e processos de 
                    gestão que incrementem à competitividade das organizações pertencentes às 
                    cadeias produtivas do agronegócio.</p>

                    <p>Neste sentido, o evento combinará em 3 dias (08 a 10 de junho de 2016) 
                      múltiplos espaços para discussão e desenvolvimento na gestão do 
                      Agronegócio, onde destacamos: Palestras com profissionais e pesquisadores, 
                      apresentação de trabalhos científicos e tecnológicos e workshops em temas 
                      atuais no agronegócio (certificações, sustentabilidade, inovação, 
                      empreendedorismos, legislação ambiental e trabalhista, entre outras).</p>
                      <br>

                      <h3>GOAgro</h3>
                      <p> A Faculdade de Ciências Agrárias e Veterinárias de Jaboticabal/SP é referência nacional e internacional em diversos ramos destas ciências, fruto do desenvolvimento do ensino nos cursos de graduação (Agronomia, Madicina Veterinária e Zootecnia) e da pesquisa nos nove programas de pós-graduação existentes no câmpus.
                        Historicamente, o crescimento da FCAV, em resposta às demandas da região, permitiu a criação de dois novos cursos no câmpus: Ciências Biológicas e Administração.
                        <p>É inegável a importância do Agronegócio para a Região de Ribeirão Preto, onde está inserida a cidade de Jaboticabal/SP, que é conhecida como uma das capitais do agronegócio brasileiro, já que segundo a Agência Paulista de Promoção de Investimento e Competitividade o interior paulista foi responsável por 15,4% do agronegócio brasileiro em 2012.</p>
                        <p>Apesar da importância deste segmento na economia paulista, a oferta de programas de pós-graduação stricto sensu em Administração no interior do Estado compreende 5 programas, sendo que nenhum destes é voltado à gestão de organizações agroindustriais.</p>
                        <p>Assim surgiu o Programa de Mestrado Profissional em Administração na FCAV/UNESP, com foco na Gestão de Organizações Agroindustriais (GOAgro), atendendo a um antigo anseio da comunidade profissional e científica da região: unir a excelência no campo das agrárias com modernas ferramentas de gestão.</p>
                      </article>
                    </div>
                  </div>

                </div>

                <div class="col-md-4 col-xs-12">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <h1>Teste</h1>
                      <h1>Teste</h1>
                      <h1>Teste</h1>
                      <h1>Teste</h1>
                    </div>
                  </div>  
                </div>

                <div class="col-md-4 col-xs-12">
                  <div class="panel panel-primary">
                    <div class=" panel-heading">
                      Contador de Visitas
                    </div>
                    <div class="panel-body">
                     <?php
                     echo "<th>$a Pessoas visitaram esse site voce ja vitou $counte vezes</th>";
                     ?>  
                   </div>
                 </div>  
               </div>



                <div class="col-md-12 col-xs-12">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <h1>Teste</h1>
                    </div>
                  </div>  
                </div>

              </div><!--row-->

            </div>

          </body>
          </html>

          <style>
            th{background-color: #337AB7; color:#fff;}
            th{text-align: center}
          </style>