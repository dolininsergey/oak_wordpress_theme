<?php
$options = array(
'general-setting-tab' => array(
    'type' => 'tab',
    'options' => array(
	      'logo' => array(
	          'type' => 'upload',
	          'label' => __('Logo', 'unyson'),
	          'desc' => __('Please select the logo image. Highly recommended size 93 x 21', 'unyson'),
	      ),
				'social-links-box' => array(
				    'type' => 'box',
				    'options' => array(
					      'facebook-social'  => array( 
							    'type'  => 'text',
							    'value' => '',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Facebook', '{domain}'),	
									'desc'  => __('Type the link in format http://facebook.com/...', '{domain}'),							    		    										        	
				  ), 
					      'twitter-social'  => array( 
							    'type'  => 'text',
							    'value' => '',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Twitter', '{domain}'),
									'desc'  => __('Type the link in format http://twitter.com/...', '{domain}'),							    			    										        	
				  ),
					      'flickr-social'  => array( 
							    'type'  => 'text',
							    'value' => '',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Flickr', '{domain}'),
									'desc'  => __('Type the link in format http://flickr.com/...', '{domain}'),							    			    										        	
				  ),
					      'dribbble-social'  => array( 
							    'type'  => 'text',
							    'value' => '',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Dribbble', '{domain}'),		
									'desc'  => __('Type the link in format http://dribbble.com/...', '{domain}'),							    	    										        	
				  ),
					      'pinterest-social'  => array( 
							    'type'  => 'text',
							    'value' => '',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Pinterest', '{domain}'),
									'desc'  => __('Type the link in format http://pinterest.com/...', '{domain}'),							    			    										        	
				  ),
					      'linkedin-social'  => array( 
							    'type'  => 'text',
							    'value' => '',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('LinkedIn', '{domain}'),	
									'desc'  => __('Type the link in format http://linkedin.com/...', '{domain}'),							    		    										        	
				  ),				  				  				  				   
				    ),
				    'title' => __('Socials', '{domain}'),
				    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
				),
    ),
    'title' => __('General', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),	
'home_page_tab' => array(
    'type' => 'tab',
    'options' => array(
        'group_id' => array(
			    'type' => 'group',
			    'options' => array(
												'slider-description-box' => array(
												    'type' => 'box',
												    'options' => array(
																'slider-main-images-tab' => array(
																    'type' => 'tab',
																    'options' => array(
							                        'main_slider_img_1' => array(
							                            'type' => 'upload',
							                            'label' => __('Slider Image #1', 'unyson'),
							                            'desc' => __('Please select the image for slider. Highly recommended size 1170 x 610', 'unyson'),
							                        ),
							                        'main_slider_img_2' => array(
							                            'type' => 'upload',
							                            'label' => __('Slider Image #2', 'unyson'),
							                            'desc' => __('Please select the image for slider. Highly recommended size 1170 x 610', 'unyson'),
							                        ),
							                        'main_slider_img_3' => array(
							                            'type' => 'upload',
							                            'label' => __('Slider Image #3', 'unyson'),
							                            'desc' => __('Please select the image for slider. Highly recommended size 1170 x 610', 'unyson'),
							                        ),																        																        
																    ),
																    'title' => __('Images', '{domain}'),
																    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																),												    	
																'slider-inner-text' => array(
																    'type' => 'tab',
																    'options' => array(
																        'slider-inner-text-bold'  => array( 
																				    'type'  => 'text',
																				    'value' => 'Pure',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Bold Inner Text', '{domain}'),
																				    'desc'  => __('Type the bold part of text for slider description', '{domain}'),
																				    'help'  => __('This text is displayed as black and bold', '{domain}'),												        	
																        ),
																        'slider-inner-text-turquoise'  => array( 
																				    'type'  => 'text',
																				    'value' => 'Elegance',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Turquoise Inner Text', '{domain}'),
																				    'desc'  => __('Type the part of text with turquoise background for slider description', '{domain}'),
																				    'help'  => __('This text is displayed with turquoise background', '{domain}'),												        	
																        ),																        																        
																    ),
																    'title' => __('Slider Text', '{domain}'),
																    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																),													    	

																'slider-ticker' => array(
																    'type' => 'tab',
																    'options' => array(
																        'slider-ticker-1'  => array( 
																				    'type'  => 'text',
																				    'value' => 'AWESOME THEME',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Ticker #1', '{domain}'),
																				    'desc'  => __('Type some text for the ticker', '{domain}'),
																				    'help'  => __('This text is for the slider ticker', '{domain}'),												        	
																        ),	
																        'slider-ticker-2'  => array( 
																				    'type'  => 'text',
																				    'value' => 'MODERN COMBINATION',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Ticker #2', '{domain}'),
																				    'desc'  => __('Type some text for the ticker', '{domain}'),
																				    'help'  => __('This text is for the slider ticker', '{domain}'),												        	
																        ),	
																        'slider-ticker-3'  => array( 
																				    'type'  => 'text',
																				    'value' => 'CREATIVE SOLUTIONS',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Ticker #3', '{domain}'),
																				    'desc'  => __('Type some text for the ticker', '{domain}'),
																				    'help'  => __('This text is for the slider ticker', '{domain}'),												        	
																        ),																	        																        
																    ),
																    'title' => __('Slider Ticker', '{domain}'),
																    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																),												        											       
												    ),
												    'title' => __('Slider', '{domain}'),
												    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
												),
												'agency-section-box' => array(
												    'type' => 'box',
												    'options' => array(
																'agency-text-tab' => array(
																    'type' => 'tab',
																    'options' => array(
																        'agency-section-header'  => array( 
																				    'type'  => 'text',
																				    'value' => 'HISTORY OF AGENCY',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Agency Header', '{domain}'),
																				    'desc'  => __('Type the bold part of text for slider description', '{domain}'),
																				    'help'  => __('This text is displayed as black and bold', '{domain}'),												        	
																        ),
																        'agency-section-underheader'  => array(
																				    'type'  => 'textarea',
																				    'value' => 'WHO LOVES OR PURSUES OR DESIRES TO OBTAIN PAIN OF ITSELF, BUT BECAUSE OCCASIONALLY CIRCUMSTANCES OCCUR AND PAIN CAN PROCURE HIM SOME GREAT PLEASURE',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Short Description', '{domain}'),
																				    'desc'  => __('Type some text for short agency description', '{domain}'),
																				    'help'  => __('This text is displayed the header', '{domain}'),
																				),
																        'agency-text-description'  => array(
																				    'type'  => 'textarea',
																				    'value' => 'Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi modi tempora incidunt ut labore.',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Full Text', '{domain}'),
																				    'desc'  => __('Type some text for the full agency description', '{domain}'),
																				    'help'  => __('This the full text of agency section', '{domain}'),
																				),																																			        																        
																    ),
																    'title' => __('Agency Text', '{domain}'),
																    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																),													    	

																'agency-slider-tab' => array(
																    'type' => 'tab',
																    'options' => array(
								                        'agency-slider-1' => array(
								                            'type' => 'upload',
								                            'label' => __('Agency Image #1', 'unyson'),
								                            'desc' => __('Please select the image for slider.', 'unyson'),
								                        ),	
								                        'agency-slider-2' => array(
								                            'type' => 'upload',
								                            'label' => __('Agency Image #2', 'unyson'),
								                            'desc' => __('Please select the image for slider.', 'unyson'),
								                        ),	
								                        'agency-slider-3' => array(
								                            'type' => 'upload',
								                            'label' => __('Agency Image #3', 'unyson'),
								                            'desc' => __('Please select the image for slider.', 'unyson'),
								                        ),									                        								                        															        																        
																    ),
																    'title' => __('Agency Slider', '{domain}'),
																    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																),												        											       
												    ),
												    'title' => __('Agency Section', '{domain}'),
												    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
												),
												'why-us-section-box' => array(
												    'type' => 'box',
												    'options' => array(
																'why-us-text-tab' => array(
																    'type' => 'tab',
																    'options' => array(
																        'why-us-header'  => array( 
																				    'type'  => 'text',
																				    'value' => 'WHY CHOOSE US?',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Main Header', '{domain}'),											        	
																        ),
																        'why-us-underheader'  => array(
																				    'type'  => 'textarea',
																				    'value' => 'Except to obtain some advantage from it',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Under Header', '{domain}'),
																				),																																			        																        
																    ),
																    'title' => __('Text', '{domain}'),
																    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																),													    	
																'why-us-items-tab' => array(
																    'type' => 'tab',
																    'options' => array(
																				'why-us-item1-box' => array(
																				    'type' => 'box',
																				    'options' => array(
																								'why-us-item1-icon' => array(
																								    'type'  => 'icon',
																								    'value' => 'fa fa-smile-o',
																								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																								    'label' => __('Icon', '{domain}'),
																								),
																				        'why-us-item1-header'  => array( 
																								    'type'  => 'text',
																								    'value' => 'BRANDING',
																								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																								    'label' => __('Item Header', '{domain}'),										        	
																				        ),	
																				        'why-us-item1-text'  => array( 
																								    'type'  => 'textarea',
																								    'value' => 'Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because procure him.',
																								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																								    'label' => __('Item Text', '{domain}'),											        	
																				        ),																				        																						
																				    ),
																				    'title' => __('Item #1', '{domain}'),
																				    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																				),	
																				'why-us-item2-box' => array(
																				    'type' => 'box',
																				    'options' => array(
																								'why-us-item2-icon' => array(
																								    'type'  => 'icon',
																								    'value' => 'fa fa-smile-o',
																								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																								    'label' => __('Icon', '{domain}'),
																								),
																				        'why-us-item2-header'  => array( 
																								    'type'  => 'text',
																								    'value' => 'PLAN OF WORK',
																								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																								    'label' => __('Item Header', '{domain}'),										        	
																				        ),	
																				        'why-us-item2-text'  => array( 
																								    'type'  => 'textarea',
																								    'value' => 'Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because procure him.',
																								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																								    'label' => __('Item Text', '{domain}'),											        	
																				        ),																				        																						
																				    ),
																				    'title' => __('Item #2', '{domain}'),
																				    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																				),	
																				'why-us-item3-box' => array(
																				    'type' => 'box',
																				    'options' => array(
																								'why-us-item3-icon' => array(
																								    'type'  => 'icon',
																								    'value' => 'fa fa-smile-o',
																								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																								    'label' => __('Icon', '{domain}'),
																								),
																				        'why-us-item3-header'  => array( 
																								    'type'  => 'text',
																								    'value' => 'ILUSTRATION',
																								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																								    'label' => __('Item Header', '{domain}'),										        	
																				        ),	
																				        'why-us-item3-text'  => array( 
																								    'type'  => 'textarea',
																								    'value' => 'Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because procure him.',
																								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																								    'label' => __('Item Text', '{domain}'),											        	
																				        ),																				        																						
																				    ),
																				    'title' => __('Item #3', '{domain}'),
																				    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																				),																																																																					                        								                        															        																        
																    ),
																    'title' => __('Items', '{domain}'),
																    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																),												        											       
												    ),
												    'title' => __('Why Us Section', '{domain}'),
												    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
												),
												'our-work-section-box' => array(
												    'type' => 'box',
												    'options' => array(
																'our-work-text-tab' => array(
																    'type' => 'tab',
																    'options' => array(
																        'our-work-header'  => array( 
																				    'type'  => 'text',
																				    'value' => 'OUR WORK',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Header', '{domain}'),											        	
																        ),
																        'our-work-underheader'  => array(
																				    'type'  => 'textarea',
																				    'value' => 'Laborious to obtain some advantage from it',
																				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
																				    'label' => __('Under Header', '{domain}'),
																				),																																			        																        
																    ),
																    'title' => __('Text', '{domain}'),
																    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																),													    	
																'our-work-items-tab' => array( 
																    'type' => 'tab',
																    'options' => array(		
								                        'our-work-item-1' => array(
								                            'type' => 'upload',
								                            'label' => __('Portfolio Image #1', 'unyson'),
								                            'desc' => __('Please select the image for portfolio. Highly recommended size 370 x 400', 'unyson'),
								                        ),	
								                        'our-work-item-2' => array(
								                            'type' => 'upload',
								                            'label' => __('Portfolio Image #2', 'unyson'),
								                            'desc' => __('Please select the image for portfolio. Highly recommended size 370 x 400', 'unyson'),
								                        ),	
								                        'our-work-item-3' => array(
								                            'type' => 'upload',
								                            'label' => __('Portfolio Image #3', 'unyson'),
								                            'desc' => __('Please select the image for portfolio. Highly recommended size 370 x 400', 'unyson'),
								                        ),		
								                        'our-work-item-4' => array(
								                            'type' => 'upload',
								                            'label' => __('Portfolio Image #4', 'unyson'),
								                            'desc' => __('Please select the image for portfolio. Highly recommended size 370 x 400', 'unyson'),
								                        ),	
								                        'our-work-item-5' => array(
								                            'type' => 'upload',
								                            'label' => __('Portfolio Image #5', 'unyson'),
								                            'desc' => __('Please select the image for portfolio. Highly recommended size 370 x 400', 'unyson'),
								                        ),	
								                        'our-work-item-6' => array(
								                            'type' => 'upload',
								                            'label' => __('Portfolio Image #6', 'unyson'),
								                            'desc' => __('Please select the image for portfolio. Highly recommended size 370 x 400', 'unyson'),
								                        ),	
								                        'our-work-item-7' => array(
								                            'type' => 'upload',
								                            'label' => __('Portfolio Image #7', 'unyson'),
								                            'desc' => __('Please select the image for portfolio. Highly recommended size 370 x 400', 'unyson'),
								                        ),	
								                        'our-work-item-8' => array(
								                            'type' => 'upload',
								                            'label' => __('Portfolio Image #8', 'unyson'),
								                            'desc' => __('Please select the image for portfolio. Highly recommended size 370 x 400', 'unyson'),
								                        ),	
								                        'our-work-item-9' => array(
								                            'type' => 'upload',
								                            'label' => __('Portfolio Image #9', 'unyson'),
								                            'desc' => __('Please select the image for portfolio. Highly recommended size 370 x 400', 'unyson'),
								                        ),								                        							                        							                        
																    ),
																    'title' => __('Items', '{domain}'),
																    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
																),												        											       
												    ),
												    'title' => __('Our Work Section', '{domain}'),
												    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
												),
    ),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),
    ),
    'title' => __('Home Page', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),


'about-tab' => array( 
    'type' => 'tab',
    'options' => array(
				'about-common-box' => array(
				    'type' => 'box',
				    'options' => array(
					      'about-bg-image-1' => array(
					          'type' => 'upload',
					          'label' => __('Background Image #1', 'unyson'),
					          'desc' => __('Please select an image. Highly recommended size 1170 x 550', 'unyson'),
					      ),
					      'about-header-1'  => array( 
							    'type'  => 'text',
							    'value' => 'About Us',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Header #1', '{domain}'),										        	
				  ),
					      'about-header-1-underheader'  => array( 
							    'type'  => 'text',
							    'value' => 'Everything created in simple way',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('', '{domain}'),			    										        	
				  ), 
					      'about-header-2'  => array( 
							    'type'  => 'text',
							    'value' => 'WE ARE OAK AGENCY',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Header #2', '{domain}'),			    										        	
				  ),    	
								'about-text-block-1' => array(
								    'type'  => 'wp-editor',
								    'value' => 'Who loves or pursues or desires to <b>DESIGN</b> pain of itself,but because and occasionally circumstances occur pain can procure him some great easure of the past.',
								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								    'label' => __('Text Block #1', '{domain}'),
								    'desc'  => __('Description', '{domain}'),
								    'help'  => __('Help tip', '{domain}'),
								    'size' => 'small', // small, large
								    'editor_height' => 300,
								    'wpautop' => true,
								    'editor_type' => false, // tinymce, html
								),  
								'about-text-block-2' => array(
								    'type'  => 'wp-editor',
								    'value' => 'THE CREATIVE qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima quis nostrum exercitationem ullam corporis suscipit aliquid.',
								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								    'label' => __('Text Block #2', '{domain}'),
								    'desc'  => __('Description', '{domain}'),
								    'help'  => __('Help tip', '{domain}'),
								    'size' => 'small', // small, large
								    'editor_height' => 300,
								    'wpautop' => true,
								    'editor_type' => false, // tinymce, html
								), 
								'about-text-block-3' => array(
								    'type'  => 'wp-editor',
								    'value' => '<strong>WEB DESIGN</strong> qui dolorem ipsum quia dolor sit amet, MINIMALISM adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam',
								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								    'label' => __('Text Block #3', '{domain}'),
								    'desc'  => __('Description', '{domain}'),
								    'help'  => __('Help tip', '{domain}'),
								    'size' => 'small', // small, large
								    'editor_height' => 300,
								    'wpautop' => true,
								    'editor_type' => false, // tinymce, html
								), 	
					      'about-bg-image-2' => array(
					          'type' => 'upload',
					          'label' => __('Background Image #2', 'unyson'),
					          'desc' => __('Please select an image. Highly recommended size 870 x 500', 'unyson'),
					      ),	
					      'about-header-3'  => array( 
							    'type'  => 'text',
							    'value' => 'OUR STORY',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Header #3', '{domain}'),			    										        	
				  ), 
								'about-text-block-4' => array(
								    'type'  => 'wp-editor',
								    'value' => 'Great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally 
				            encounter consequences that are extremely painful. <br><br>
				            Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example.',
								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								    'label' => __('Text Block #4', '{domain}'),
								    'desc'  => __('Description', '{domain}'),
								    'help'  => __('Help tip', '{domain}'),
								    'size' => 'small', // small, large
								    'editor_height' => 300,
								    'wpautop' => true,
								    'editor_type' => false, // tinymce, html
								), 
					      'about-header-4'  => array( 
							    'type'  => 'text',
							    'value' => 'WHY CHOOSE US?',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Header #4', '{domain}'),			    										        	
				  ),
					      'about-header-4-underheader'  => array( 
							    'type'  => 'text',
							    'value' => 'Except to obtain some advantage from it',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('', '{domain}'),			    										        	
				  ), 
					      'about-bg-image-3' => array(
					          'type' => 'upload',
					          'label' => __('Background Image #3', 'unyson'),
					          'desc' => __('Please select an image. Highly recommended size 680 x 675', 'unyson'),
					      ),	
								'about-item1-icon' => array(
								    'type'  => 'icon',
								    'value' => 'fa fa-smile-o',
								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								    'label' => __('Item #1 Icon', '{domain}'),
								),	 
					      'about-item1-header'  => array( 
							    'type'  => 'text',
							    'value' => 'BRANDING',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Item #1 Header', '{domain}'),			    										        	
				  ), 	
					      'about-item1-text'  => array( 
							    'type'  => 'text',
							    'value' => 'Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because.',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Item #1 Text', '{domain}'),			    										        	
				  ),  
								'about-item2-icon' => array(
								    'type'  => 'icon',
								    'value' => 'fa fa-smile-o',
								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								    'label' => __('Item #2 Icon', '{domain}'),
								),	 
					      'about-item2-header'  => array( 
							    'type'  => 'text',
							    'value' => 'PLAN OF WORK',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Item #2 Header', '{domain}'),			    										        	
				  ), 	
					      'about-item2-text'  => array( 
							    'type'  => 'text',
							    'value' => 'The actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because.',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Item #2 Text', '{domain}'),			    										        	
				  ), 
								'about-item3-icon' => array(
								    'type'  => 'icon',
								    'value' => 'fa fa-smile-o',
								    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
								    'label' => __('Item #3 Icon', '{domain}'),
								),	 
					      'about-item3-header'  => array( 
							    'type'  => 'text',
							    'value' => 'ILUSTRATION',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Item #3 Header', '{domain}'),			    										        	
				  ), 	
					      'about-item3-text'  => array( 
							    'type'  => 'text',
							    'value' => 'Pound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because.',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Item #3 Text', '{domain}'),			    										        	
				  ),
					      'about-header-5'  => array( 
							    'type'  => 'text',
							    'value' => 'OUR AMAZING TEAM',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('Header #5', '{domain}'),			    										        	
				  ),
					      'about-header-5-underheader'  => array( 
							    'type'  => 'text',
							    'value' => 'Except to obtain some advantage from it',
							    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
							    'label' => __('', '{domain}'),			    										        	
				  ),				        
				    ),
				    'title' => __('Common', '{domain}'),
				    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
				),   	
				'about-team-box' => array(
				    'type' => 'box',
				    'options' => array(
								'about-team-members-tab' => array(
								    'type' => 'tab',
								    'options' => array(
									      'about-member1-image' => array(
									          'type' => 'upload',
									          'label' => __('Member #1 Image', 'unyson'),
									          'desc' => __('Please select an image. Highly recommended size 350 x 400', 'unyson'),
									      ),								    	
									      'about-member1-name'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #1 Name', '{domain}'),			    										        	
								  			),	
									      'about-member1-position'  => array( 
											    'type'  => 'text',
											    'value' => 'WEB DEVELOPER',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #1 Position', '{domain}'),			    										        	
								  			),
									      'about-member1-facebook'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #1 Facebook', '{domain}'),			    										        	
								  			),	
									      'about-member1-twitter'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #1 Twitter', '{domain}'),			    										        	
								  			),
									      'about-member1-dribbble'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #1 Dribbble', '{domain}'),			    										        	
								  			),	

									      'about-member2-image' => array(
									          'type' => 'upload',
									          'label' => __('Member #2 Image', 'unyson'),
									          'desc' => __('Please select an image. Highly recommended size 350 x 400', 'unyson'),
									      ),								    	
									      'about-member2-name'  => array( 
											    'type'  => 'text',
											    'value' => 'JOHN DOE',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #2 Name', '{domain}'),			    										        	
								  			),	
									      'about-member2-position'  => array( 
											    'type'  => 'text',
											    'value' => 'WEB DEVELOPER',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #2 Position', '{domain}'),			    										        	
								  			),
									      'about-member2-facebook'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #2 Facebook', '{domain}'),			    										        	
								  			),	
									      'about-member2-twitter'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #2 Twitter', '{domain}'),			    										        	
								  			),
									      'about-member2-dribbble'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #2 Dribbble', '{domain}'),			    										        	
								  			),

									      'about-member3-image' => array(
									          'type' => 'upload',
									          'label' => __('Member #3 Image', 'unyson'),
									          'desc' => __('Please select an image. Highly recommended size 350 x 400', 'unyson'),
									      ),								    	
									      'about-member3-name'  => array( 
											    'type'  => 'text',
											    'value' => 'JOHN DOE',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #3 Name', '{domain}'),			    										        	
								  			),	
									      'about-member3-position'  => array( 
											    'type'  => 'text',
											    'value' => 'WEB DEVELOPER',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #3 Position', '{domain}'),			    										        	
								  			),
									      'about-member3-facebook'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #3 Facebook', '{domain}'),			    										        	
								  			),	
									      'about-member3-twitter'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #3 Twitter', '{domain}'),			    										        	
								  			),
									      'about-member3-dribbble'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #3 Dribbble', '{domain}'),			    										        	
								  			),

									      'about-member4-image' => array(
									          'type' => 'upload',
									          'label' => __('Member #4 Image', 'unyson'),
									          'desc' => __('Please select an image. Highly recommended size 350 x 400', 'unyson'),
									      ),								    	
									      'about-member4-name'  => array( 
											    'type'  => 'text',
											    'value' => 'JOHN DOE',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #4 Name', '{domain}'),			    										        	
								  			),	
									      'about-member4-position'  => array( 
											    'type'  => 'text',
											    'value' => 'WEB DEVELOPER',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #4 Position', '{domain}'),			    										        	
								  			),
									      'about-member4-facebook'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #4 Facebook', '{domain}'),			    										        	
								  			),	
									      'about-member4-twitter'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #4 Twitter', '{domain}'),			    										        	
								  			),
									      'about-member4-dribbble'  => array( 
											    'type'  => 'text',
											    'value' => '',
											    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
											    'label' => __('Member #4 Dribbble', '{domain}'),			    										        	
								  			),								  											  											  										  			
								    ),
								    'title' => __('Members', '{domain}'),
								    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
								),
								'about-team-clients-tab' => array(
								    'type' => 'tab',
								    'options' => array(
									      'about-client1-image' => array(
									          'type' => 'upload',
									          'label' => __('Client #1 Image', 'unyson'),
									          'desc' => __('Please select an image. Highly recommended size 125 x 80', 'unyson'),
									      ),	
									      'about-client2-image' => array(
									          'type' => 'upload',
									          'label' => __('Client #2 Image', 'unyson'),
									          'desc' => __('Please select an image. Highly recommended size 125 x 80', 'unyson'),
									      ),	
									      'about-client3-image' => array(
									          'type' => 'upload',
									          'label' => __('Client #3 Image', 'unyson'),
									          'desc' => __('Please select an image. Highly recommended size 125 x 80', 'unyson'),
									      ),	
									      'about-client4-image' => array(
									          'type' => 'upload',
									          'label' => __('Client #4 Image', 'unyson'),
									          'desc' => __('Please select an image. Highly recommended size 125 x 80', 'unyson'),
									      ),										      									      									      								        
								    ),
								    'title' => __('Clients', '{domain}'),
								    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
								),												        
				    ),
				    'title' => __('Team', '{domain}'),
				    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
				),        			         				 	      										      
    ),
    'title' => __('About Page', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),





'footer-tab' => array(
    'type' => 'tab',
    'options' => array(
	      'footer-header-1'  => array( 
			    'type'  => 'text',
			    'value' => 'O.A.K THEME',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Header #1', '{domain}'),	
			    'desc'  => __('This can be the name of your company', '{domain}'),									        	
  ),
	      'footer-field-1'  => array( 
			    'type'  => 'text',
			    'value' => 'City 35 AM <br>Street 1395 p.n <br>your Country',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'desc'  => __('This can be the address of your company', '{domain}'),	
			    'label' => __('', '{domain}'),										        	
  ),
	      'footer-header-2'  => array( 
			    'type'  => 'text',
			    'value' => 'CONTACT INFO',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Header #2', '{domain}'),
					'desc'  => __('This can be CONTACT header', '{domain}'),				    										        	
  ), 
	      'footer-field-2'  => array( 
			    'type'  => 'text',
			    'value' => 'T:003 124 115 <br>E:info@mail.com <br>W:www.website.com',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'desc'  => __('This can be the contact data', '{domain}'),	
			    'label' => __('', '{domain}'),			    										        	
  ),  
	      'footer-copyright'  => array( 
			    'type'  => 'text',
			    'value' => '&copy; 2015 OAK, ALL RIGHTS RESERVED',
			    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
			    'label' => __('Copyright', '{domain}'),			    										        	
  ),  	      
    ),
    'title' => __('Footer', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),

)

?>