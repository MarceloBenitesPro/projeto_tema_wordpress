
 
 <?php
 //Template Name: Contato
?>

<?php  get_header();?>


<section class="contato">
      <div class="chamada-portifolio" >
            <h4>Entre em Contato</h4>
            <h1>Como podemos te ajudar</h1>
       </div><!--chamada-serviços-->
       <div class="center">

      
            
      <div class="formulario">
            <div class="mapa-container">
                  <div id="mapa">  
                  </div>   
            </div><!--mapa-->
            <form action="">
            <?php the_content();?>
            </form>
      </div><!--formulario-->
</div><!--center-->
</section><!--contato-->
<?php  get_footer(); ?>