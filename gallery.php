<?php

/*
  Template Name: gallery + Sidebar
*/

get_header();  ?>

<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content gallery-container">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

<!--     <?php get_sidebar(); ?> -->

  </div> <!-- /.container -->
</div> <!-- /.main -->
  
<div class="footer-container content-grey">
<?php get_footer(); ?>
<script>
var container = document.querySelector('#blog-list-center');
var $pckry;
var $pckry = new Packery( container, {
// options
itemSelector: '.item',
gutter: 0,
});
// initialize Packery after all images have loaded
imagesLoaded( container, function() {
$pckry = new Packery( container );
});
</script>
</div>