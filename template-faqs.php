<?php
/*
Template Name: FAQs
*/
I3D_Framework::template_header();
if ($pageTemplate == "default") {
	global $page_id;
  $pageTemplate = "faqs";
  $page_id = get_option("page_for_faqs");
	//	 $layoutData =  get_post_meta($auxPageID, "layout_regions", true);
}

if (I3D_Framework::use_global_layout()) {
	I3D_Framework::render_page_in_layout($page_id);
	return;
} 

?>
<div class="container-wrapper header-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
            	 <?php the_widget( 'I3D_Widget_Logo', I3D_Widget_Logo::getPageInstance($page_id));  ?>
            
            </div>
			<div class="col-lg-8">
				<div class="menu-top">
<nav class="navbar navbar-default cl-effect-1" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="menu-toggle">Main Menu</span>
      <span class="fa fa-th-list"></span>
    </button>

  </div>
<div class='collapse navbar-collapse navbar-ex1-collapse'>
                     <?php the_widget( 'I3D_Widget_ContactFormMenu', array("no_wrapper" => true, "justification" => "right", "title" => "<i class='icon-envelope'></i>", "form_id" => I3D_Framework::getPageContactFormID($page_id)));  ?>       
                     <?php the_widget( 'I3D_Widget_Menu', array("no_wrapper" => true, "theme_location" => I3D_Framework::getDropDownsMenuID($page_id), "menu_type" => "primary-horizontal"));  ?>

</div>
</nav>
				

				</div>
			</div>
		</div>
	</div>
</div>


<!-- header
================================================== -->
    
	<?php i3d_show_widget_region("header-top", array("container-wrapper", "container")); ?>	
  
	<?php i3d_show_widget_region("seo", array("content-wrapper minimized-header-bg", "container", "row")); ?> 		
    
    <?php i3d_show_widget_region("header-lower", array("container-wrapper", "container")); ?>




<div class="main-wrapper">
  <div class="main-content">
    <div id="content-scroller">
    <?php i3d_show_widget_region("advertising", array("container-wrapper", "container")); ?>

    <?php i3d_show_divider_region("divider-1"); ?> 		
    <?php i3d_show_widget_region("utility", array("container-wrapper", "container")); ?> 		
    <?php i3d_show_divider_region("divider-2"); ?> 		
    <?php i3d_show_widget_region("breadcrumb", array("container-wrapper", "container")); ?>
    <?php i3d_show_divider_region("divider-3"); ?> 		
    <?php i3d_show_widget_region("main-top", array("container-wrapper", "container")); ?>
    <?php i3d_show_divider_region("divider-4"); ?> 		
    <?php i3d_show_widget_region("main", array("container-wrapper", "container main-content-container"), "DEFAULT-CONTENT"); ?>
    <?php i3d_show_divider_region("divider-5"); ?> 		
    <?php i3d_show_widget_region("main-bottom", array("container-wrapper", "container")); ?>
    <?php i3d_show_divider_region("divider-6"); ?> 		
    <?php i3d_show_widget_region("lower", array("container-wrapper", "container")); ?>
    <?php i3d_show_divider_region("divider-7"); ?> 		
    <?php i3d_show_widget_region("bottom", array("container-wrapper", "container")); ?>
    </div>
    
<!-- Footer 
================================================== -->
<div class="container-wrapper bg2 padding-top-20">
</div>
<div class="container-wrapper footer-bg">
  <div class="container">
	<div class="footer">
		<footer class="row">

<?php i3d_show_widget_region("footer", array("container"), ""); ?>
<?php i3d_show_widget_region("copyright", array("container"), ""); ?>

		
		</footer>
    </div>
  </div>
</div>
<?php get_footer(); ?>
