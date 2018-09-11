<?php

/************* UNDER CONSTRUCTION *******************/
I3D_Framework::defineTemplateRegion('under-construction', 
									'header-main', 
									'This is where your logo/website name is displayed',
									'pre-defined', 
									array(array('span' => 12, 'widgets' => 
																	 array(
																		   /* widgets */
																		   array('class_name' => 'I3D_Widget_Logo', 'defaults' => array('menu' => 'i3d-dropdown-menu-1'))
																		   ))));


I3D_Framework::defineTemplateRegion('under-construction', 
									'header-top', 
									'Located just below the affixed top bar, this region often contains such things as your phone number.',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('under-construction', 
									'seo', 
									'Sometimes this space is used to show the H1, H2, H3 and H4 page meta titles.',
									'user-defined', array("can-style-background" => false));

I3D_Framework::defineTemplateRegion('under-construction', 
									'header-lower', 
									'Located just below the logo region, this space is often used for auxilliary text links.',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('under-construction', 
									'advertising', 
									'Use this space is used a banner-ad, or call-to-action.',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('under-construction', 
									'divider-1', 
									'Optional Divider Region',
									'user-defined-divider', array("" => "None", "divider1" => "Light Diagonal Lines"));

I3D_Framework::defineTemplateRegion('under-construction', 
									'main', 
									'Use this region to display any widgets you may want to showcase',
									'pre-defined',	
									array(array('span' => 12, 'widgets' => 
																	 array(
																		   /* widgets */
																		   array('class_name' => 'I3D_Widget_ContentRegion', 'defaults' => array())
																		   ))));




?>