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

    ),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),
    ),
    'title' => __('Home Page', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),


?>