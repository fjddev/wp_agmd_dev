<?php
function i3d_show_video_slider($sliderID, $styledBG = true) {
	
	global $lmPortfolioConfig;
	global $lmImageDefaults;
	global $page_id;
   // print "a";
    $sliders = get_option("i3d_sliders");
	$slider = $sliders["{$sliderID}"];
	
	$portfolioImages = $slider['slides'];
	if (!is_array($portfolioImages) || sizeof($portfolioImages) == 0) {
	//	print "in it")
	//$portfolioImages = array();
	//  $portfolioImages = get_option('luckymarble_nonflash_image_portfolio');
	}
	//print "b".sizeof($portfolioImages);
	//return;
	   wp_register_style( 'i3d-video-slider',  get_template_directory_uri() .'/Library/sliders/video-slider/css/video-slider.css');
	   wp_register_script('i3d-video-slider-js-1', get_template_directory_uri() .'/Library/sliders/video-slider/js/amazingslider.js', array('jquery'), '1.0' );
	   wp_register_script('i3d-video-slider-js-2', get_template_directory_uri() .'/Library/sliders/video-slider/js/initslider-1.js', array('i3d-video-slider-js-1'), '1.0' );

     wp_enqueue_style( 'i3d-video-slider' );
     wp_enqueue_script( 'i3d-video-slider-js-1' );
     wp_enqueue_script( 'i3d-video-slider-js-2' );
	 

 
if(is_array($portfolioImages)) {
?>

<div class="slidercontainer">


	
	<div id="amazingslider-1">
	<ul class="amazingslider-slides">
<?php
$postCount = 0;
$imageCount = 0;
foreach($portfolioImages as $image) {
		$imageCount++;

		// if the image id is "default" then it should reside in the default location which is in the themed images folder
		if($image['id'] == "default") {
			// if the image url is not match the default-image-prefix, then it must be on the demo server
			if (strpos($image['image'], $lmPortfolioConfig['default-image-prefix-nivo']) === false) {
				$imageURL = htmlentities(str_replace("portfolio-large-", $lmPortfolioConfig['default-image-prefix-nivo'], $image['image']));
			} else {
				$imageURL = htmlentities($image['image']);
			}

			if (!strstr(get_option("siteurl"), $imageURL )) {
				$imageURL = get_option("siteurl")."/wp-content/themes/".get_template().$imageURL;
			}

		// otherwise, it will be stored in an uploads folder two levels above the [theme] folder
		} else if ($image['id'] == "featured_image") {

			if ($image['link_type'] == "post") {

				if ($image['link'] == "") {
					$posts = get_posts(array('numberposts' => 1, 'offset' => $postCount++));
					$post = array_shift($posts);
					$image['link'] = $post->ID;
				} else {
					$post = get_post($image['link']);
				}

			}

			$imageID = get_post_meta($image['link'], '_thumbnail_id', true);
			$large_image_url = wp_get_attachment_image_src( $imageID, 'full');
			if ($large_image_url != "") {
				$imageURL = $large_image_url[0];
			} else {
				continue;
			}
		} else {
			if ($image['link'] == "" && $image['link_type'] == "post") {
				if ($image['link'] == "") {
					$posts = get_posts(array('numberposts' => 1, 'offset' => $postCount++));
					$post = array_shift($posts);
					$image['link'] = $post->ID;
				} else {
					$post = get_post($image['link']);
				}

			}


			$large_image_url = wp_get_attachment_image_src( $image['id'], 'full' );
			$imageURL = $large_image_url[0];
		}
	//	var_dump($large_image_url);
		$sliderConfig = I3D_Framework::getSlider("video-slider");
		$imageDimension = $sliderConfig['dimensions'];
		if (I3D_Framework::$useTimThumb) {
			$imageURL = str_replace("-".$large_image_url[1]."x".$large_image_url[2], "", $imageURL);
			$imageURL = str_replace("/", "|", $imageURL); // this is used to resolve issue of urls being blocked by hosting platforms such as hostgator
	
			$imageURL = get_option("siteurl")."/wp-content/themes/".get_template()."/includes/user_view/thumb.php?src=".$imageURL."&amp;w=".$imageDimension['width']."&amp;h=".$imageDimension['height']."&amp;zc=1&amp;q=90&amp;v=1";
		}
		// define the link
		if ($image['link_type'] == "external") {
			$linkURL = $image['link'];

		} else if ($image['link_type'] == "page") {
			if ($image['link'] == "") {
			 // $linkURL = "../../../";
				  $linkURL = home_url();

		  } else {/*
				$linkURL = str_replace(home_url().'/', '',get_page_link($image['link']));
				if ($linkURL == "" && $image['link'] != "") {
					$linkURL = $image['link'];
				} else {
					$linkURL = "../../../".$linkURL;
				}

				if ($image['link'] == get_option("page_on_front")) {
				  $linkURL = home_url();
				}
				*/
				$linkURL = get_page_link($image['link']);
				
				if ($image['link'] == get_option("page_on_front")) {
				  $linkURL = home_url();
				}
			}

		} else if ($image['link_type'] == "post") {

			if ($image['description'] == "") {
				// if no id specified, then it's the newest post
				$image['description'] = $post->post_title;
			}

			//$linkURL = str_replace(home_url().'/', '',get_page_link($image['link']));
				$linkURL = get_page_link($image['link']);

		}

			//$sliderCaption .= "<div id='image{$imageCount}' class='nivo-html-caption'>";
			//$sliderCaption .= "{$image['title']}";
			//$sliderCaption .= "{$image['description']}";

        if ($image['link'] == "") {
			$imageHTML =  '<img src="'.$imageURL.'" alt="" />';
		} else {
			$imageHTML =  "<img alt='".addslashes($image['title'])."' data-description='".addslashes($image['description'])."' src='{$imageURL}' />";
			$imageHTML .=  "<video preload='none' src='{$linkURL}'></video>";
		}
		
		$sliderCaption .= "<li><img src='{$imageURL}' alt='' /></li>";
		

	

?>



	
	
<!-- slide <?php echo $imageCount; ?> -->
		<li><?php echo $imageHTML; ?>
			
			
				
					
			
		</li>
<!--/slide <?php echo $imageCount; ?> -->
		
		<?php } // end of foreach ?>
	</ul>


	
<!-- captions -->	
<ul class="amazingslider-thumbnails">
<?php echo $sliderCaption; ?>
</ul>
	
	
</div>



    

    <script type="text/javascript">
jQuery(".amazingslider-slides").parents(".container-fluid").addClass("video-slider-bg");

</script>


<?php
  return true;
} else {
	return false;
}
}
?>