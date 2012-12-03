<?php
/*
Template Name: Frontpage
*/
?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php
		  echo getPageContent(35); 
		?>	
		<div class="post" id="post-<?php the_ID(); ?>">
      <div id="cycle">
  			<?php the_content(); ?>
  		</div>
      
		</div>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>