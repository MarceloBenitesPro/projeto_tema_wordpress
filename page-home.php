<?php
 //Template Name: Home
?>

<?php get_header();?>
<div class="clear"></div>
<br  />
  <br  />
  <br  />
  <section class="topo">
        <div class="center">
            <div class="topo-1">
              <h3>De ponta a ponta</h3>
              <h1>Somos <span>criativos</span> e focados em <span>resultados</span></h1>
              <p>Uma equipe jovem e altamente qualificada garante o sucesso do seu projeto e produto. 
                Especialistas em suas áreas, consectetur adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <br />
                <a href="">Entrar em  contato</a>
              </div><!--topo-1-->
              <div class="topo-2">
                    <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/agencia1.svg" alt="agencia">
              </div><!--topo-2-->
              <div class="clear"></div>    
        </div><!--center-->
  </section><!--topo-->
  <section id ="servicos" class="servicos">
        <div class="center">
              <div class="chamada-servicos">
                  <h4>Nossos Serviços</h4>
                  <h1>O que Fazemos</h1>
             </div><!--chamada-serviços-->
          <div class="descricao-servicos">
                <div class="img-servicos">
                      <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/oquefazemos.svg" alt="oquefazemos">
                </div><!--img-servicos-->
                <div class="detalhes-servicos">
                    <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/sistemasesites.png" alt="sistemasesites">
                    <h3>Sites e Sistemas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                           <br />
                   <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/comunicacaoeseo.png" alt="comunicacaoeseo">
                     <h3>Gestor de Tráfego e SEO</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div><!--detalhes-servicos-->
                <div class="clear"></div>
          </div>
        </div><!--center-->
  </section><!--section-->
  <section  id ="portifolio" class="showcase" style="padding: 40px 0;">
      <div class="center">
            <div class="chamada-portifolio" >
                  <h4>Nossos Trabalhos</h4>
                  <h1>Que já Fizemos</h1>
             </div><!--chamada-serviços-->
             <br />
      <div style="max-width: 700px;margin:0 auto;overflow:hidden;" class="slide-showcase">
                   <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/portfolio-3.png" alt="">
                  <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/portfolio-3.png" alt="">
                  <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/portfolio-3.png" alt="">
                  <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/portfolio-3.png" alt="">
            </div> <!--slide-showcase-->
            <div class="clear"></div>
      </div><!--center-->
</section><!--showcase-->
<section class="depoimentos" >
      <div class="center" >
            <h2>Depoimentos</h2>
            <div class="depoimentos-box" >
                  <div class="depoimento-single" >
                        <p>"Sit ad reprehenderit eu proident esse do aliqua qui. 
                              Exercitation exercitation enim anim minim reprehenderit 
                              ipsum velit deserunt nisi mollit culpa elit. Aliquip velit nisi
                               fugiat fugiat adipisicing proident laborum quis nisi ea dolore reprehenderit.
                                Nulla et minim exercitation consectetur do. Id occaecat labore nisi mollit
                                 incididunt."</p>
                                 <p>Marcelo Benites</p>
                      <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/depoimento.png" alt="">
                  </div>   
                  <div class="depoimento-single" >
                        <p>"Sit ad reprehenderit eu proident esse do aliqua qui. 
                              Exercitation exercitation enim anim minim reprehenderit 
                              ipsum velit deserunt nisi mollit culpa elit. Aliquip velit nisi
                               fugiat fugiat adipisicing proident laborum quis nisi ea dolore reprehenderit.
                                Nulla et minim exercitation consectetur do. Id occaecat labore nisi mollit
                                 incididunt."</p>
                                 <p>Marcelo Benites</p>
                      <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/depoimento.png" alt="">
                  </div>   
             </div>
      </div><!--center-->
      <div class="clear"></div>
</section><!--section-->

  <?php get_footer();?>