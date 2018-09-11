<?php
$i3dFrameworkVersion     = "4.0";
$i3dFrameworkRevision    = "Aquila";

$lmIncludedComponents = array();
$lmIncludedComponents['primary_flash_image_portfolio']     = false;
$lmIncludedComponents['primary_non_flash_image_portfolio'] = true;
$lmIncludedComponents['nivo_slider'] 					   = $lmIncludedComponents['primary_non_flash_image_portfolio'];
$lmIncludedComponents['mini_nivo_slider']                  = true;
$lmIncludedComponents['zoom_menu'] 						   = false;
$lmIncludedComponents['news_ticker'] 					   = true;
$lmIncludedComponents['mp3_music_player'] 				   = false;
$lmIncludedComponents['get_in_touch'] 					   = true;
$lmIncludedComponents['themed_image'] 					   = false;
$lmIncludedComponents['parallax_slider'] 				   = false;
$lmIncludedComponents['accordion_menu'] 				   = false;
$lmIncludedComponents['image_menu'] 				   	   = false;
$lmIncludedComponents['optional_headers']			   	   = true;

$lmIncludedComponentsSub = array();
$lmIncludedComponentsSub['news_ticker']['title']           = false;


// page layouts (to disable, simply add a // to the beginning of the line that you wish to not include
$lmTemplates = array();
if ($lmIncludedComponents['nivo_slider'] == true) {
  $lmTemplates[] = array("template-folder" => "primary-nivo-slider",           "template-name" => "Primary (with jQuery Image Gallery)");
}
if ($lmIncludedComponents['parallax_slider'] == true) {
	$lmTemplates[] = array("template-folder" => "primary-parallax-slider",                     "template-name" => "Primary (with Parallax Image Slider)");
}
if ($lmIncludedComponents['accordion_menu'] == true) {
	$lmTemplates[] = array("template-folder" => "primary-accordion-menu",                     "template-name" => "Primary (with Accordion Menu)");
}
if ($lmIncludedComponents['image_menu'] == true) {
	$lmTemplates[] = array("template-folder" => "primary-image-menu",                     "template-name" => "Primary (with Image Menu)");
}
if ($lmIncludedComponents['mini_nivo_slider'] == true) {
  $lmTemplates[] = array("template-folder" => "secondary-nivo-slider",           "template-name" => "Secondary (with jQuery Image Gallery)");
}

//$lmTemplates[] = array("template-folder" => "primary-split-image-rotator",   "template-name" => "Primary (with Split Image Rotator)");     // used to be called alternate
//$lmTemplates[] = array("template-folder" => "secondary-split-image-rotator", "template-name" => "Secondary (with Split Image Rotator)");   // used to be called secondary

$lmTemplates[] = array("template-folder" => "minimized",                     "template-name" => "Minimized");

$filesToInclude = array(
						"user_view/flash_zoom",
						"user_view/sidebar_display",
						"user_view/news_ticker",
						"user_view/get_in_touch",
						"user_view/tracking_code",
						"user_view/logo",
						"user_view/top_menu",
						"user_view/themed_object",
						"user_view/post_content",
						"user_view/h_tag",
						"user_view/sliders",
						"user_view/slider_nivo-slider",
						"user_view/slider_fullscreen-carousel",						
						"user_view/slider_jumbotron-carousel",						
						"user_view/slider_parallax-slider",						
						"user_view/slider_product-carousel",						
						"user_view/slider_amazing-slider",						
						"user_view/slider_video-slider",						
						"user_view/slider_blur-slider",					
						"user_view/slider_fullscreen-slider",					
						"user_view/soundcloud_player"					
						);

if ($lmIncludedComponents['parallax_slider'] == true) {
  $filesToInclude[] = "user_view/parallax_slider";
}

if ($lmIncludedComponents['accordion_menu'] == true) {
  $filesToInclude[] = "user_view/accordion_menu";
}

if ($lmIncludedComponents['image_menu'] == true) {
  $filesToInclude[] = "user_view/image_menu";
}
?>