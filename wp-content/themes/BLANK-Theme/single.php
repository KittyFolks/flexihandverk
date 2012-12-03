<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry post_view">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</div>
						
		</div>


	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>