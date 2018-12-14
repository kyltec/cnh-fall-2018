<?php
/**
 * Template Name: Room Rental
 *
 *
 */
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs', 'breadcrumbs' ); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">



    <div class="rooms-carousel-container">
        <?php
        
        //TODO use if statement to check if field is not empty
    
         $rooms = CFS()->get( 'rental_room' ); // get CFS loop for rooms  ?>
        <div>
          <ul class="rooms-carousel-list">
            <?php foreach ( $rooms as $room ): ?>
              <li><?php echo $room['room_title']; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <!-- Flickity Carousel -->
        <div class="main-carousel">
          <?php
          foreach ( $rooms as $room ): ?>
            <div class="carousel-cell">
              <h2 class="carousel-rental-title"><?php echo $room['room_title']; ?></h2>
              <img src="<?php echo $room['room_image']; ?>" />
              <?php echo $room['room_measurements']; ?>
              <?php echo $room['room_capacity']; ?>
              <?php echo $room['room_features']; ?>
            </div>
          <?php endforeach; ?>
        </div><!-- / Flickity Carousel -->
    </div><!-- / rooms-carousel-container -->





    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>