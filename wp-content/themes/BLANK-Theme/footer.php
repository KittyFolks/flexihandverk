			
		    </div>
      </div>
    <div id="footer">
      
      <p>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?> - 
      <?php $user_info = get_userdata(1);
          echo($user_info->first_name .  " " . $user_info->last_name . " | " . $user_info->user_description . " | ");
        ?>post AT flexihandverk DOT no</p>
      <!--   <p style="float:right"><a href="http://www.flexihandverk.no/nyhetsbrev">Nyhetsbrev</a></p> -->
    </div>

	 <?php wp_footer(); ?>
	 <!-- Don't forget analytics -->
	 
	 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bottom.js" charset="utf-8"></script>
  </body>
</html>
