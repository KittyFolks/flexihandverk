<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $i=0; ?>
  		<div class="post" id="post-<?php the_ID(); ?>">
  			<div class="entry box_link">
  
  				<?php the_content(); ?>
  			</div>
  		</div>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
