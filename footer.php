<footer>
    <div class="center">
          <div class="col-footer">
                <h2>Suporte:</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
          </div>
          <div class="col-footer">
            <h2>Contato:</h2>
            <a href="">Whatsapp</a>
            <a href="">E-mail</a>
      </div>
      <div class="col-footer">
            <h2>Redes Sociais:</h2>
            <a href=""><a target="_blank"href="https://www.facebook.com/profile.php?id=100082498857160"><i class="icon-facebook-sign"></i></a>
            <a target="_blank"href="https://www.instagram.com/agenciacodebybenites/"><i class="icon-instagram"></i></a>
      </a>
      </div>
      <div class="col-footer" style="width: 40%;text-align: right;">
          <img style="width: 120px; height: 40px;" src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/logo.png" alt="logo">
      </div>
    </div>
</footer>
<?php wp_footer();?>
<script src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/js/jquery.js"></script>
<script src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/js/slick.min.js"></script>
 <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDqN3l1SpFKJUEDlQ-c7sPZn-ZjSmD9qYA'></script>
<script src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/js/map.js"></script>
<script type="text/javascript">
   $('section.showcase  .slide-showcase').slick({
      dots: true,
      arrows:false,
       infinite: true,
       speed:1000,
       slidesToShow: 2,
       autoplay: true,
       centerMode:false,
       autoplaySpeed: 3000,
       pauseOnHover:false,
       responsive: 
       [
       {
         breakpoint: 768,
         settings: {
           slidesToShow: 1
         }
       }
       ]
   });

   $('section.depoimentos   .depoimentos-box').slick({
      dots: true,
      arrows:false,
       infinite: true,
       speed:1000,
       slidesToShow: 1,
       autoplay: true,
       centerMode:false,
       autoplaySpeed: 3000,
       pauseOnHover:false,
       responsive: 
       [
       {
         breakpoint: 768,
         settings: {
           slidesToShow: 1,
         }
       }
       ]
   });

   $('section.blog .slide-card').slick({
      dots: true,
      arrows:false,
       infinite: true,
       speed:1000,
       slidesToShow: 3,
       autoplay: true,
       centerMode:false,
       autoplaySpeed: 3000,
       pauseOnHover:false,
       responsive: 
       [
       {
         breakpoint: 768,
         settings: {
           slidesToShow: 1,
         }
       }
       ]
   });

</script>
<script>
   //Menu responsivo.
   $('.menu-mobile i').click(function(){
      $('.menu-mobile').find('ul').slideToggle();
   });
</script>
</body>
</html>