<?php
/*
Template Name: Description
*/
?>
<style>
  .box_wrapper {padding: 20px}
  h3 {color:#fff;background:#10155E;padding:5px;margin: 0;font-weight: normal}
  p {font-family: Verdana, Arial, sans-serif; font-size: 13px}
  p strong {
    color:#10155E;
    font-family: Palatino, Georgia, serif; 
    font-size: 15px;
    margin: 15px 0 -10px;
    display: inline-block; 
    width: 100%; 
    border-top: solid 1px gray;
    padding-top: 10px
  }
  p a {color: #10155E; text-decoration: none}
  a:hover {color: #efefef}
</style>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post box_wrapper" id="post-<?php the_ID(); ?>">
	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
</div>
<?php endwhile; endif; ?>