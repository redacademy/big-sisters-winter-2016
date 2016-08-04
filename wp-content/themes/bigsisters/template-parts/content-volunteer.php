<?php
/**
* Template part for displaying single posts.
*
* Template Name: Volunteer General
*/
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <header class="container story-page-copy">
      <?php the_title( '<h1 class="page-header-style">', '</h1>' ); ?>

      <!--<h1 class="page-header-style">Learn About Becoming a Mentor!</h1>-->
    </header>

    <section class="container involved-copy">
      <?php include_once(trailingslashit( get_template_directory() ).'/inc/initatives.php'); ?>
    </section>
    <!-- other volunteer opportunities -->
    <section class="container involved-copy">
      <div class="accordian-box">
        <div class="acr-box-div">
          <div class="info-panel-content">
            <p><span class="step-color">Other Volunteer Opportunities</span></p>

            <i class="fa fa-plus-circle"></i>
          </div>
          <div class="acr-box-content container">
            <?php
            $include = get_pages('include=408');
            $content = apply_filters('the_content',$include[0]->post_content);
            echo $content;
            ?>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
