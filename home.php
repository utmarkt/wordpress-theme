<?php //template name: homepage?>
<?php get_header(); ?>

<div class="main">
  <div class="homepage-container">

	<!-- Content -->
    <div class="content-grey">
    <div class="boxes-container">
		<?php  if(have_posts()){
			while(have_posts()) {
				the_post();
				?>
                    <!-- Home page posts -->
                    <!-- content that is on the home page goes in this loop -->
                    <div class="main-photo-container">
                        <img class="main-photo"><?php the_post_thumbnail('square'); ?></img>
                        <h2 class="main-title"><?php the_title(); ?></h2>
                    </div>
                    
                    <?php 
                    $postsArgs = array('post_type' => 'post', 'posts_per_page' => 8);
                    $postsLoop = new WP_Query($postsArgs);

                    if($postsLoop->have_posts()) {
                        while($postsLoop->have_posts()) {
                            $postsLoop->the_post();
                            ?>
                            <!-- Blog posts -->
                            <!-- For each blog post you get to work with that in here -->
                            <div class="blog-photo-container">
                                 <img class="blog-photo"><?php the_post_thumbnail('small-square'); ?></img>
                                <h3 class="blog-title"><a><?php the_title(); ?></a></h3>
                            </div>

                            <?php
                        }
                    }

                    ?>


				<?php
			}//end of while loop
		}//end of if statement
		?>
        </div> <!--/.boxes-container-->

    </div> <!--/.content-grey -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>