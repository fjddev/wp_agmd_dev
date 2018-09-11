<?php
require_once "agmd-functions.php";

$templateName = ucwords(get_option("current_theme"));
$advancedMenu = array();

require_once("includes/framework/framework-class.php");


/***********************/
/**** INCLUDE FILES ****/
/***********************/
include(TEMPLATEPATH.'/includes/framework/includes.php');
include(TEMPLATEPATH.'/includes/admin/includes.php');
include(TEMPLATEPATH.'/includes/user_view/includes.php');
include(TEMPLATEPATH.'/includes/user_view/short_tags.php');
include(TEMPLATEPATH.'/includes/framework/functions.php');


if (!is_admin()) {
  add_action("wp_enqueue_scripts", "i3d_enqueue_scripts", 11) ;
}

function i3d_enqueue_scripts() {
	global $page_id, $settingOptions;
	global $page_layout;
	global $page_content_type;
	$page_layout = "";
	$page_content_type = "";
	if (I3D_Framework::use_global_layout()) {
	  $page_layout 	= get_post_meta($page_id, "selected_layout", true);	
	  $page_content_type 	= get_post_meta($page_id, "selected_page_type", true);	
	  
	  if ($page_layout == "") {
		$pageMeta = get_post_meta($page_id);
		if (@$pageMeta['_wp_page_template'][0] != "") {
		  $page_layout = str_replace("template-", "", str_replace(".php", "", $pageMeta['_wp_page_template'][0]));
		}
		  
	  } else if ($page_layout == "primary") {
		$page_layout = "home";  
	  }
	  
	 // print "page_layout = $page_layout";
		if ($page_layout == "" || $page_content_type == "") {
		//	print "yeah";
			$pageMeta = get_post_meta($page_id);
			if (@$pageMeta['_wp_page_template'][0] != "") {
			  $pageTemplate = str_replace("template-", "", str_replace(".php", "", $pageMeta['_wp_page_template'][0]));
			} else {
				$pageTemplate = "";
			}
			if ($pageTemplate == "blog") {
				$page_content_type = "blog";
			} else if ($pageTemplate == "sitemap") {
				$page_content_type = "sitemap";
			} else if ($pageTemplate == "faqs") {
				$page_content_type = "faqs";
			} else if ($pageTemplate == "under-construction") {
				$page_content_type = "default";
			} else if ($pageTemplate == "minimized") {
				$page_content_type = "default";
			} else if ($pageTemplate == "home") {
				$page_content_type = "default";
			} else if ($pageTemplate == "advanced") {
				$page_content_type = "default";
			} else if ($pageTemplate == "contact") {
				$page_content_type = "contact";	
			} else if ($pageTemplate == "events-calendar") {
				$page_content_type = "default";
			} else if ($pageTemplate == "team-members") {
				$page_content_type = "team-members";
			} else if ($pageTemplate == "photo-slideshow") {
				$page_content_type = "photo-slideshow";
			} else {
				$page_content_type = "default";
			}
		}
	
		
		
		if ($page_layout == "") {
		  $page_layout = I3D_Framework::get_default_layout_id($page_id);	
		}	  
	}
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('comment-reply');
    wp_register_script('i3d-modernizr-js',  get_template_directory_uri().'/Library/sliders/parallax-slider/js/modernizr.custom.28468.js', array('jquery'), '1.0' );
    wp_register_script('i3d-modernizr2-js',  get_template_directory_uri().'/Site/icons/js/component.js', array('jquery'), '1.0' );
    wp_register_script('i3d-modernizr-79639-js',  get_template_directory_uri().'/Library/sliders/fullscreen-slider/js/modernizr.custom.79639.js', array('jquery'), '1.0' );
	
	wp_enqueue_script( 'aquila-bootstrap-js', get_template_directory_uri().'/Site/javascript/bootstrap/bootstrap.min.js', array('jquery'), '1.0' );
	wp_enqueue_script( 'aquila-theme-js',    get_template_directory_uri().'/Site/javascript/special_functions.js', array('jquery'), '1.0' );
	//wp_enqueue_script( 'aquila-jquery-style-js',    get_template_directory_uri().'/Site/javascript/jquery.style.js', array('jquery'), '1.0' );
	wp_enqueue_script( 'aquila-framework-js',    get_template_directory_uri().'/Site/javascript/aquila.js', array('jquery'), '1.0' );
	wp_enqueue_script( 'i3d-modernizr2-js');
	
	global $pageTemplate;
	//if ($pageTemplate == "contact") {
		  wp_enqueue_script( 'aquila-google-maps', 'https://maps.google.com/maps/api/js?key=AIzaSyBrB_tWpTV_xOg6khHXLwIRio8Et48u-r8&v=3.exp&amp;sensor=false&amp;language=en&libraries=common,util,geocoder,map,overlay,onion,marker,infowindow,controls', array('jquery'), '1.0' );
		  wp_enqueue_script( 'aquila-gomap', get_template_directory_uri().'/Site/javascript/gomap/jquery.gomap-1.3.2.min.js', array('jquery', 'aquila-google-maps'), '1.0' );
	//}

	if ($pageTemplate == "blog" || $page_content_type == "blog") {
		wp_enqueue_script( 'masonry');
		wp_enqueue_script( 'masonry-init', get_template_directory_uri()."/Site/javascript/masonry-init.js", array('masonry'), null );
		//print "yes";
	}

	if ($pageTemplate == "photo-slideshow" || $page_layout == "photo-slideshow") {
		wp_enqueue_script( 'aquila-jquery-easing',  get_template_directory_uri().'/Library/sliders/supersized-slideshow/js/jquery.easing.min.js', array('jquery'), '1.0' );
		wp_enqueue_script( 'aquila-jquery-photo-slideshow-1',  get_template_directory_uri().'/Library/sliders/supersized-slideshow/js/supersized.3.2.7.min.js', array('jquery'), '1.0' );
		wp_enqueue_script( 'aquila-jquery-photo-slideshow-2',  get_template_directory_uri().'/Library/sliders/supersized-slideshow/theme/supersized.shutter.min.js', array('jquery'), '1.0' );
		wp_enqueue_style( 'aquila-photo-slideshow-css-1',                get_template_directory_uri().'/Library/sliders/supersized-slideshow/css/supersized.css');
		wp_enqueue_style( 'aquila-photo-slideshow-css-2',                get_template_directory_uri().'/Library/sliders/supersized-slideshow/theme/supersized.shutter.css');
	}
	
	wp_enqueue_style( 'aquila-bootstrap',                get_template_directory_uri().'/Site/styles/bootstrap.css');
	wp_enqueue_style( 'aquila-fontawesome',              'http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css');
	wp_enqueue_style( 'aquila-theme-styles',             get_template_directory_uri().'/Site/styles/styles.css');

	wp_enqueue_style( 'aquila-theme-components', 			get_template_directory_uri().'/Site/styles/components.css');
	wp_enqueue_style( 'aquila-theme-on-scroll-content', 			get_template_directory_uri().'/Site/styles/misc/on-scroll-content.css');
	wp_enqueue_style( 'aquila-theme-hover-icons', 			get_template_directory_uri().'/Site/icons/css/hovericons.css');
	
	// used for the call to action
	wp_enqueue_style( 'aquila-theme-animate', 			get_template_directory_uri().'/Site/styles/animate.css');

    // animated info box scroller
	wp_enqueue_script( 'aquila-theme-animations-1', 			get_template_directory_uri().'/Site/javascript/bootstrap/cbpScroller.js');
	wp_enqueue_script( 'aquila-theme-animations-2', 			get_template_directory_uri().'/Site/javascript/bootstrap/classie.js');

   // avante styles
   	wp_enqueue_style( 'google-font-opensans', 			'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800');
   	wp_enqueue_style( 'google-font-ptsans', 			'http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700');
   	wp_enqueue_style( 'google-font-raleway', 			'http://fonts.googleapis.com/css?family=Raleway:700');
     
    // page styles
    $pageStyle = get_post_meta($page_id, 'page_styles', true);
	if (!is_array($pageStyle)) {
		$pageStyle = array();
		$useGlobal = true;
	}
	if ($pageStyle['edge'] == "default" || $useGlobal) {
		$globalEdgeStyle = $settingOptions["page_edge_style"];
		if ($globalEdgeStyle == "") {
			$globalEdgeStyle = array_shift(array_keys(I3D_Framework::$optionalPageStyledEdges));
		}
		$pageStyle['edge'] = $globalEdgeStyle;
	} 
	if ($pageStyle['edge'] != "" && $pageStyle['edge'] != "-") {
   		  wp_enqueue_style( 'aquila_theme_page_styled_edge', 			get_template_directory_uri().$pageStyle['edge']);
	}		

	if ($pageStyle['inner'] == "default" || $useGlobal) {
		$globalInnerStyle =  $settingOptions["page_inner_style"];
		if ($globalInnerStyle == "") {
			$globalInnerStyle = array_shift(array_keys(I3D_Framework::$optionalPageInnerBackground));
		}
		$pageStyle['inner'] = $globalInnerStyle;
	} 
	if ($pageStyle['inner'] != "" && $pageStyle['inner'] != "-") {
   		  wp_enqueue_style( 'aquila_theme_page_styled_inner', 			get_template_directory_uri().$pageStyle['inner']);
	}		

	if ($pageStyle['outer'] == "default" || $useGlobal) {
		$globalOuterStyle =  $settingOptions["page_outer_style"];
		if ($globalOuterStyle == "") {
			
			$globalOuterStyle = array_shift(array_keys(I3D_Framework::$optionalPageOuterBackground));
		}
		$pageStyle['outer'] = $globalOuterStyle;
	} 
	if ($pageStyle['outer'] != "" && $pageStyle['outer'] != "-") {
   		  wp_enqueue_style( 'aquila_theme_page_styled_outer', 			get_template_directory_uri().$pageStyle['outer']);
	}	
	



}




?>