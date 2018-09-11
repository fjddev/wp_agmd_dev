<?php
I3D_Framework::add_layout_preset(array("logo" => 
									  array(
										"columns" => array(
											array('wrappers' => array(), 
												  'widgets' => array(array('class_name' => 'I3D_Widget_Logo', 
																		   'id' 		=> 'logo',
																		   'defaults'   => array("graphic_logo" => "disabled", "website_name" => "default", "tagline_setting" => "default")))
												  
												  )																										  
									  	), // end of columns
										'layout' => '12', 
										"container" => array(array("tag" => "div", "class" => "sticky-menubar"),
															 array("tag" => "div", "class" => "container")),
										"name" => "Logo",
										"section" => array("header", "main-menu"),
										"description" => "Typically used as the top row in this theme when you don't want a top menu."
									  )
									  ));

I3D_Framework::add_layout_preset(array("logo-menu" => 
									  array(
										"columns" => array(
											array('wrappers' => array(), 
												  'widgets' => array(array('class_name' => 'I3D_Widget_Logo', 
																		   'id' 		=> 'logo',
																		   'defaults'   => array("graphic_logo" => "disabled", "website_name" => "default", "tagline_setting" => "default")))
												  
												  ),
											array('wrappers' => array(),
												  'widgets' => array(array('class_name' => 'I3D_Widget_Menu',
																		   'id' 		=> 'menu',
																		   'defaults' => array('theme_location' => 'i3d-dropdown-menu-1', 'justification' => 'right')) )
												  ) 																										  
									  	), // end of columns
										'layout' => '6|6', 
										"container" => array(
															 array("tag" => "div", "class" => "row")),
										"name" => "Logo | Menu",
										"section" => array("header", "main-menu"),
										"description" => "Typically used as the top row in this theme."
									  )
									  ));
I3D_Framework::add_layout_preset(array("logo-menu-contactbox" => 
									  array(
										"columns" => array(
											array('wrappers' => array(), 
												  'widgets' => array(array('class_name' => 'I3D_Widget_Logo', 
																		   'id' 		=> 'logo',
																		   'defaults'   => array("graphic_logo" => "disabled", "website_name" => "default", "tagline_setting" => "default")))
												  
												  ),
											array('wrappers' => array(),
												  'widgets' => array(array('class_name' => 'I3D_Widget_ContactFormMenu',
																		   'id' 		=> 'menu',
																		   'defaults' => array("no_wrapper" => true, "justification" => "right", "title" => "<i class='icon-envelope'></i>", "form_id" => "cf_default_cb", "resposition" => true)),
											
												  array('class_name' => 'I3D_Widget_Menu',
																		   'id' 		=> 'menu',
																		   'defaults' => array('theme_location' => 'i3d-dropdown-menu-1', 'justification' => '')) )

											) 																										  
									  	), // end of columns
										'layout' => '4|8', 
										"container" => array(
															 ),
										"name" => "Logo | Menu | Contact Box",
										"section" => array("header", "main-menu"),
										"description" => "Typically used as the top row in this theme."
									  )
									  ));






I3D_Framework::add_layout_preset(array("minimized-header" => 
									  array(
										"columns" => array(
											array('wrappers' => array(), 
												  'widgets' => array(array('class_name' => 'I3D_Widget_SEOTags', 
																		   'id' 		=> 'seo',
																		   'defaults'   => array('justification' => 'center')))
												  
												  ),
																																				  
									  	), // end of columns
										'layout' => '12', 
										"container" => array(array("tag" => "div", "class" => "content-wrapper minimized-header-bg"),
															 array("tag" => "div", "class" => "container")),
										"name" => "Minimized Header",
										"section" => array("main", "header"),
										"description" => "Single column containing the page title with stylized background image"

									  )
									  ));

I3D_Framework::add_layout_preset(array("contact-panel" => 
									  array(
										"columns" => array(
											array('wrappers' => array(), 
												  'widgets' => array(array('class_name' => 'I3D_Widget_ContactPanel', 
																		   'id' 		=> 'contactpanel',
																		   'defaults'   => array('sidebar' => 'i3d-widget-area-header-top')))
												  
												  ),
																																				  
									  	), // end of columns
										'layout' => '12', 
										
										"container" => array(),
										"name" => "Contact Panel",
										"section" => array("contact-panel"),
										"description" => "A special region that is styled to provide a drop in contact panel."

									  )
									  ));

I3D_Framework::add_layout_preset(array("content" => 
									  array(
										"columns" => array(
											array('wrappers' => array(), 
												  'widgets' => array(array('class_name' => 'I3D_Widget_ContentRegion', 
																		   'id' 		=> 'content',
																		   'defaults'   => array()))
												  
												  ),
																																				  
									  	), // end of columns
										'layout' => '12', 
										
										"container" => array(array("tag" => "div", "class" => "content-wrapper"),
															 array("tag" => "div", "class" => "section-inner"),
															 array("tag" => "div", "class" => "wrapper"),
															 array("tag" => "div", "class" => "container"),
															 array("tag" => "div", "class" => "row")),
										"name" => "Content Region",
										"section" => array("main"),
										"description" => "Single column content region row."

									  )
									  ));

I3D_Framework::add_layout_preset(array("content-sidebar" => 
									  array(
										"columns" => array(
											array('wrappers' => array(), 
												  'widgets' => array(array('class_name' => 'I3D_Widget_ContentRegion', 
																		   'id' 		=> 'content-left',
																		   'defaults'   => array()))
												  
												  ),
											array('wrappers' => array(),
												  'widgets' => array(array('class_name' => 'I3D_Widget_SidebarRegion',
																		   'id' 		=> 'sidebar-right',
																		   'defaults' => array('sidebar' => 'i3d-widget-area-right')) )
												  ) 																										  
									  	), // end of columns
										'layout' => '9|3', 
										"container" => array(array("tag" => "div", "class" => "content-wrapper"),
															 array("tag" => "div", "class" => "section-inner"),
															 array("tag" => "div", "class" => "wrapper"),
															 array("tag" => "div", "class" => "container"),
															 array("tag" => "div", "class" => "row")),
										"name" => "Content | Sidebar",
										"section" => array("main"),
										
										"description" => "Two column row with a left content region and a right sidebar."

									  )
									  ));

I3D_Framework::add_layout_preset(array("sidebar-content" => 
									  array(
										"columns" => array(
											array('wrappers' => array(),
												  'default-width' => 3,
												  'hard-width' => false,
												  'widgets' => array(array('class_name' => 'I3D_Widget_SidebarRegion',
																		   'id' 		=> 'sidebar-left',
																		   'defaults' => array('sidebar' => 'i3d-widget-area-left')) )
												  ),														   
											array('wrappers' => array(), 
												  'default-width' => 9, 
												  'hard-width' => false,
												  'widgets' => array(array('class_name' => 'I3D_Widget_ContentRegion', 
																		   'id' 		=> 'content-right',
																		   'defaults'   => array()))
												  
												  ),
																										  
									  	), // end of columns
										'layout' => '3|9', 
										"container" => array(array("tag" => "div", "class" => "content-wrapper"),
															 array("tag" => "div", "class" => "section-inner"),
															 array("tag" => "div", "class" => "wrapper"),
															 array("tag" => "div", "class" => "container"),
															 array("tag" => "div", "class" => "row")),
										"name" => "Sidebar | Content",
										"section" => array("main"),
										"description" => "Two column row with a left sidebar and a content region right."

									  )
									  ));

I3D_Framework::add_layout_preset(array("sidebar-content-sidebar" => 
									  array(
										"columns" => array(
											array('wrappers' => array(),
												  'hard-width' => false,
												  'widgets' => array(array('class_name' => 'I3D_Widget_SidebarRegion',
																		   'id' 		=> 'sidebar-left',
																		   'defaults' => array('sidebar' => 'i3d-widget-area-left')) )
												  ),														   
											array('wrappers' => array(array("tag" => "div", "class" => "")), 
												  'hard-width' => false,
												  'widgets' => array(array('class_name' => 'I3D_Widget_ContentRegion', 
																		   'id' 		=> 'content-center',
																		   'defaults'   => array()))
												  
												  ),
											array('wrappers' => array(),
												  'hard-width' => false,
												  'widgets' => array(array('class_name' => 'I3D_Widget_SidebarRegion',
																		   'id' 		=> 'sidebar-right',
																		   'defaults' => array('sidebar' => 'i3d-widget-area-right')) )
												  ),														   
																										  
									  	), // end of columns
										'layout' => '3|6|3', 
										"container" => array(array("tag" => "div", "class" => "content-wrapper"),
															 array("tag" => "div", "class" => "section-inner"),
															 array("tag" => "div", "class" => "wrapper"),
															 array("tag" => "div", "class" => "container"),
															 array("tag" => "div", "class" => "row")),
										"name" => "Sidebar | Content | Sidebar",
										"section" => array("main"),

										"description" => "Three column row with a left and right sidebar and a center content region."

									  )
									  ));


/* general presets */


I3D_Framework::add_layout_preset(array("primary-slider" => 
									  array(
										"columns" => array(
											array('wrappers' => array(),
												  'widgets' => array(array('class_name' => 'I3D_Widget_SliderRegion',
																		   'id' 		=> 'slider',
																		   'defaults' => array()) )
												  ) 																										  
									  	), // end of columns
										'layout' => '12', 
										"container" => array(),
										"name" => "Primary Slider",
										"section" => array("primary-slider"),
										
										"description" => "Featured Primary Layout Slider"

									  )
									  ));

I3D_Framework::add_layout_preset(array("secondary-slider" => 
									  array(
										"columns" => array(
											array('wrappers' => array(),
												  'widgets' => array(array('class_name' => 'I3D_Widget_SliderRegion',
																		   'id' 		=> 'slider',
																		    'defaults' => array('slider' => 'default-amazing-slider')) )
												  ) 																										  
									  	), // end of columns
										'layout' => '12', 
										"container" => array(
															 array("tag" => "div", "class" => "content-wrapper"),
															 array("tag" => "div", "class" => "container"), 
															 
															 array("tag" => "div", "class" => "row")),
										"name" => "Secondary Slider",
										"section" => array("secondary-slider"),
										
										"description" => "Secondary Layout Slider"

									  )
									  ));

I3D_Framework::add_layout_preset(array("photo-slideshow" => 
									  array(
										"columns" => array(
											array('wrappers' => array(),
												  'widgets' => array(array('class_name' => 'I3D_Widget_PhotoSlideshow',
																		   'id' 		=> 'slideshow',
																		   'defaults' => array()) )
												  ) 																										  
									  	), // end of columns
										'layout' => '12', 
										"container" => array(),
										"name" => "Fullscreen Photo Slideshow",
										"section" => array("photo-slideshow"),
										
										"description" => "Fullscreen Photo Slideshow"

									  )
									  ));

I3D_Framework::add_layout_preset(array("map-banner" => 
									  array(
										"columns" => array(
											array('wrappers' => array(),
												  'widgets' => array(array('class_name' => 'I3D_Widget_MapBanner',
																		   'id' 		=> 'mapbanner',
																		   'defaults' => array()) )
												  ) 																										  
									  	), // end of columns
										'layout' => '12', 
										"container" => array(array("tag" => "div", "class" => "clear-both section-bordered contact-map-container")),
										"name" => "Map Banner",
										"section" => array("main", "header"),		
										"description" => "Map Banner"

									  )
									  ));

I3D_Framework::add_layout_preset(array("content-map-banner" => 
									  array(
										"columns" => array(
											array('wrappers' => array(array("tag" => "div", "class" => "")), 
												  'hard-width' => false,
												  'widgets' => array(array('class_name' => 'I3D_Widget_ContentRegion', 
																		   'id' 		=> 'content-center',
																		   'defaults'   => array()))
												  
												  ),
														   
											array('wrappers' =>  array(array("tag" => "div", "class" => "clear-both section-bordered contact-map-container")),
												  'widgets' => array(array('class_name' => 'I3D_Widget_MapBanner',
																		   'id' 		=> 'mapbanner',
																		   'defaults' => array()) )
												  ) 																										  
									  	), // end of columns
										'layout' => '6|6', 
										"container" => array(array("tag" => "section", "class" => "container")),


										"name" => "Content | Map Banner",
										"section" => array("main"),		
										"description" => "Content Section with Map on the right"

									  )
									  ));

I3D_Framework::add_layout_preset(array("map-banner-content" => 
									  array(
										"columns" => array(
											array('wrappers' =>  array(array("tag" => "div", "class" => "clear-both section-bordered contact-map-container")),
												  'widgets' => array(array('class_name' => 'I3D_Widget_MapBanner',
																		   'id' 		=> 'mapbanner',
																		   'defaults' => array()) )
												  ),																										  
											array('wrappers' => array(array("tag" => "div", "class" => "")), 
												  'hard-width' => false,
												  'widgets' => array(array('class_name' => 'I3D_Widget_ContentRegion', 
																		   'id' 		=> 'content-center',
																		   'defaults'   => array()))
												  
												  )
														   
									  	), // end of columns
										'layout' => '6|6', 
										"container" => array(array("tag" => "section", "class" => "container")),


										"name" => "Map Banner | Content",
										"section" => array("main"),		
										"description" => "Content Section with map on the left"

									  )
									  ));


I3D_Framework::add_layout_preset(array("footer-sidebar" => 
									  array(
										"columns" => array(
											array('wrappers' => array(),
												  'widgets' => array(array('class_name' => 'I3D_Widget_SidebarRegion',
																		   'defaults' => array()) )
												  ) 																										  
									  	), // end of columns
										'layout' => '12', 
										"container" => array(array("tag" => "div", "class" => "class1 class2 class3"),
															 array("tag" => "div", "class" => "anotherclass1 anotherclass2")),
										"name" => "Footer Sidebar",
										"section" => array("footer"),
										
										"description" => "Two column row with a left content region and a right sidebar."

									  )
									  ));

I3D_Framework::add_default_layout("default", 
								  "Minimized", 
								  true,
								  array(
										"main-menu" 	=> array("rows" => array("main-menu"  => array("visibility" => array(), "status" => "enabled", "title" => "Main Menu", "type" => "preset", "presets" => "logo-menu", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|8"))), 
										"header"		=> array("rows" => array("minimized-header" => array("visibility" => array(), "status" => "enabled", "title" => "Minimized Header", "type" => "preset", "presets" => "minimized-header", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "12"))),
										"main" 			=> array("rows" => 
																 array(
																	   
																 
																	   "breadcrumb" => array("visibility" => array(), "status" => "enabled", "title" => "Breadcrumb", "type" => "widget", "widget" => "I3D_Widget_Breadcrumb", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => "section2 section2b"),
																	   "content" => array("visibility" => array(), "status" => "enabled", "title" => "Main Content", "type" => "preset", "presets" => "content", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => "section2"),
																 )), 
										"footer" 		=> array("rows" => array("footer"  => array("visibility" => array(), "status" => "enabled", "title" => "Footer", "type" => "sidebar", "sidebar" => "i3d-widget-area-footer", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|4|2|2")))));

I3D_Framework::add_default_layout("default-2r", 
								  "Minimized 2R", 
								  false,
								  array(
										"main-menu" 	=> array("rows" => array("main-menu"  => array("visibility" => array(), "status" => "enabled", "title" => "Main Menu", "type" => "preset", "presets" => "logo-menu", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|8"))), 
										"header"		=> array("rows" => array("minimized-header" => array("visibility" => array(), "status" => "enabled", "title" => "Minimized Header", "type" => "preset", "presets" => "minimized-header", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "12"))),					
										"main" 			=> array("rows" => 
																 array(
																	 "breadcrumb" => array("visibility" => array(), "status" => "enabled", "title" => "Breadcrumb", "type" => "widget", "widget" => "I3D_Widget_Breadcrumb", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => "section2 section2b"),
																	 "content" => array("visibility" => array(), "status" => "enabled", "title" => "Main Content", "type" => "preset", "presets" => "content-sidebar", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "9|3", "styles" => "section2"),
																 
																 )), 
										"footer" 		=> array("rows" => array("footer"  => array("visibility" => array(), "status" => "enabled", "title" => "Footer", "type" => "sidebar", "sidebar" => "i3d-widget-area-footer", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|4|2|2")))));

I3D_Framework::add_default_layout("default-2l", 
								  "Minimized 2L", 
								  false,
								  array(
										"main-menu" 	=> array("rows" => array("main-menu"  => array("visibility" => array(), "status" => "enabled", "title" => "Main Menu", "type" => "preset", "presets" => "logo-menu", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|8"))), 
										"header"		=> array("rows" => array("minimized-header" => array("visibility" => array(), "status" => "enabled", "title" => "Minimized Header", "type" => "preset", "presets" => "minimized-header", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "12"))),										
										"main" 			=> array("rows" => array(
																	   "breadcrumb" => array("visibility" => array(), "status" => "enabled", "title" => "Breadcrumb", "type" => "widget", "widget" => "I3D_Widget_Breadcrumb", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => "section2 section2b"),
																	   "content" => array("visibility" => array(), "status" => "enabled", "title" => "Main Content", "type" => "preset", "presets" => "sidebar-content", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "3|9", "styles" => "section2"),
																 
																 )), 
										"footer" 		=> array("rows" => array("footer"  => array("visibility" => array(), "status" => "enabled", "title" => "Footer", "type" => "sidebar", "sidebar" => "i3d-widget-area-footer", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|4|2|2")))));




I3D_Framework::add_default_layout("primary", 
								  "Primary", 
								  false,
								  array(
										"main-menu" 	=> array("rows" => array("main-menu"  => array("visibility" => array(), "status" => "enabled", "title" => "Main Menu", "type" => "preset", "presets" => "logo-menu-contactbox", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|8"))), 
										"primary-slider"=> array("rows" => array("primary-slider"  => array("visibility" => array(), "status" => "enabled", "title" => "Primary Slider", "type" => "preset", "presets" => "primary-slider", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => ""))),
										
										"main" 			=> array("rows" => array(
																			 "feature-boxes"  => array("visibility" => array(), "status" => "enabled", "title" => "Feature Boxes", "type" => "sidebar", "sidebar" => "i3d-widget-area-main-top", "columns" => 0, "orderable" => false, "stylable" => true, "layout" => "3|3|3|3", "styles" => ""),
																			 "home-top-1" => array("visibility" => array(), "status" => "enabled", "title" => "Call To Action", "type" => "sidebar", "sidebar" => "i3d-widget-area-advertising", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => ""), 
																			 
																			 "home-top-2" => array("visibility" => array(), "status" => "enabled", "title" => "Quotator", "type" => "sidebar", "sidebar" => "i3d-widget-area-lower", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => "bg5 padding-top-50 padding-bottom-50", 'width' => 'fullscreen'),
																			
																			 "content" => array("visibility" => array(), "status" => "enabled", "title" => "Main Content", "type" => "preset", "presets" => "content", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => "padding-top-40 padding-bottom-40"),
																			 "info-boxes" => array("visibility" => array(), "status" => "enabled", "title" => "Info Boxes", "type" => "sidebar", "sidebar" => "i3d-widget-area-bottom", "columns" => 1, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => ""),
																													  )), 
										"footer" 	=> array("rows" => array("footer"  => array("visibility" => array(), "status" => "enabled", "title" => "Footer", "type" => "sidebar", "sidebar" => "i3d-widget-area-footer", "columns" => 0, "orderable" => false, "stylable" => true, "layout" => "4|4|2|2")))));

I3D_Framework::add_default_layout("secondary", 
								  "Secondary", 
								  false,
								  array(
										"main-menu" 	=> array("rows" => array("main-menu"  => array("visibility" => array(), "status" => "enabled", "title" => "Main Menu", "type" => "preset", "presets" => "logo-menu", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|8"))), 
										"secondary-slider" => array("rows" => array("secondary-slider"  => array("visibility" => array(), "status" => "enabled", "title" => "Secondary Slider", "type" => "preset", "presets" => "secondary-slider", "columns" => 0, "orderable" => false, "stylable" => true, "layout" => "12", "styles" => "default-slider-bg", 'width' => 'fullscreen'))),  
										"main" 		=> array("rows" => array(
																			 "content" => array("visibility" => array(), "status" => "enabled", "title" => "Main Content", "type" => "preset", "presets" => "content", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => "section2"),
																													  )), 
										"footer" 	=> array("rows" => array("footer"  => array("visibility" => array(), "status" => "enabled", "title" => "Footer", "type" => "sidebar", "sidebar" => "i3d-widget-area-footer", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|4|2|2")))));


I3D_Framework::add_default_layout("photo-slideshow", 
								  "Photo Slideshow", 
								  false,
								  array(
										"main-menu" 	=> array("rows" => array("main-menu"  => array("visibility" => array(), "status" => "enabled", "title" => "Main Menu", "type" => "preset", "presets" => "logo-menu", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|8"))), 										
										"photo-slideshow" => array("rows" => array("photo-slideshow"  => array("visibility" => array(), "status" => "enabled", "title" => "Photo Slideshow", "type" => "preset", "presets" => "photo-slideshow", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => ""))),  
										));

I3D_Framework::add_default_layout("contact", 
								  "Contact", 
								  false,
								  array(
										"main-menu" 	=> array("rows" => array("main-menu"  => array("visibility" => array(), "status" => "enabled", "title" => "Main Menu", "type" => "preset", "presets" => "logo-menu", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|8"))), 										
										"header"		=> array("rows" => array("minimized-header" => array("visibility" => array(), "status" => "enabled", "title" => "Minimized Header", "type" => "preset", "presets" => "minimized-header", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "12"))),				
										"main" 			=> array("rows" => array(
																	   "map-banner" => array("visibility" => array(), "status" => "enabled", "title" => "Map Banner", "type" => "preset", "presets" => "map-banner", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "12"),						   
																	   "content" => array("visibility" => array(), "status" => "enabled", "title" => "Main Content", "type" => "preset", "presets" => "content", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => "section2")),
																 ), 
										"footer" 		=> array("rows" => array("footer"  => array("status" => "enabled", "title" => "Footer", "type" => "sidebar", "sidebar" => "i3d-widget-area-footer", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|4|2|2")))));

I3D_Framework::add_default_layout("contact-2r", 
								  "Contact 2R", 
								  false,
								  array(
										"main-menu" 	=> array("rows" => array("main-menu"  => array("visibility" => array(), "status" => "enabled", "title" => "Main Menu", "type" => "preset", "presets" => "logo-menu", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|8"))), 
										"header"		=> array("rows" => array("minimized-header" => array("visibility" => array(), "status" => "enabled", "title" => "Minimized Header", "type" => "preset", "presets" => "minimized-header", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "12"))),
										"main" 			=> array("rows" => array(
																	   					   
																	   "content" => array("visibility" => array(), "status" => "enabled", "title" => "Main Content", "type" => "preset", "presets" => "content-map-banner", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "9|3", "styles" => "section2")),
																 ), 
										"footer" 		=> array("rows" => array("footer"  => array("status" => "enabled", "title" => "Footer", "type" => "sidebar", "sidebar" => "i3d-widget-area-footer", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|4|2|2")))));

I3D_Framework::add_default_layout("contact-2l", 
								  "Contact 2L", 
								  false,
								  array(
										"main-menu" 	=> array("rows" => array("main-menu"  => array("visibility" => array(), "status" => "enabled", "title" => "Main Menu", "type" => "preset", "presets" => "logo-menu", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|8"))), 
										"header"		=> array("rows" => array("minimized-header" => array("visibility" => array(), "status" => "enabled", "title" => "Minimized Header", "type" => "preset", "presets" => "minimized-header", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "12"))),
										
										"main" 			=> array("rows" => array(
																	   						   
																	   "content" => array("visibility" => array(), "status" => "enabled", "title" => "Main Content", "type" => "preset", "presets" => "map-banner-content", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "3|9", "styles" => "section2")),
																 ), 
										"footer" 		=> array("rows" => array("footer"  => array("status" => "enabled", "title" => "Footer", "type" => "sidebar", "sidebar" => "i3d-widget-area-footer", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|4|2|2")))));

I3D_Framework::add_default_layout("under-construction", 
								  "Under Construction", 
								  true,
								  array(
										
										
										"main-menu" 	=> array("rows" => array("header"  => array("visibility" => array(), "status" => "enabled", "title" => "Top", "type" => "preset", "presets" => "logo", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "12"))), 

											"header"		=> array("rows" => array("minimized-header" => array("visibility" => array(), "status" => "enabled", "title" => "Minimized Header", "type" => "preset", "presets" => "minimized-header", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "12"))),
									"main" 			=> array("rows" => array(
																	   "content" => array("visibility" => array(), "status" => "enabled", "title" => "Main Content", "type" => "preset", "presets" => "content", "columns" => 0, "orderable" => true, "stylable" => true, "layout" => "12", "styles" => "section2")),
																 ), 
										"footer" 		=> array("rows" => array("footer"  => array("visibility" => array(), "status" => "enabled", "title" => "Footer", "type" => "sidebar", "sidebar" => "i3d-widget-area-footer", "columns" => 0, "orderable" => false, "stylable" => false, "layout" => "4|4|2|2")))));



I3D_Framework::set_layout_section_wrapper_code("contact-panel", '', "", array());







I3D_Framework::set_layout_section_wrapper_code("primary-slider", '<!-- slider begin --><div class="container-wrapper"><div class="section-inner"><div class="wrapper"><div class="container"><div class="slider-wrapper">', '</div></div></div></div></div><!-- slider end -->', array());

I3D_Framework::set_layout_section_wrapper_code("secondary-slider", 	 '<!-- slider begin -->', '<!-- slider end -->', array(), array());

I3D_Framework::set_layout_section_wrapper_code("photo-slideshow", "", '', array());

I3D_Framework::set_layout_section_wrapper_code("main-menu", '<div class="container-wrapper header-top"><div class="container"><div class="row">', "</div></div></div>", array());
I3D_Framework::set_layout_section_wrapper_code("header", '<!-- header begin -->', "<!-- header end -->", array());


I3D_Framework::set_layout_section_wrapper_code("utility-bar", '<div class="header-bottom">', "</div>", array(array("tag" => "div", "class" => "container")));

//I3D_Framework::set_layout_section_wrapper_code("photo-slideshow-header", '<div class="container-wrapper header-top"><div class="container"><div class="row">', "</header></div></div></div></div></div>", array());
//I3D_Framework::set_layout_section_wrapper_code("photo-slideshow-header", '<header class="header">', '</header>', array(array("tag" => "div", "class" => "container"), array("tag" => "div", "class" => "row inner")));
I3D_Framework::set_layout_section_wrapper_code("main", 	 "<!-- main start --><div class='main-wrapper'><div class='main-content'><div id='content-scroller'>", '</div><!-- main end -->', array(), array(array("tag" => "div", "class" => "container-wrapper"), array("tag" => "div", "class" => "section-inner"), array("tag" => "div", "class" => "wrapper"), array("tag" => "div", "class" => "container")));
I3D_Framework::set_layout_section_wrapper_code("footer", "<!-- footer start --><div class='container-wrapper bg2 padding-top-20'></div>", '<!-- footer end --></div></div>', array(), array(array("tag" => "div", "class" => "container-wrapper footer-bg"), array("tag" => "div", "class" => "container"), array("tag" => "div", "class" => "footer"), array("tag" => "footer", "class" => "row")));


?>