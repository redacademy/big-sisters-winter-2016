<?php
/**
* The template for displaying archive pages.
*
* @package Big_Sisters_Theme
*/
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="events">
      <section class="premier-events container">
        <?php if ( have_posts() ) : ?>
          <header class="page-header-style">
            <h1>Signature Events</h1>
          </header><!-- .page-header -->
          <?php /* Start the Loop */ ?>
          <?php query_posts( array( 'events_tax' => 'signature', 'showposts' => 3 ) ); ?>
          <ul>
            <?php while ( have_posts() ) : the_post(); ?>
              <li>
                <?php if (has_post_thumbnail() ) : ?>
                  <div class="event-thumbnail">
                    <div class="thumb-img-div">
                      <?php the_post_thumbnail('large'); ?>
                    </div>
                  </div> <!-- .event-thumbnail -->
                <?php endif; ?>
                <div class="event-content">
                  <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php the_excerpt(); ?>
                  <a class="learn-more button-white" href="<?php the_permalink(); ?>">Learn More</a>
                </div> <!-- .event-content -->
              </li>
            <?php endwhile; wp_reset_query(); ?>
          </ul>
        <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
      </section> <!-- .premier-events -->

      <section class="premier-events container">
        <header class="page-header-style">
        <h1>Partnership Events</h1>
      </header>
        <?php if ( have_posts() ) : ?>
          <?php /* Start the Loop */ ?>
          <?php query_posts( array( 'events_tax' => 'partnership', 'showposts' => 3 ) ); ?>
          <ul>
            <?php while ( have_posts() ) : the_post(); ?>
              <li>
                <?php if (has_post_thumbnail() ) : ?>
                  <div class="event-thumbnail">
                    <div class="thumb-img-div">
                      <?php the_post_thumbnail('large'); ?>
                    </div>
                  </div> <!-- .event-thumbnail -->
                <?php endif; ?>
                <div class="event-content">
                  <h3>  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php the_excerpt(); ?>
                  <a class="learn-more button-white" href="<?php the_permalink(); ?>">Learn More</a>
                </div> <!-- .event-content -->
              </li>
            <?php endwhile; wp_reset_query(); ?>
          </ul>
        <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
      </section> <!-- .partner-events -->
<?php /*
      <section class="premier-events container">
          <header class="page-header-style">
            <h1>Third Party Events</h1>
          </header><!-- .page-header -->
          <?php if ( have_posts() ) : ?>
          <ul>
            <?php query_posts( array( 'events_tax' => 'third-party', 'showposts' => 3 ) ); ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <li>
                <?php if (has_post_thumbnail() ) : ?>
                  <div class="event-thumbnail">
                    <div class="thumb-img-div">
                      <?php the_post_thumbnail('large'); ?>
                    </div>
                  </div> <!-- .event-thumbnail -->
                <?php endif; ?>
                <div class="event-content">
                  <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php the_excerpt(); ?>
                  <a class="learn-more button-white" href="<?php the_permalink(); ?>">Learn More</a>
                </div> <!-- .event-content -->
              </li>
            <?php endwhile; wp_reset_query(); ?>
          </ul>
        <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
      </section> <!-- .premier-events -->

      <section class="premier-events container">
        <header class="page-header-style">
          <h1>Past Events</h1>
        </header><!-- .page-header -->
          <?php if ( have_posts() ) : ?>
          <ul>
              <?php $i = 1; while (have_posts() && $i < 7) : the_post(); ?>
              <li>
                <?php if (has_post_thumbnail() ) : ?>
                  <div class="event-thumbnail">
                    <div class="thumb-img-div">
                      <?php the_post_thumbnail('large'); ?>
                    </div>
                  </div> <!-- .event-thumbnail -->
                <?php endif; ?>
                <div class="event-content">
                  <h3>  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php the_excerpt(); ?>
                  <a class="learn-more button-white" href="<?php the_permalink(); ?>">Learn More</a>
                </div> <!-- .event-content -->
              </li>
            <?php $i++; endwhile; wp_reset_query(); ?>
          </ul>
        <?php endif; ?>
      </section> <!-- .partner-events -->
*/ ?>
      <section class="host-fundraiser-event">
        <div class="container">
          <h2>Want to host a fundraiser or event?</h2>
          <a class="learn-more button-white"href="/bigsisters/host-a-fundraising-event/">Learn More</a>
        </div>
      </section>
      <?php
      $id = 608;
      $post = get_post( $id );
      ?>
      <?php get_template_part('template-pages/events-contact'); ?>
      <hr>

    </div> <!-- .events -->

  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
