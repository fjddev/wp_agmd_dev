<?php 
/*
 Template Name: Under Construction 
*/
I3D_Framework::template_header();

if (I3D_Framework::use_global_layout()) {
	I3D_Framework::render_page_in_layout($page_id);
	return;
} 
?>
<div class="container-wrapper header-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style='min-height: 80px'>
            	 <?php the_widget( 'I3D_Widget_Logo', I3D_Widget_Logo::getPageInstance($page_id));  ?>
            
            </div>
		</div>
	</div>
</div>


<!-- header
================================================== -->
	
	<?php i3d_show_widget_region("header-top", array("container-wrapper", "container")); ?>	
  
	<?php i3d_show_widget_region("seo", array("content-wrapper minimized-header-bg", "container", "row")); ?> 		
    
    <?php i3d_show_widget_region("header-lower", array("container-wrapper", "container")); ?>
	





<!-- Main content
================================================== -->
<div class="main-wrapper">
  <div class="main-content">
    <?php i3d_show_widget_region("advertising", array("container-wrapper", "container")); ?>
    <?php i3d_show_divider_region("divider-1"); ?> 		  
    <div class="container-wrapper"> 
	  <div class="container text-center padding-bottom-40">
               <?php i3d_post_content(); ?>
	  </div>
    </div>



<?php get_footer(); ?>
