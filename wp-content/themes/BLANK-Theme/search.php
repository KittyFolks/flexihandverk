<?php get_header(); ?>

	<?php if (have_posts()) : ?>
  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="entry <? cat_style(); ?>">
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<?php
		          the_excerpt()
            ?>
    		</div>
			</div>
		<?php endwhile; ?>
  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	<?php else : ?>
		<h3>Prøv på nytt!</h3>
	<?php endif; ?>
<?php get_footer(); ?>
