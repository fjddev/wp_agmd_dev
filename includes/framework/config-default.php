<?php
/** this file must be included within the install-class.php file ONLY **/
I3D_Framework::addPage(array('post_title'   => 'Home',
							 'post_content' => 'You can use this area for more information about your business.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu mauris, elementum vel volutpat at, fermentum sed quam. Etiam massa leo, posuere a scelerisque eget, aliquet ut tellus. Sed quis urna elit. Praesent mattis lectus sed diam venenatis a accumsan magna fermentum. Sed porta luctus nulla sed ultrices. ',
										 'post_status' => 'publish',
										 'post_type' => 'page',
										 'menu_order' => 0,
										 'comment_status' => 'closed',
										 'ping_status' => 'closed'),
							 array('_wp_page_template' => 'template-home.php',
								   'i3d_page_title'			=> 'Your Home Page',
								   'i3d_page_description' 	=> 'This is an example Business home page.',
									'i3d_optional_title' 		=> 'Optional Content Title',
									'i3d_optional_description' => 'This is your optional content description',
									'layout_regions' => array('home' => array('header-top'   => array('sidebar' => '', 							'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => ''),
																			  'seo' 		 => array('sidebar' => '', 							'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => ''),
																			  'header-lower' => array('sidebar' => '', 							'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => ''),
																			  'advertising'  => array('sidebar' => '', 							'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => ''),
																			  'utility' 	 => array('sidebar' => 'i3d-widget-area-main-top', 	'columns' => '4', 'width' => 'contained', 'layout' => '3|3|3|3', 'bg' => 'padding-bottom-20 padding-left-20 padding-right-20'),
																			  'breadcrumb'	 => array('sidebar' => '', 							'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => ''),
																			  'divider-3'	 => array('bg' => 'divider1'),
																			  'main-top'	 => array('sidebar' => 'i3d-widget-area-custom-1', 	'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => 'bg2 padding-top-50 padding-bottom-50'),
																			  'divider-4'	 => array('bg' => 'divider1'),
																			  'main'		 => array('sidebar' => 'i3d-widget-area-main-2', 	'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => 'bg4 padding-top-50 padding-bottom-50 padding-left-20 padding-right-20'),
																			  'main-bottom'	 => array('sidebar' => '', 							'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => ''),
																			  'lower'		 => array('sidebar' => 'i3d-widget-area-lower', 	'columns' => '1', 'width' => 'fullscreen', 'layout' => '12', 	'bg' => 'bg5 padding-top-50 padding-bottom-50'),
																			  'bottom'		 => array('sidebar' => 'i3d-widget-area-bottom', 	'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => 'padding-top-40 padding-bottom-40 padding-left-20 padding-right-20'),
																			  'footer'		 => array('sidebar' => 'i3d-widget-area-footer', 	'columns' => '4', 'width' => 'contained', 'layout' => '4|4|2|2', 	'bg' => ''),
																			  'copyright'	 => array('sidebar' => '', 							'columns' => '1', 'width' => 'contained', 'layout' => '12', 	'bg' => ''),
																			 ))
										 )
							 );

I3D_Framework::addPage(array('post_title'   => 'Blog',
							 'post_content' => '',
										 'post_status' => 'publish',
										 'post_type' => 'page',
										 'menu_order' => 1,
										 'comment_status' => 'closed',
										 'ping_status' => 'closed'),
							 array('_wp_page_template' => 'template-blog.php',
										 'i3d_page_title'			=> 'Your Blog Page',
										 'i3d_page_description' 	=> 'This is an example blog page.',
										 'i3d_optional_title' 		=> '',
										 'i3d_optional_description' => '',
										 'selected_layout' => 'default-2l',
										 'selected_page_type' => 'blog',
										 
										 'blog' => array('read_more' => "Read More", 'style' => 'grid', 'read_more_arrow' => 1, 'columns' => 2, 'lead_with_full_width_post' => 1),
										 'layout_regions' => array('blog' => array('showcase' 	  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'header-top'	  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'seo' 		  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'header-lower' => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'advertising'  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'utility' 	  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'breadcrumb'	  => array('sidebar' => 'i3d-widget-area-breadcrumb', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'main-top'	  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'main'		  => array('sidebar' => 'i3d-widget-area-main-3', 'columns' => '2', 'width' => 'contained', 'layout' => '9|3', 'bg' => 'bg4 padding-top-50 padding-bottom-50 padding-left-20 padding-right-20'),
																				   'main-bottom'  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'lower'		  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'bottom'		  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				   'footer'		  => array('sidebar' => 'i3d-widget-area-footer', 'columns' => '4', 'width' => 'contained', 'layout' => '4|4|2|2', 'bg' => ''),
																				   'copyright'	  => array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => ''),
																				 ))
								)
							 );
I3D_Framework::addPage(array('post_title'   => 'About',
							 'post_content' => "<h2>A bit about our team...</h2>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ...

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
										 'post_status' => 'publish',
										 'post_type' => 'page',
										 'menu_order' => 2,
										 'comment_status' => 'closed',
										 'ping_status' => 'closed'),
							 array('_wp_page_template' => 'template-team-members.php',
										 'i3d_page_title'			=> 'About Us',
										 'i3d_page_description' 	=> 'Learn More About The Company',
										 'i3d_optional_title' 		=> '',
										 'i3d_optional_description' => '',
										 'layout_regions' => array('team-members' => array('header-top'   	=> array('sidebar' => '',   'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																				 		   'seo' 			=> array('sidebar' => 'i3d-widget-area-seo', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																				 		   'header-lower' 	=> array('sidebar' => '', 'columns' => '2', 'width' => 'contained', 'layout' => '6|6'),
																			  	 		   'advertising'  	=> array('sidebar' => 'i3d-widget-area-advertising', 'columns' => '1', 'width' => 'contained', 'layout' => '12', 'bg' => 'bg3'),
																				 		   'utility' 		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																				  		   'breadcrumb'		=> array('sidebar' => 'i3d-widget-area-breadcrumb', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																				 		   'main-top'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						   'main'			=> array('sidebar' => 'i3d-widget-area-main-4', 'columns' => '2', 'width' => 'contained', 'layout' => '9|3'),
																						   'main-bottom'	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						   'lower'			=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						   'bottom'			=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						   'footer'			=> array('sidebar' => 'i3d-widget-area-footer', 'columns' => '4', 'width' => 'contained', 'layout' => '4|4|2|2'),
																						   'copyright'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																				 ))

						)

							 );
I3D_Framework::addPage(array('post_title'   => 'Contact',
							 'post_content' => '[i3d_contact_form id="'.I3D_Framework::getContactFormID("We'd Love To Hear From You!").'"]',
										 'post_status' => 'publish',
										 'post_type' => 'page',
										 'menu_order' => 2,
										 'comment_status' => 'closed',
										 'ping_status' => 'closed'),
							 array('_wp_page_template' => 'template-contact.php',
										 'i3d_page_title'			=> 'Contact Us',
										 'i3d_page_description' 	=> '',
										 'i3d_optional_title' 		=> '',
										 'i3d_optional_description' => '',
										 'map' => array("primary_location" => "Saanich, BC, Canada", "height" => "300", "width" => "fullscreen", "zoom" => 12, 'type' => "roadmap", 'markers' => array(array('location' => "C2-100 Aldersmith Pl, Victoria, BC", 'label' => 'i3dTHEMES<br>C2-100 Aldersmith Pl<br>Victoria, BC, CANADA<br>1-866-943-5733'))),
										 'layout_regions' => array('contact' => array(	'header-top'   	=> array('sidebar' => '',   'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'seo' 			=> array('sidebar' => 'i3d-widget-area-seo', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'header-lower' 	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'advertising' 	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'utility' 		=> array('sidebar' => '', 'columns' => '2', 'width' => 'contained', 'layout' => '6|6'),
																						'breadcrumb'	=> array('sidebar' => 'i3d-widget-area-breadcrumb', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'main-top'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'main'			=> array('sidebar' => 'i3d-widget-area-main-4', 'columns' => '1', 'width' => 'contained', 'layout' => '9|3'),
																						'main-bottom'	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'lower'			=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'bottom'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'footer'		=> array('sidebar' => 'i3d-widget-area-footer', 'columns' => '4', 'width' => 'contained', 'layout' => '4|4|2|2'),
																						'copyright'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																				 ))
										 
										 )

							 );

I3D_Framework::addPage(array('post_title'   => 'FAQs',
							 'post_content' => '<h4>Frequently Asked Questions</h4><p>Here we answer some of the most common questions.</p>',
										 'post_status' => 'publish',
										 'post_type' => 'page',
										 'menu_order' => 3,
										 'comment_status' => 'closed',
										 'ping_status' => 'closed'),
							 array('_wp_page_template' => 'template-faqs.php',
										 'i3d_page_title'			=> 'FAQs',
										 'i3d_page_description' 	=> 'Learn Some Stuff Here!',
										 'i3d_optional_title' 		=> '',
										 'i3d_optional_description' => '',
										 'i3d_optional_description' => '',
										 'layout_regions' => array('faqs' => array(	'header-top'   	=> array('sidebar' => '',   'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'seo' 			=> array('sidebar' => 'i3d-widget-area-seo', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'header-lower' 	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'advertising' 	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'utility' 		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'breadcrumb'	=> array('sidebar' => 'i3d-widget-area-breadcrumb', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'main-top'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'main'			=> array('sidebar' => 'i3d-widget-area-main-4', 'columns' => '2', 'width' => 'contained', 'layout' => '9|3'),
																					'main-bottom'	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'lower'			=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'bottom'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																					'footer'		=> array('sidebar' => 'i3d-widget-area-footer', 'columns' => '4', 'width' => 'contained', 'layout' => '4|4|2|2'),
																					'copyright'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																				 ))
										 
										 )
							 );

I3D_Framework::addPage(array('post_title'   => 'Sitemap',
							 'post_content' => '',
										 'post_status' => 'publish',
										 'post_type' => 'page',
										 'menu_order' => 4,
										 'comment_status' => 'closed',
										 'ping_status' => 'closed'),
							 array('_wp_page_template' => 'template-sitemap.php',
										 'i3d_page_title'			=> 'Sitemap',
										 'i3d_page_description' 	=> '',
										 'i3d_optional_title' 		=> '',
										 'i3d_optional_description' => '',
										 'sitemap' => array("show_sitemap" => 1, "show_sitemap" => 1, "show_archives" => 1, "show_most_recent_posts" => 1),
										 'layout_regions' => array('sitemap' => array(	'header-top'   	=> array('sidebar' => '',   'columns' => '2', 'width' => 'contained', 'layout' => '12'),
																						'seo' 			=> array('sidebar' => 'i3d-widget-area-seo', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'header-lower' 	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'advertising' 	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'utility' 		=> array('sidebar' => 'i3d-widget-area-utility', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'breadcrumb'	=> array('sidebar' => 'i3d-widget-area-breadcrumb', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'main-top'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'main-bottom'	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'lower'			=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'bottom'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'footer'		=> array('sidebar' => 'i3d-widget-area-footer', 'columns' => '4', 'width' => 'contained', 'layout' => '4|4|2|2'),
																						'copyright'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																				 ))
										 
										 )
							 );


I3D_Framework::addPage(array('post_title'   => 'Photo Gallery',
							 'post_content' => '[gallery ids=""]',
										 'post_status' => 'publish',
										 'post_type' => 'page',
										 'menu_order' => 5,
										 'comment_status' => 'closed',
										 'ping_status' => 'closed'),
							 array('_wp_page_template' => 'template-photo-slideshow.php',
										 'i3d_page_title'			=> 'Photo Gallery',
										 'i3d_page_description' 	=> '',
										 'i3d_optional_title' 		=> '',
										 'i3d_optional_description' => '',
										 'slideshow' => array("slide_interval" => "5", "autoplay" => "1", "transition" => "0", "transition_speed" => "2"),
										 'layout_regions' => array()
										 
										 )
							 );



I3D_Framework::addPage(array('post_title'   => 'Privacy Policy',
							 'post_content' => '<h2>Web Site Privacy Policies</h2>
<h3>Company Name</h3>
	
<!-- privacy page center content -->

<p>We recongize that respecting user privacy over the Internet is of utmost importance. This privacy statement is designed to provide information about the privacy and data collection practices for the site: http://www.YOURWEBSITE.COM. The Site is operated by <span class="redfont">YOUR COMPANY NAME</span>.</p>
<p>If you have questions or concerns regarding this statement, you should first contact our site coordinator at <span class="redfont">YOU@YOUREMAILADDRESS.COM</span> or by postal mail to:</p>
<ul>
	<li>YOUR COMPANY NAME</li>
	<li>1234 STREET DRIVE</li>
	<li>CITY, STATE/PROVINCE</li>
	<li>POSTAL CODE</li>
</ul>
<p>Identifying Information. In general, you can visit the Site without telling us who you are or providing any information about yourself. In some areas of the Site, we ask you to provide information that will enable us to process an order, offer services that require registration, assist you with technical support issues or to follow up with you. Generally, <span class="redfont">COMPANY NAME</span> requests identifying information when you: </p>
<ul>
	<li>Register on any of our web sites. </li>
	<li>Place an order. </li>
	<li>Provide feedback to an online survey or tell us about an idea or suggestion. </li>
	<li>Participate in a rebate program, contest, or other promotional offer. </li>
	<li>Request a SPECIAL SERVICE</li>
	<li>Request information or files from technical support or customer service.</li>
</ul>
<p>In these instances, YOUR COMPANY NAME will ask for your name, address, e-mail address, phone number and other appropriate information needed to provide you with these services. In all instances, if you receive a newsletter or other mailing from us, you will always be able to &quot;unsubscribe&quot; to these mailings at any time.</p>
<p>What YOUR COMPANY NAME Will Do With Your Information. If you choose to give us personal information for any of the purposes above, this information is retained by YOUR COMPANY NAME and will only be used by YOUR COMPANY NAME to support your customer relationship with us. We will not add you to a mailing list, or newsletter without your registration for this service. We will only contact you if further information is required from you to complete a service.</p>
<p>What Others May Do With Your Information. YOUR COMPANY NAME does not share, rent, or sell any personally identifying information provided through our Site (such as your name or email address) to any outside organization for use in its marketing or solicitations. From time to time YOUR COMPANY NAME may use agents or contractors who will have access to your personal information to perform services for YOUR COMPANY NAME (such as DATABASE MAINTENANCE, FURTHER EXAMPLES), however, they are required by us to keep the information 
confidential and may not use it for any purpose other than to carry out the services for YOUR COMPANY NAME. In addition, YOUR COMPANY NAME may also share aggregate information about its customers and its web site visitors to advertisers, business partners, and other third parties. For example, we might share that our users are x percent PCs users and y percent Macintosh users. None of this information, however, will contain personal, identifying information about our users. </p>
<p>YOUR COMPANY NAME On-line Store. The YOUR COMPANY NAME On-line Store is designed to give you options concerning the privacy of your identifying information. If you choose, you can set up an account. This will allow you to have a customized order page for express ordering and to view your purchasing history. To protect your privacy, we have designed the Sites to include certain steps to verify your identity before granting you access or enabling you to make corrections in an account. You will always have access to this account information and can view it, update it or correct it at any time. To access your information, you will need to use a password. </p>
<p>When purchasing products through the our web site, the order form will also ask you to provide a daytime telephone number. However, the telephone number is only used to quickly resolve questions relative to an order, such as to clarify customer email addresses that are inactive, or entered incorrectly.</p>
<h4>Third Party Links</h4>
<p>YOURCOMPANYNAME.com does provide links to other sites. Other Internet sites and services have separate privacy and data collection practices. Once you leave WWW.YOURCOMPANYNAME.COM, YOUR COMPANY NAME cannot control, and has no responsibility for, the privacy policies or data collection activities at another site. </p>
<h4>Cookies </h4>
<p>At times, we will use a feature on your web browser to send your computer a &quot;cookie&quot;. We do not use cookies to retrieve any personal information from your computer. We only use cookies to learn ways to enhance our Sites, and to give you better, more personalized service while in our web site. You can reset your browser to refuse all cookies or indicate when a cookie is sent. However, some functions of the Sites will not function if you refuse cookies. These areas of our web site will have information posted about cookies, and when a cookie will be uploaded to your computer.</p>
<h4>Children&#39;s Privacy Protection</h4>
<p>YOUR COMPANY NAME is sensitive to the heightened need to protect the privacy of children under the age of 13. The vast majority of the material on our web site is not intended for children and is not targeted to children under the age of 13. We do not knowingly collect data from children and, if we learn that we have received personal data from a child, we will remove this information from our database. </p>
<h4>Changes to this Policy</h4>
<p>YOUR COMPANY NAME may from time to time revise its privacy policy. You should therefore periodically visit this page, so you are aware of any such revisions. We will not, however, use your existing information in a manner not previously disclosed. You will be advised and have the opportunity to opt out of any new use of your information. <br />Contacting Us. If you have any questions about our privacy policy and/or the practices of our web site, you can write to:</p>
<ul>
	<li>YOUR COMPANY NAME</li>
	<li>1234 STREET DRIVE</li>
	<li>CITY, STATE/PROVINCE</li>
	<li>POSTAL CODE</li>
</ul>
<h4>Credit Card Security</h4>
<p>We know customers are concerned about credit card security. We use one of the worlds largest funds transfer agencies - PayPal.<br />If you choose to use a PayPal account, your personal credit card information will not be given to YOUR COMPANY NAME.</p>',
										 'post_status' => 'publish',
										 'post_type' => 'page',
										 'menu_order' => 6,
										 'comment_status' => 'closed',
										 'ping_status' => 'closed'),
							 array('_wp_page_template' => 'template-default.php',
										 'i3d_page_title'			=> 'Privacy Policy',
										 'i3d_page_description' 	=> '',
										 'i3d_optional_title' 		=> '',
										 'i3d_optional_description' => '',										 
										 'layout_regions' => array('default' => array(	'header-top'   	=> array('sidebar' => '',   'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'seo' 			=> array('sidebar' => 'i3d-widget-area-seo', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'header-lower' 	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'advertising' 	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'utility' 		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'breadcrumb'	=> array('sidebar' => 'i3d-widget-area-breadcrumb', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'main-top'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'main'			=> array('sidebar' => 'i3d-widget-area-main-5', 'columns' => '2', 'width' => 'contained', 'layout' => '3|9'),
																						'main-bottom'	=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'lower'			=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'bottom'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																						'footer'		=> array('sidebar' => 'i3d-widget-area-footer', 'columns' => '4', 'width' => 'contained', 'layout' => '4|4|2|2'),
																						'copyright'		=> array('sidebar' => '', 'columns' => '1', 'width' => 'contained', 'layout' => '12'),
																				 ))
										 )
							 );

/***************************************************
 * WIDGET PLACEMENT IN SIDEBARS
 ***************************************************/
global $defaultWidgets;
$defaultWidgets = array(
			
					  'i3d-widget-area-top' 		   	=> array(
				 array('class_name' => 'I3D_Widget_Menu', 'default_settings' => array('justification' => 'left', 'menu' => I3D_Framework::getMenuID("I3D*Top"), 'menu_type' => 'primary-horizontal')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				 array('class_name' => 'I3D_Widget_ContactFormMenu', 'default_settings' => array('justification' => 'right', 'form_id' => I3D_Framework::getContactFormID("Contact Box"), 'title' => '<i class="icon-envelope"></i> Contact')),
																 
																 ),
					   'i3d-widget-area-header-main'   	=> array(
				 array('class_name' => 'I3D_Widget_Logo', 'default_settings' => array('graphic_logo' => '', 'website_name' => 'default', 'tagline' => 'default', 'justification' => 'left', 'vector_icon' => 'leaf')),														 
),
					   'i3d-widget-area-showcase'      	=> array(array('class_name' => 'I3D_Widget_SliderRegion', 'default_settings' => array('styled_bg' => '1'))),
					   'i3d-widget-area-seo'           	=> array(array('class_name' => 'I3D_Widget_SEOTags', 'default_settings' => array())),
																 
					   'i3d-widget-area-advertising'   	=> array(				 
												array('class_name' => 'I3D_Widget_CallToAction', 'default_settings' => array('default_call_to_action_id' => "i3d_cta_general"))
																),

					   'i3d-widget-area-breadcrumb'    	=> array(array('class_name' => 'I3D_Widget_Breadcrumb', 'default_settings' => array())),
					   'i3d-widget-area-main-top'      	=> array(
				array('class_name' => 'I3D_Widget_InfoBox', 'default_settings' => array('page' => '', 'hover_icon' => 'clock', 'title_text' => 'Info Box 1','title_text_2' => '','title_text_linkable' => '','description_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel feugiat sapien, et tristique tellus.\n\nMaecenas porttitor ligula eget turpis fermentum mollis. Sed vel consectetur leo.",'more_link_text' => '','page_image' => 'holder1','linktype' => 'external','layout' => 'hover-icon','linktarget' => '','external_url' => '#','title_tag' => 'h4','bold_lead_paragraph' => '1','hr' => '')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				array('class_name' => 'I3D_Widget_InfoBox', 'default_settings' => array('page' => '', 'hover_icon' => 'earth', 'title_text' => 'Info Box 2','title_text_2' => '','title_text_linkable' => '','description_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel feugiat sapien, et tristique tellus.\n\nMaecenas porttitor ligula eget turpis fermentum mollis. Sed vel consectetur leo.",'more_link_text' => '','page_image' => 'holder2','linktype' => 'external','layout' => 'hover-icon','linktarget' => '','external_url' => '#','title_tag' => 'h4','bold_lead_paragraph' => '1','hr' => '')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				array('class_name' => 'I3D_Widget_InfoBox', 'default_settings' => array('page' => '', 'hover_icon' => 'user', 'title_text' => 'Info Box 3','title_text_2' => '','title_text_linkable' => '','description_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel feugiat sapien, et tristique tellus.\n\nMaecenas porttitor ligula eget turpis fermentum mollis. Sed vel consectetur leo.",'more_link_text' => '','page_image' => 'holder3','linktype' => 'external','layout' => 'hover-icon','linktarget' => '','external_url' => '#','title_tag' => 'h4','bold_lead_paragraph' => '1','hr' => '')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				array('class_name' => 'I3D_Widget_InfoBox', 'default_settings' => array('page' => '', 'hover_icon' => 'pencil', 'title_text' => 'Info Box 4','title_text_2' => '','title_text_linkable' => '','description_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel feugiat sapien, et tristique tellus.\n\nMaecenas porttitor ligula eget turpis fermentum mollis. Sed vel consectetur leo.",'more_link_text' => '','page_image' => 'holder4','linktype' => 'external','layout' => 'hover-icon','linktarget' => '','external_url' => '#','title_tag' => 'h4','bold_lead_paragraph' => '1','hr' => '')),
				), 
					   'i3d-widget-area-main'        	=> array(
				 array('class_name' => 'I3D_Widget_ContentRegion', 'default_settings' => array()),	 		
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				 array('class_name' => 'I3D_Widget_Menu', 'default_settings' => array('justification' => 'left', 'menu' => I3D_Framework::getMenuID("I3D*Side"), 'menu_type' => 'primary-vertical')),
				 array('class_name' => 'WP_Widget_Meta', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Links', 'default_settings' => array()),																 				 
																 ), 
					   'i3d-widget-area-main-2'		   	=> array(
				 array('class_name' => 'I3D_Widget_SEOTags', 'default_settings' => array()),																 
				 array('class_name' => 'I3D_Widget_ContentRegion', 'default_settings' => array()),	 																		 
																 ), 
					   'i3d-widget-area-main-3'        	=> array(
				 array('class_name' => 'I3D_Widget_ContentRegion', 'default_settings' => array()),													 
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				 array('class_name' => 'WP_Widget_Categories', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Calendar', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Meta', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Links', 'default_settings' => array()),																 				 
				 
																 ),
					   'i3d-widget-area-main-4' 		=> array(
				 array('class_name' => 'I3D_Widget_ContentRegion', 'default_settings' => array()),													 
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
array('class_name' => 'I3D_Widget_FooterContactBox', 'default_settings' => array('title' => '<i class="icon-phone-sign icon-large"></i> Contact Info',
																								   'text' => '',
																								   'address' => '123 My St. | Anyplace USA', 
																								   'phone'   => "(555) 555-1234",
																								   'email'   => "you@yourweb.com",
																								   'contact' => "Your Name")),				 
					 array('class_name' => 'I3D_Widget_Menu', 'default_settings' => array('justification' => 'left', 'menu' => I3D_Framework::getMenuID("I3D*Side"), 'menu_type' => 'primary-vertical')),
				 array('class_name' => 'I3D_Widget_SocialMediaIconShortcuts', 'default_settings' => array('icon_size' => '-s', 'justification' => 'left', 'social_icon__facebook' => '1', 'social_icon__twitter' => '1', 'social_icon__googleplus' => '1', 'social_icon__pinterest' => '1', 'social_icon__tumblr' => '1', 'social_icon__rss' => '1')),

					),
					   'i3d-widget-area-main-5' 		=> array(
				array('class_name' => 'I3D_Widget_FooterContactBox', 'default_settings' => array('title' => '<i class="icon-phone-sign icon-large"></i> Contact Info',
																							   'text' => '',
																							   'address' => '123 My St. | Anyplace USA', 
																							   'phone'   => "(555) 555-1234",
																							   'email'   => "you@yourweb.com",
																							   'contact' => "Your Name")),				 
				 array('class_name' => 'I3D_Widget_Menu', 'default_settings' => array('justification' => 'left', 'menu' => I3D_Framework::getMenuID("I3D*Side"), 'menu_type' => 'primary-vertical')),
				 array('class_name' => 'I3D_Widget_SocialMediaIconShortcuts', 'default_settings' => array('icon_size' => '-s', 'justification' => 'left', 'social_icon__facebook' => '1', 'social_icon__twitter' => '1', 'social_icon__googleplus' => '1', 'social_icon__pinterest' => '1', 'social_icon__tumblr' => '1', 'social_icon__rss' => '1')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				 array('class_name' => 'I3D_Widget_ContentRegion', 'default_settings' => array()),													  
																 ),
					   'i3d-widget-area-main-6'     	=> array(
				 array('class_name' => 'WP_Widget_Calendar', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Meta', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Links', 'default_settings' => array()),																 				 
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),																 
				 array('class_name' => 'I3D_Widget_ContentRegion', 'default_settings' => array()),													 																 
																 ), 
					   'i3d-widget-area-lower'         	=> array(
				 array('class_name' => 'I3D_Widget_TestimonialRotator', 'default_settings' => array('delay' => "8", "limit" => 5)),	 
																 ),
					   'i3d-widget-area-bottom'        	=> array(
				array('class_name' => 'I3D_Widget_InfoBox', 'default_settings' => array('page' => '','title_text' => 'Animated Info Box 1','title_text_2' => '','title_text_linkable' => '','description_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis augue massa, sit amet dignissim erat accumsan vel. Vestibulum sodales facilisis placerat. Donec ac feugiat neque. Duis et consectetur mi. Ut id leo blandit, rutrum felis a, ultricies ipsum. Aliquam erat volutpat. Suspendisse euismod scelerisque nunc, et tincidunt elit placerat nec. Duis iaculis eu ante id luctus. Donec porttitor turpis imperdiet velit ullamcorper, at viverra nulla consectetur. ",'more_link_text' => 'Learn More','page_image' => 'holder1','linktype' => 'external','layout' => 'animated-image-box','linktarget' => '','external_url' => '#','title_tag' => 'h2','bold_lead_paragraph' => '1','hr' => '','image_position' => 'right')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				array('class_name' => 'I3D_Widget_InfoBox', 'default_settings' => array('page' => '','title_text' => 'Animated Info Box 2','title_text_2' => '','title_text_linkable' => '','description_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis augue massa, sit amet dignissim erat accumsan vel. Vestibulum sodales facilisis placerat. Donec ac feugiat neque. Duis et consectetur mi. Ut id leo blandit, rutrum felis a, ultricies ipsum. Aliquam erat volutpat. Suspendisse euismod scelerisque nunc, et tincidunt elit placerat nec. Duis iaculis eu ante id luctus. Donec porttitor turpis imperdiet velit ullamcorper, at viverra nulla consectetur. ",'more_link_text' => 'Learn More','page_image' => 'holder2','linktype' => 'external','layout' => 'animated-image-box','linktarget' => '','external_url' => '#','title_tag' => 'h2','bold_lead_paragraph' => '1','hr' => '','image_position' => 'left')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				array('class_name' => 'I3D_Widget_InfoBox', 'default_settings' => array('page' => '','title_text' => 'Animated Info Box 3','title_text_2' => '','title_text_linkable' => '','description_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis augue massa, sit amet dignissim erat accumsan vel. Vestibulum sodales facilisis placerat. Donec ac feugiat neque. Duis et consectetur mi. Ut id leo blandit, rutrum felis a, ultricies ipsum. Aliquam erat volutpat. Suspendisse euismod scelerisque nunc, et tincidunt elit placerat nec. Duis iaculis eu ante id luctus. Donec porttitor turpis imperdiet velit ullamcorper, at viverra nulla consectetur. ",'more_link_text' => 'Learn More','page_image' => 'holder3','linktype' => 'external','layout' => 'animated-image-box','linktarget' => '','external_url' => '#','title_tag' => 'h2','bold_lead_paragraph' => '1','hr' => '','image_position' => 'right')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				array('class_name' => 'I3D_Widget_InfoBox', 'default_settings' => array('page' => '','title_text' => 'Animated Info Box 4','title_text_2' => '','title_text_linkable' => '','description_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis augue massa, sit amet dignissim erat accumsan vel. Vestibulum sodales facilisis placerat. Donec ac feugiat neque. Duis et consectetur mi. Ut id leo blandit, rutrum felis a, ultricies ipsum. Aliquam erat volutpat. Suspendisse euismod scelerisque nunc, et tincidunt elit placerat nec. Duis iaculis eu ante id luctus. Donec porttitor turpis imperdiet velit ullamcorper, at viverra nulla consectetur. ",'more_link_text' => 'Learn More','page_image' => 'holder4','linktype' => 'external','layout' => 'animated-image-box','linktarget' => '','external_url' => '#','title_tag' => 'h2','bold_lead_paragraph' => '1','hr' => '','image_position' => 'left')),
																 
																 ),
					   'i3d-widget-area-footer'        	=> array(
				 array('class_name' => 'I3D_Widget_HTMLBox', 	'default_settings' => array('title' => 'About Our Company', 'text' => 'Add a small bit of information about your company here to help the search engines spider your page a bit better. As you add more information the content will expand. For best \'looks\' try to match the amount of text up with the height of the other containers in the footer.', 'justification' => 'center')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),

					array('class_name' => 'I3D_Widget_HTMLBox', 'default_settings' => array('title' => '<i class="icon-twitter icon-large"></i> Let\'s Get Social!', 'text' => 'Follow us on Twitter or become our Facebook friend. Social networking is becoming the most effective method for getting visitors to your website. Tweet, Make Friends or Get on Myspace terms with your visitors. Remove the icons you don\'t need, add more when you need to. Here are just some examples.', 'justification' => 'center')),
				 array('class_name' => 'I3D_Widget_SocialMediaIconShortcuts', 'default_settings' => array('icon_size' => '', 'justification' => 'center', 'social_icon__facebook' => '1', 'social_icon__twitter' => '1', 'social_icon__googleplus' => '1', 'social_icon__pinterest' => '1', 'social_icon__tumblr' => '1', 'social_icon__rss' => '1')),
				
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),
				 array('class_name' => 'I3D_Widget_Menu', 'default_settings' => array('justification' => 'left', 'menu' => I3D_Framework::getMenuID("I3D*Footer"), 'menu_type' => 'secondary-vertical', 'title' => 'Helpful Links')),
				 array('class_name' => 'I3D_Widget_ColumnBreak', 'default_settings' => array()),

				 array('class_name' => 'I3D_Widget_FooterContactBox', 'default_settings' => array('title' => 'Get In Touch!',
																								   'text' => '',
																								   'address' => '123 My St. | Anyplace USA', 
																								   'phone'   => "(555) 555-1234",
																								   'email'   => "you@yourweb.com",
																								   'contact' => "")),

																 ),
					
					   'i3d-widget-area-custom-1'      	=> array(
				 array('class_name' => 'I3D_Widget_HTMLBox', 'default_settings' => array('title' => 'Flexible, Mobile and Fully Responsive', 'text' => 'Built with the best responsive and mobile friendly coding, Bootstrap 3.0, HTML5 and CSS3 will display your web pages nicely on all devices.<br/><br/><img src="http://www.i3dthemes.com/_images/vxiii/bs-html5-logo.png" alt="" />', 'justification' => 'center')),
						),

					   'i3d-widget-area-right' => array(
				 array('class_name' => 'I3D_Widget_SearchForm', 'default_settings' => array('justification' => 'center', 'use_icon' => '1', 'title' => ''))	,								
				 array('class_name' => 'I3D_Widget_Menu', 'default_settings' => array('justification' => 'left', 'menu' => I3D_Framework::getMenuID("I3D*Side"), 'menu_type' => 'primary-vertical')),
				 array('class_name' => 'WP_Widget_Meta', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Links', 'default_settings' => array()),																 				 
				 array('class_name' => 'I3D_Widget_SocialMediaIconShortcuts', 'default_settings' => array('icon_size' => '-s', 'justification' => 'left', 'social_icon__facebook' => '1', 'social_icon__twitter' => '1', 'social_icon__googleplus' => '1', 'social_icon__pinterest' => '1', 'social_icon__tumblr' => '1', 'social_icon__rss' => '1')),

														),


					   'i3d-widget-area-left' => array(
				array('class_name' => 'I3D_Widget_SearchForm', 'default_settings' => array('justification' => 'center', 'use_icon' => '1', 'title' => '')),									 
				 array('class_name' => 'WP_Widget_Recent_Posts', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Categories', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Calendar', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Meta', 'default_settings' => array()),																 
				 array('class_name' => 'WP_Widget_Links', 'default_settings' => array()),																 				 
				 array('class_name' => 'I3D_Widget_SocialMediaIconShortcuts', 'default_settings' => array('icon_size' => '-s', 'justification' => 'left', 'social_icon__facebook' => '1', 'social_icon__twitter' => '1', 'social_icon__googleplus' => '1', 'social_icon__pinterest' => '1', 'social_icon__tumblr' => '1', 'social_icon__rss' => '1')),

														)							   
					   );

	
global $defaultPosts;
$defaultPosts = array(
		array('title' => 'Example Post 5', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce suscipit faucibus dui non dignissim. Integer mi tellus, dictum scelerisque venenatis eu, iaculis laoreet eros. Mauris et diam eu turpis mattis cursus et non lorem. Sed sit amet magna sed mi tempus porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin id faucibus tellus. Proin sollicitudin accumsan egestas.'),
		array('title' => 'Example Post 4', 'content' => 'Sed ipsum ante, cursus sit amet faucibus dictum, auctor in sapien. Nullam non nibh neque, ac congue felis. Vivamus pretium lacus sed elit luctus eget sagittis felis tempus. Phasellus cursus posuere tortor ac adipiscing. Cras sed massa est, pharetra posuere turpis. Integer eleifend, magna id bibendum convallis, dolor sapien auctor urna, sit amet commodo turpis quam ac orci.'),
		array('title' => 'Example Post 3', 'content' => 'Curabitur mollis est at diam adipiscing interdum. Proin vel libero ac tellus aliquam cursus. Sed in mauris diam, sed mollis velit. Cras ultricies tempus lectus, et pulvinar nunc auctor vitae. Donec malesuada bibendum eleifend. Donec gravida, est nec eleifend ullamcorper, mauris felis lobortis est, vel tincidunt est ante a odio.'),
		array('title' => 'Example Post 2', 'content' => 'Proin quis urna lorem. Ut ac dui et velit rutrum placerat. Donec vestibulum nibh at tortor elementum aliquet. Duis turpis mauris, porta ut tempus eu, euismod id lorem. Suspendisse tincidunt dapibus ipsum, sit amet mollis mauris aliquet ac. Integer risus dolor, eleifend sit amet tincidunt semper, tristique vel justo.'),
		array('title' => 'Example Feature Post', 'content' => 'Aliquam convallis interdum neque, non rhoncus leo feugiat eget. Duis id ultrices enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse rutrum diam eget ipsum consequat congue. Pellentesque lobortis tincidunt augue ac tempus. Proin ac risus erat. Aenean odio dui, porttitor et hendrerit a, semper ut nisi.'),
);


I3D_Framework::addSidebar("left", 	 "Left"); 
I3D_Framework::addSidebar("right", 	 "Right"); 

?>