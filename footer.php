<?php global  $page_layout, $code_end_of_body, $copyright_message, $powered_by_message, $supportedSidebars, $myPageID, $lmCurrentSidebar, $pageTemplate;
global $i3d_using_external_header_call, $i3d_external_page_body;
if (@$i3d_using_external_header_call) {
 // print "page body end";
  $i3d_external_page_body = ob_get_clean();
  //print "footer start before ob";
  ob_start();
}

if ($pageTemplate != "photo-slideshow" && $page_layout != "photo-slideshow" && !($copyright_message == "" && $powered_by_message == "")) { ?>
<div class="container-wrapper copyright-bg">
	<div class="container">
		<div class="row">
          <div class='copyright'>
    
	
            <div id='copyright' class='pull-right'><?php echo $copyright_message; ?></div>
            <div id='powered_by'  class='pull-left'><?php echo $powered_by_message; ?></div>
            
        </div>
	</div>	
  </div>
</div>
<?php } ?>
<?php if ($pageTemplate != "photo-slideshow") { ?>



<?php } ?>
<!-- google analytics tracking -->
<div class="google-analytics">
<?php i3d_render_tracking_script(); ?>
</div>

<!-- misc scripts 1 -->
<div class="misc-scripts1">
</div>

<!-- misc scripts 2 -->
<div class="misc-scripts2">
</div>

<?php wp_footer(); ?>
</div>	
</div>
<?php i3d_render_soundcloud_player(); ?>

<?php echo $code_end_of_body; ?>
</body>
</html>
<?php 
if (@$i3d_using_external_header_call) {
  global $i3d_footer_output;
  $i3d_footer_output = "".ob_get_clean();
  require( get_stylesheet_directory() ."/index.php");
}
?>