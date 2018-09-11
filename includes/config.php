<?php
/**********************************************************************************
 * wp-content/themes/[theme]/includes/config.php
 * Purpose: the main configurable (theme to theme) elements can be configured here
 * Last Updated: July 30, 2013
 **********************************************************************************/
global $_GET;
global $pageTemplate;
global $testMode;
$testMode = false;

include_once ("theme/config-typography.php");
include_once ("theme/config-sliders.php");
include_once ("theme/config-templates.php");

I3D_Framework::$conditionOffset = 0;
I3D_Framework::$conditionPeriod = 3;

$i3dBodyAttributes		 = 'data-spy="scroll" data-target=".bs-docs-sidebar"';
$i3dTextLogoLines        = 2;

$i3dBootstrapVersion   = 3;
$i3dFontAwesomeVersion = 4;

I3D_Framework::$bootstrapVersion	   = 3;
I3D_Framework::$fontAwesomeVersion	   = 4;
I3D_Framework::$socialMediaIconVersion = 2;
I3D_Framework::$navbarVersion		   = 3;
I3D_Framework::$quickLinksVersion	   = 2;
I3D_Framework::$logoVersion		   	   = 2;
I3D_Framework::$searchBoxVersion	   = 3;
I3D_Framework::$infoBoxVersion		   = 2;
I3D_Framework::$parallaxSliderVersion  = 2;
I3D_Framework::$layoutVersion          = 2; // when initializing, this is used to determine how the footer is set up
I3D_Framework::$numTopMenuItems        = 5; // when initializing, this is used to determine how many items in the header of the page
I3D_Framework::$defaultVectorIcon      = ''; // when initializing, this is used to set the logo icon

I3D_Framework::$defaultSidebarClasses 	= array(array("tag" => "div", "class" => "content-wrapper"), array("tag" => "div", "class" => "section-inner"), array("tag" => "div", "class" => "wrapper"), array("tag" => "div", "class" => "container"), array("tag" => "div", "class" => "row"));

I3D_Framework::$layoutEditorAvailable	 	= 1;
I3D_Framework::$recommendedLogoDimensions 		= "340x80";
I3D_Framework::$recommendedRetinaLogoDimensions = "680x160";

if (I3D_Framework::use_global_layout()) {
	
	I3D_Framework::$navbarVersion		   = 4;
}


I3D_Framework::$globalPageDividers = array("" => "None",
											   "gap-spacer-xs" => "Gap Spacer XS",
											   "gap-spacer-sm" => "Gap Spacer SM",
											   "gap-spacer-md" => "Gap Spacer MD",
											   "gap-spacer-lg" => "Gap Spacer LG",
											   "gap-spacer-xl" => "Gap Spacer XL",							   
											 "divider1" => "Light Diagonal Lines");


I3D_Framework::$optionalStyledBackgrounds = array("padding-top-40 padding-bottom-40 padding-left-20 padding-right-20" => "Padding 40",
												  "padding-bottom-20 padding-left-20 padding-right-20" => "Padding 20",
												  "" => "No Padding",
												  "bg1 padding-left-20 padding-right-20" => "Light", 
												  "bg2 padding-top-50 padding-bottom-50" => "Dark", 
												  "bg3" => "Diagonal Stripes", 
												  "bg4 padding-top-50 padding-bottom-50 padding-left-20 padding-right-20" => "White", 
												  "bg5 padding-top-50 padding-bottom-50" => "Photo Background (with translucent region)",
												  "default-slider-bg" => "Photo Background");

I3D_Framework::$optionalPageStyledEdges = array("/Site/styles/boxed-layouts/edges/shadow.css" => "Shadow (Default)",
												   "/Site/styles/boxed-layouts/edges/grunge.css" => "Grunge", 
												   "/Site/styles/boxed-layouts/edges/solid.css" => "Solid", 
												   "/Site/styles/boxed-layouts/edges/themed.css" => "Themed");

I3D_Framework::$optionalPageInnerBackground = array("/Site/styles/boxed-layouts/inner-background/inner-solid-color.css" => "Solid Color (Default)",
												   "/Site/styles/boxed-layouts/inner-background/inner-designed.css" => "Designed", 
												   "/Site/styles/boxed-layouts/inner-background/inner-transparent.css" => "Transparent", 
												   "/Site/styles/boxed-layouts/inner-background/inner-themed.css" => "Themed");

I3D_Framework::$optionalPageOuterBackground = array("-" => "None (Default)",
													"/Site/styles/boxed-layouts/outer-background/outer-blurred.css" => "Blurred",
												    "/Site/styles/boxed-layouts/outer-background/outer-designed.css" => "Designed", 
												    "/Site/styles/boxed-layouts/outer-background/outer-solid-color.css" => "Solid Color", 
												    "/Site/styles/boxed-layouts/outer-background/outer-themed.css" => "Themed");


$lmImageDefaults = array();
$lmImageDefaults['thumbnail']     = array('width' => 75, 'height' => 75);
$lmImageDefaults['small']         = array('width' => 380, 'height' => 200);
$lmImageDefaults['medium']        = array('width' => 600, 'height' => 298);
$lmImageDefaults['large']         = array('width' => 600, 'height' => 298);

$lmImageDefaults['posts-small']        = array('width' => 50, 'height' => 50);
$lmImageDefaults['posts-medium']       = array('width' => 75, 'height' => 75);
$lmImageDefaults['posts-large']        = array('width' => 200, 'height' => 100);
$lmImageDefaults['news-small']         = array('width' => 50, 'height' => 50);
$lmImageDefaults['news-medium']        = array('width' => 75, 'height' => 75);
$lmImageDefaults['news-large']         = array('width' => 420, 'height' => 200);

$lmImageDefaults['news-featured-1']     = array('width' => 924, 'height' => 200);/* 1 column */
$lmImageDefaults['news-featured-2']     = array('width' => 686, 'height' => 200);/* 2 column */
$lmImageDefaults['news-featured-3']     = array('width' => 456, 'height' => 200);/* 3 column */
$lmImageDefaults['news-featured-4']     = array('width' => 686, 'height' => 200); /* Magazine */
$lmImageDefaults['news-featured-5']     = array('width' => 686, 'height' => 200); /* Magazine */
$lmImageDefaults['news-featured-6']     = array('width' => 686, 'height' => 200);/* Magazine */
$lmImageDefaults['news-featured-7']     = array('width' => 686, 'height' => 200);/* Magazine */
$lmImageDefaults['news-featured-8']     = array('width' => 686, 'height' => 200);/* Magazine */
$lmImageDefaults['news-featured-9']     = array('width' => 686, 'height' => 200);/* Magazine */
$lmImageDefaults['news-featured-10']    = array('width' => 686, 'height' => 200);/* Magazine */
$lmImageDefaults['news-featured-11']    = array('width' => 686, 'height' => 200);/* Magazine */
$lmImageDefaults['news-featured-12']    = array('width' => 686, 'height' => 200);/* Magazine */

$lmImageDefaults['featured-page-thumbnail'] = array('width' => 260, 'height' => 136);
$lmImageDefaults['featured-page-animated-image-box'] = array('width' => 465, 'height' => 348);
$lmImageDefaults['placeholder'] 		= array('width' => 240, 'height' => 180);
$lmImageDefaults['placeholder-thumbnail'] 		= array('width' => 240, 'height' => 180);
$lmImageDefaults['placeholder-animated-image-box'] 		= array('width' => 480, 'height' => 360);


$i3dSupportedMenus['primary-horizontal']   = true;
$i3dSupportedMenus['primary-vertical']     = true;
$i3dSupportedMenus['primary-contact']      = true;
$i3dSupportedMenus['secondary-horizontal'] = true;
$i3dSupportedMenus['secondary-vertical']   = true;



$allSidebars =  array("default", "template-sitemap", "template-advanced", "template-contact", "template-faqs", "template-photo-slideshow", "template-sitemap", "template-home", "template-blog", "template-minimized", "template-under-construction", "template-team-members");

$i3dSupportedSidebars = array('i3d-widget-area-top'          => array('name' => 'Top', 
																	  'show_page_sidebar_configuration' => "template-advanced",
																	  'configurable' => array('advanced')),
							  'i3d-widget-area-header-top'   => array('name' => 'Header Top', 
																	  'show_page_sidebar_configuration' => "template-advanced",
																	  'configurable' => $allSidebars),																	  
							  'i3d-widget-area-header-main'  => array('name' => 'Header Main', 
																	  'show_page_sidebar_configuration' => "template-advanced",
																	  'configurable' => array('advanced')),
							  'i3d-widget-area-header-lower' => array('name' => 'Header Lower', 
																	  'show_page_sidebar_configuration' => "template-advanced",
																	  'configurable' => $allSidebars),
							  'i3d-widget-area-utility'      => array('name' => 'Utility', 
																	  'show_page_sidebar_configuration' => "default template-advanced template-sitemap template-contact-form template-blog template-faqs template-team-members template-blog-magazine",
																	  'configurable' => array('advanced')),																  
							  'i3d-widget-area-showcase'     => array('name' => 'Showcase', 
																	  'show_page_sidebar_configuration' => "default template-sitemap template-blog tempalte-blog-magazine",
																	  'configurable' => array('advanced')),																  
							  'i3d-widget-area-seo'          => array('name' => 'SEO', 
																	  'show_page_sidebar_configuration' => "default template-sitemap  template-business template-contact-form  template-blog template-faqs template-team-members",
																	  'configurable' => $allSidebars),																  
							  'i3d-widget-area-breadcrumb'   => array('name' => 'Breadcrumb', 
																	  'show_page_sidebar_configuration' => "default template-contact-form  template-blog template-faqs template-team-members template-blog-magazine",
																	  'configurable' => $allSidebars),							  
							  'i3d-widget-area-main-top'     => array('name' => 'Main Top', 
																	  'show_page_sidebar_configuration' => "default template-contact-form template-blog-traditional template-faqs template-team-members template-blog-magazine",
																	  'configurable' => $allSidebars),

							  'i3d-widget-area-main'     => array('name' => 'Main', 
																	  'show_page_sidebar_configuration' => "default template-contact-form tempalte-blog-magazine",
																	  'configurable' => $allSidebars),

							  'i3d-widget-area-main-bottom'  => array('name' => 'Main Bottom', 
																	  'show_page_sidebar_configuration' => "default template-contact-form template-blog template-faqs template-team-members template-blog-magazine",
																	  'configurable' => $allSidebars),
							  'i3d-widget-area-lower'        => array('name' => 'Lower', 
																	  'show_page_sidebar_configuration' => "default template-business template-contact-form template-blog template-faqs template-team-members template-blog-magazine",
																	  'configurable' => $allSidebars),
							  'i3d-widget-area-bottom'       => array('name' => 'Bottom', 
																	  'show_page_sidebar_configuration' => "default template-business template-contact-form template-blog template-faqs template-team-members template-blog-magazine",
																	  'configurable' => $allSidebars),
							  'i3d-widget-area-advertising'  => array('name' => 'Advertising', 
																	  'show_page_sidebar_configuration' => "default template-business template-contact-form template-blog template-faqs template-team-members template-blog-magazine",
																	  'configurable' => $allSidebars),
							  'i3d-widget-area-footer'       => array('name' => 'Footer', 
																	  'show_page_sidebar_configuration' => "default",
																	  'configurable' => array('advanced')),
							  'i3d-widget-area-copyright'    => array('name' => 'Copyright',
																	  'show_page_sidebar_configuration' => "default",
																	  'configurable' => $allSidebars));

include("framework/config-options.php");

// portfolio/nivo-slider defaults
$lmPortfolioConfig = array();
$lmPortfolioConfig['default-image-prefix']          		  = "holder"; // also used by the blog images
$lmPortfolioConfig['default-image-prefix-nivo']    			  = "portfolio-very-large-";
$lmPortfolioConfig['default-image-prefix-nivo-secondary']     = "portfolio-small-";



/*************** featured page BOX ****************/
//$lmWidgetWrapConfig['feature-page-box']['format']  = '<h3><a class="title-link" href="[titlehref]">[title]</a></h3><div class="centerpic"><a href="[imghref]">[img]</a></div><p>[description]</p>';
$lmWidgetWrapConfig['info-box']['thumbnail']['title']        = "Thumbnail";
$lmWidgetWrapConfig['info-box']['thumbnail']['widget_html']  = '<div class="img-thumbnail"><a href="[imghref]">[img]</a><div class="caption"><[title_tag]>[title]</[title_tag]>[hr]<p>[description]</p>[btn]</div></div>';
$lmWidgetWrapConfig['info-box']['thumbnail']['button_html']  = '<p class="center"><a href="[linkhref]" class="btn btn-primary">[button link text]</a></p>';
$lmWidgetWrapConfig['info-box']['thumbnail']['img_classes']  = "img-circle img-responsive";
$lmWidgetWrapConfig['info-box']['thumbnail']['options']      = array('image', 'title_text_linkable', 'title_tag', 'hr');


$lmWidgetWrapConfig['info-box']['hover-icon']['title']        = "Hover Icon";
$lmWidgetWrapConfig['info-box']['hover-icon']['widget_html']  = '<div class="vector-icon-info-box ">
<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a"><a class="hi-icon [hover_icon]" href="[titlehref]">[title]</a></div>
<div class="box1">
<[title_tag] class="small-caps text-center">[title]</[title_tag]>[hr]<p class="text-center"><small>[description]</small></p>[btn]</div></div>';
$lmWidgetWrapConfig['info-box']['hover-icon']['button_html']  = '<p class="text-center"><a href="[linkhref]" class="btn btn-primary">[button link text]</a></p>';
$lmWidgetWrapConfig['info-box']['hover-icon']['options']      = array('hover_icon', 'title_tag');


/*
$lmWidgetWrapConfig['info-box']['wrapbox']['title']        = "WrapBox";
$lmWidgetWrapConfig['info-box']['wrapbox']['widget_html']  = '<div class="snippet13"><h3 class="h3-lead">[title]</h3><h3 class="h3-bold">[title2]</h3><p>[description]</p>[btn]</div>';
$lmWidgetWrapConfig['info-box']['wrapbox']['button_html']  = '<button class="btn btn-small" type="button" onclick="document.location.href=\'[linkhref]\'">[button link text]</button>';
$lmWidgetWrapConfig['info-box']['wrapbox']['options']      = array('title_text_2');
*/
 
$lmWidgetWrapConfig['info-box']['animated-image-box']['title']        = "Animated Image Box";
$lmWidgetWrapConfig['info-box']['animated-image-box']['widget_html']  = '<section class="content-section content-init"><!--split--><article class="content-side content-side-[content_position]"><[title_tag]>[title]</[title_tag]>[hr]<p>[description]</p>[btn]</article><!--split--><figure class="content-side content-side-[image_position]">[img]</figure><!--split--></section>';
$lmWidgetWrapConfig['info-box']['animated-image-box']['button_html']  = '<p class="center"><a href="[linkhref]" class="btn btn-primary">[button link text]</a></p>';
$lmWidgetWrapConfig['info-box']['animated-image-box']['img_classes']  = "img-thumbnail img-responsive";
$lmWidgetWrapConfig['info-box']['animated-image-box']['options']      = array('image', 'title_text_linkable', 'title_tag', 'image_position');


// WPWFW 2 rev 1, custom component sidebars
// note, these can only implemented on ACTIVATION (activate=true) or UPGRADE (upgrade=true)
$lmUsesCustomComponentRegions = true;
$customComponentSidebars = array();
$customComponentSidebars['luckymarble-custom-component-1-widget-area'] = "Custom Component Region 1";
$customComponentSidebars['luckymarble-custom-component-2-widget-area'] = "Custom Component Region 2";
$customComponentSidebars['luckymarble-custom-component-3-widget-area'] = "Custom Component Region 3";

$filesToInclude[] = "user_view/custom_components";

$lmUsesConfigurableDropDowns = true;
$lmUpdaterAvailable          = true;
$topMenuTag 				 = "ul";

include("theme/config-layouts.php");

?>