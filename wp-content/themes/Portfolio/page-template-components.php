<?php
/*
Template Name:components
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
  <link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet">

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

<div class="section-container">
  <!-- Add your site or app content here -->
  <div class="container">
    <div class="row">
    <?php
      while(have_posts()):
      the_post();
        ?>
      <div class="col-xs-12 col-md-6">

        <div class="template-example">
          <h2 class="template-title-example"><?php the_title();?></h2>
          <p><?php the_excerpt();?></p>
        </div>
        <?php endwhile; ?>

        
      </div>

      <div class="col-xs-12 col-md-6">
        
      <div class="template-example">
          <h2 class="template-title-example">Kontakt Forma</h2>

            <div class="form-group" >
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <label for="exampleInpuOcjena1">Ocjena rada</label>
            <div class="form-group">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>

            <div class="form-group">
              <label class="checkbox-inline">
                <input 
                type="checkbox" id="inlineCheckbox1" value="option1"> Email me a copy
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox2" value="option2"> I am a human
              </label>
            </div>

            <div class="form-group">
              <textarea class="form-control" rows="3" placeholder="Enter your message"></textarea>
            </div>
            
            <p><a href="" class="btn btn-primary">Pošalji </a></p>
        </div>




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
<script src="<?php bloginfo('template_url');?>/main.4c6e144e.js"></script></body>

</html>