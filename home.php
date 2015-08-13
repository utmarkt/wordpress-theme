<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

	<!-- Content -->
    <div class="content">

    		<?php get_template_part( 'loop', 'index' );?>

    		<?php  if(have_posts()){
    			while(have_posts()) {
    				the_post();
    				?>

    				<?php
    			}//end of while loop
    		}//end of if statement

    		?>


    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>