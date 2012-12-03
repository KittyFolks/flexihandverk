<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>

	<?php endwhile; ?>
	
	<?php else : ?>
<h3>Prøv på nytt!</h3>
<?php endif; ?>

<?php get_footer(); ?>
    