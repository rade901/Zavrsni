<?php
/*
Template Name:home
*/

get_header();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">
  
  <title><?php wp_title();?></title>  

  <link href="<?php bloginfo('template_url');?>/main.3da94fde.css" rel="stylesheet"></head>

<body>

 <!-- Add your content of header -->

<header>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      <nav class="navbar-fullscreen" id="navbar-middle">
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul class="navbar-fullscreen-links">
        <li><a href="pocetna" title="">Početna</a></li>
          <li><a href="mojpocetak" title="">Moj Početak</a></li>
          <li><a href="omeni" title="">O meni</a></li>
          <li><a href="kontakt" title="">Kontakt</a></li>
        </ul>

        <div class="footer-container">
           
          <p><small>© Untitled | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small></p>
          <p class="footer-share-icons">
              <a href="https://www.twitter.com" class="fa-icon" title="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.linkedin.com" class="fa-icon" title="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="https://www.behance.com" class="fa-icon" title="">
                  <i class="fa fa-behance" aria-hidden="true"></i>
              </a>
              <a href="https://www.vimeo.com" class="fa-icon" title="">
                  <i class="fa fa-vimeo" aria-hidden="true"></i>
              </a>
          </p>
                       
        </div>


      </nav> 
    
    </div>
  </nav>
</header>

  
<div class="hero-full-container background-image-container white-text-container" style="background-image:url('http://proba.hr/wp-content/uploads/2021/10/pexels-paras-katwal-6018290-scaled.jpg')">
  <div class="overlay-gradient"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-7 col-md-offset-1">
        <div class="hero-full-wrapper">
          <div class="text-content">
            <h1>Edunova-Završni Rad</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="<?php bloginfo('template_url');?>/main.4c6e144e.js"></script></body>

</html>
<?php get_footer(); ?>
