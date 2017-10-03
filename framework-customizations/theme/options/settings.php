<?php
$options = array(
'home_page_tab' => array(
    'type' => 'tab',
    'options' => array(
        'group_id' => array(
			    'type' => 'group',
			    'options' => array(
                        'logo' => array(
                            'type' => 'upload',
                            'label' => __('Logo', 'unyson'),
                            'desc' => __('Please select the logo image.', 'unyson'),
                        ),
                        'main_slider_box' => array(
												    'type' => 'box',
												    'options' => array(
				                        'main_slider_img_1' => array(
				                            'type' => 'upload',
				                            'label' => __('Slider Image #1', 'unyson'),
				                            'desc' => __('Please select the image for slider.', 'unyson'),
				                        ),
				                        'main_slider_img_2' => array(
				                            'type' => 'upload',
				                            'label' => __('Slider Image #2', 'unyson'),
				                            'desc' => __('Please select the image for slider.', 'unyson'),
				                        ),
				                        'main_slider_img_3' => array(
				                            'type' => 'upload',
				                            'label' => __('Slider Image #3', 'unyson'),
				                            'desc' => __('Please select the image for slider.', 'unyson'),
				                        ),				                        				                        
												    ),
												    'title' => __('Images For Main Slider', '{domain}'),
												    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
												),
												'slider-description-box' => array(
												    'type' => 'box',
												    'options' => array(
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
												    'title' => __('Slider Description', '{domain}'),
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
																								    'value' => 'fa-smile-o',
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
																								    'value' => 'fa-smile-o',
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
																								    'value' => 'fa-smile-o',
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
    ),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),
    ),
    'title' => __('Home Page', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),
)

?>