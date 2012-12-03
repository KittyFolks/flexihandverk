<?php
  global $post;
  
  $texts['footer'] = '<p style="font-family: Verdana,Arial,sans-serif;font-size:12px">For å melde deg av nyhetsbrevet <a style="color:#000000" href="{unsubscription_url}">klikke her</a>.</p>';
  $texts['header'] = '<div class="header_txt"><h3 style="font-family: Palatino,Georgia,serif; font-size: 20px;padding: 20px 0 0 20px;margin:0">Hei {name}!</h3></div>';
  
  //$posts = get_posts('numberposts=3');
  query_posts('showposts=' . nt_option('posts', 3) . '&post_status=publish');
?>
<div id="header" style="background: #c9cacc; height: 30px; padding: 20px;">
  <h3 style="margin:5px 0 0 0;font-family: Palatino,Georgia,serif; font-size: 20px; float: left">Nyhetsbrev</h3>
  <a style="border:none;outline:none;text-decoration:none" href="<?php echo get_option('home'); ?>/">
    <img border="0" style="float: right" src="<?php bloginfo('template_directory'); ?>/images/logo.png"/>
  </a>
</div>
<div id="content" style="width: 600px; margin: 0 auto; padding: 0; font-family: Verdana,Arial,sans-serif">
  <?php echo $texts['header']; ?>
  <div class="content_mail" style="padding: 5px 20px 20px;margin:0">
    <p style="font-family: Verdana,Arial,sans-serif;font-size:12px; margin-bottom:5px"><?php echo get_option('blogname'); ?> [Din meldingstekst her!]</p>
    <div class="posts" style="margin-top:30px;border-top: dashed 1px gray; padding-top:10px">
      <?php while (have_posts()) { the_post(); ?>
        <h3 style="font-family: Palatino,Georgia,serif; font-size: 16px;margin:0">
          <a style="margin:0;color: #000000" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <span style="font-family: Verdana,Arial,sans-serif;font-size:12px"><?php echo the_excerpt(); ?></span>
        <hr style="border:none; border-bottom: solid 1px gray;margin:5px 0 10px 0" />
      <?php } ?>
    </div>
  </div>
</div>
<div id="footer" style="background: #FDB813;  padding: 5px 20px"><?php echo $texts['footer']; ?></div>
