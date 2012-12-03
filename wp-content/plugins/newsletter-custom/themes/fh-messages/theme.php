<?php
global $post;

$texts['footer'] = '<p style="font-family: Verdana,Arial,sans-serif;font-size:12px">
  <a style="color:#000000" href="http://www.flexihandverk.no">www.flexihandverk.no</a>
  </p>';

?>
<div id="header" style="background: #c9cacc; height: 30px; padding: 20px;">
<a style="border:none;outline:none;text-decoration:none" href="<?php echo get_option('home'); ?>/">
  <img border="0" style="float: right" src="<?php bloginfo('template_directory'); ?>/images/logo.png"/>
</a>
</div>
<div id="content" style="width: 600px; margin: 0; padding: 0; font-family: Verdana,Arial,sans-serif">
  <div class="content_mail" style="padding: 5px 20px 20px">
        {message}
  </div>
</div>
<div id="footer" style="background: #FDB813;  padding: 5px 20px"><?php echo $texts['footer']; ?></div>
