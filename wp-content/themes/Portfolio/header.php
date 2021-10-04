<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
	<link href="./assets/favicon.ico" rel="icon">

<!-- Google Font -->


<!-- CSS Libraries -->

<link href="<?php bloginfo('template_url');?>/main.3da94fde.css" rel="stylesheet">

	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
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

        


      </nav> 
    
    </div>
  </nav>
</header>
