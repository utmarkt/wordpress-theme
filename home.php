<?php //template name: homepage?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

	<!-- Content -->
    <div class="content-grey">

		<?php  if(have_posts()){
			while(have_posts()) {
				the_post();
				?>
                    <!-- Home page posts -->
                    <!-- content that is on the home page goes in this loop -->
                    <h2><?php the_title(); ?></h2>

                    <span class="image image-full"><?php the_post_thumbnail('square'); ?></span>


                    <?php 
                    $postsArgs = array('post_type' => 'post', 'posts_per_page' => 8);
                    $postsLoop = new WP_Query($postsArgs);

                    if($postsLoop->have_posts()) {
                        while($postsLoop->have_posts()) {
                            $postsLoop->the_post();

                            ?>
                            <!-- Blog posts -->
                            <!-- For each blog post you get to work with that in here -->
                            <h3><?php the_title(); ?></h3>

                            <?php
                        }
                    }

                    ?>


				<?php
			}//end of while loop
		}//end of if statement
		?>

    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->
<div class="footer-container content-grey">
    <?php get_footer(); ?>
</div>