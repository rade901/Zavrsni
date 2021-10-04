<?php
/*
Template Name:project
*/
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

  <link href="<?php bloginfo('template_url');?>/main.3da94fde.css" rel="stylesheet">

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
           
        <p><small>&copy; Zavrsni rad 2021 - <?php echo date('Y'); ?> </small></p>
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

  
<div class="hero-full-container background-image-container white-text-container" style="background-image:url('http://proba.hr/wp-content/uploads/2021/10/pexels-caio-56759-scaled.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="hero-full-wrapper">
          <div class="text-content  text-center">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-container">
  <div class="container">
    <div class="row">
    <?php
          while(have_posts()):
          the_post();
        ?>
      <div class="col-xs-12">
        <div class="text-center section-container-spacer">
          <h2 class="with-project-number"><span class="project-number">01</span><?php wp_title();?></h2>
        </div>
        <div class="row section-container-spacer">
          <div class="col-md-4">
              <div class="section-container-spacer">
                <h3>Zavrsetak škola-Edunova Web dizajn</h3>
                <p>osijek Studeni, 2021</p>
              </div>

              <h4>Zasluge</h4>
              
              <ul class="list-unstyled">
                <li>Edunova</li> 
                <li>Tomislava Jakopec</li>
                <li>Pavle Vidaković</li>
              </ul>
              
          </div>
          <div class="col-md-8">
            <h3>Kako je sve počelo ?</h3>
            <p><?php the_excerpt();?></p>
          </div>
        </div>
        <?php endwhile; ?>

        <img src="./assets/images/img-03.jpg" alt="" class="img-responsive">
      

        <blockquote class="text-center large-spacing">
            <p>"Moje slike crtane na brzinu na mobitelu."</p>
        </blockquote>
        
        <div class="row">
            <div class="col-md-6">
            <img src="http://proba.hr/wp-content/uploads/2021/10/kaktus.jpg" class="img-responsive" alt="">
            <p>Rade Jasenovčanin</p>
            </div>
            <div class="col-md-6">
            <img src="http://proba.hr/wp-content/uploads/2021/10/slika.jpg" class="img-responsive" alt="">
            <p>Rade Jasenovčanin</p>
            </div>
            <p><i class="fa fa-comments"></i><a href="<?php comments_link(); ?>"><?php comments_number( 'no responses', 'one response', '% responses' ); ?>.</a></p>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navbarToggleSidebar();
      closeMenuBeforeGoingToPage();
      navActivePage();
    });
</script>
<script src="<?php bloginfo('template_url');?>/main.4c6e144e.js"></script>
  
</body>

</html>