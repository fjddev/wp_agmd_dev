<?php
/************* HOME *******************/


I3D_Framework::defineTemplateRegion('home', 
									'header-main', 
									'This is where your logo/website name is displayed',
									'pre-defined', 
									array(array('span' => 12, 'widgets' => 
																	 array(
																		   /* widgets */
																		   array('class_name' => 'I3D_Widget_Logo', 'defaults' => array('menu' => 'i3d-dropdown-menu-1'))
																		   ))));

I3D_Framework::defineTemplateRegion('home', 
									'top', 
									'This region contains your drop down menu and drop down contact form',
									'pre-defined', 
									array(array('span' => 9, 'widgets' => array(array('class_name' => 'I3D_Widget_Menu', 'defaults' => array('menu' => 'i3d-dropdown-menu-1')) )),
										  array('span' => 3, 'widgets' => array(array('class_name' => 'I3D_Widget_ContactFormMenu', 'defaults' => array("title" => "<i class='icon-envelope'></i> Contact Us", "form_id" => I3D_Framework::getContactFormID("Contact Box")))))
										));
										
I3D_Framework::defineTemplateRegion('home', 
									'showcase', 
									'The showcase region contains your image or video slider',
									'pre-defined', 
									array(array('span' => 12, 'widgets' => array(array('class_name' => 'I3D_Widget_SliderRegion', 'defaults' => array())))
																	 ));


I3D_Framework::defineTemplateRegion('home', 
									'header-top', 
									'Located just below the affixed top bar, this region often contains such things as your phone number.',
									'user-defined', array("can-style-background" => true));


I3D_Framework::defineTemplateRegion('home', 
									'seo', 
									'Sometimes this space is used to show the H1, H2, H3 and H4 page meta titles.',
									'user-defined', array("can-style-background" => false));

I3D_Framework::defineTemplateRegion('home', 
									'advertising', 
									'Use this space is used a banner-ad, or call-to-action.',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('home', 
									'header-lower', 
									'Located just below the logo region, this space is often used for auxilliary text links.',
									'user-defined', array("can-style-background" => true));


I3D_Framework::defineTemplateRegion('home', 
									'divider-1', 
									'Optional Divider Region',
									'user-defined-divider', array("" => "None", "divider1" => "Light Diagonal Lines"));

I3D_Framework::defineTemplateRegion('home', 
									'utility', 
									'The utility section contains your social media icon links, as well as the site search box.',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('home', 
									'divider-2', 
									'Optional Divider Region',
									'user-defined-divider', array("" => "None", "divider1" => "Light Diagonal Lines"));

I3D_Framework::defineTemplateRegion('home', 
									'breadcrumb', 
									'This is an optional region that may be used for whatever you wish, and shows up just below the SEO region.',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('home', 
									'divider-3', 
									'Optional Divider Region',
									'user-defined-divider', array("" => "None", "divider1" => "Light Diagonal Lines"));

I3D_Framework::defineTemplateRegion('home', 
									'main-top',  
									'The Main TOP region is often used to display info boxes.',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('home', 
									'divider-4', 
									'Optional Divider Region',
									'user-defined-divider', array("" => "None", "divider1" => "Light Diagonal Lines"));


I3D_Framework::defineTemplateRegion('home', 
									'main',
									'This region is the main content region of your page, where the regular textual content you write is  displayed.',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('home', 
									'divider-5', 
									'Optional Divider Region',
									'user-defined-divider', array("" => "None", "divider1" => "Light Diagonal Lines"));

I3D_Framework::defineTemplateRegion('home', 
									'main-bottom', 
									'Use this region to display any widgets you may want to showcase',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('home', 
									'divider-6', 
									'Optional Divider Region',
									'user-defined-divider', array("" => "None", "divider1" => "Light Diagonal Lines"));


I3D_Framework::defineTemplateRegion('home', 
									'lower',      
									'Use this region to display any widgets you may want to showcase',
									'user-defined', array("can-style-background" => true));

I3D_Framework::defineTemplateRegion('home', 
									'divider-7', 
									'Optional Divider Region',
									'user-defined-divider', array("" => "None", "divider1" => "Light Diagonal Lines"));

I3D_Framework::defineTemplateRegion('home', 
									'bottom', 
									'Use this region to display any widgets you may want to showcase',									
									'user-defined', array("can-style-background" => true));


I3D_Framework::defineTemplateRegion('home', 
									'footer',      
									'This region contains often contains such elements as the Quick Links and Social Media Icons',
									'user-defined', 'footer');
I3D_Framework::defineTemplateRegion('home', 
									'copyright',
									'Use this region to display any widgets you may want to showcase',									
									'user-defined', '');

?>