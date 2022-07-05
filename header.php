<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      wp_head();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/style.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <title>Agencia - Codebybenites</title>
</head>
<body>
  <header>
      <div class="center">
        <div class="logo">
             <img src="<?php  echo get_theme_root_uri();?>/Agencia- codebybenites/images/logo.png" alt="logo">
            </div><!--logo-->
             <ul class="menu">
                   <li><a href="#">Home</a></li>
                   <li><a href="#servicos">Serviço</a></li>
                   <li><a href="#portifolio">Portifolio</a></li>
                   <li><a href="/wordpress/index.php/contato/">Contato</a></li>
             </ul><!--menu-->
             <div class="icons-menu">
                  <a target="_blank"href="https://www.facebook.com/profile.php?id=100082498857160"><i class="icon-facebook-sign"></i></a>
                  <a target="_blank"href="https://www.instagram.com/agenciacodebybenites/"><i class="icon-instagram"></i></a>
             </div><!--icons-menu-->
             <div class="menu-mobile">
                  <i class="icon-reorder"></i>
                    <ul >
                    <li><a href="#">Home</a></li>
                   <li><a href="#servicos">Serviço</a></li>
                   <li><a href="#portifolio">Portifolio</a></li>
                   <li><a href="/wordpress/index.php/contato/">Contato</a></li>
                    </ul>
                  </div><!--Menu-mobile-->
                  <div class="clear"></div>
         </div><!--center-->
   </header>