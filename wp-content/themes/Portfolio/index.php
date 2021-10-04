<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();?>
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

<?php get_footer(); ?>
