<?php
$options = array(
'home_page_tab' => array(
    'type' => 'tab',
    'options' => array(
        'group_id' => array(
			    'type' => 'group',
			    'options' => array(
                        'main_logo' => array(
                            'type' => 'upload',
                            'label' => __('Logo', 'unyson'),
                            'desc' => __('Please select the logo image.', 'unyson'),
                        ),
    ),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),
    ),
    'title' => __('Home Page', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),










'another_page_tab' => array(
    'type' => 'tab',
    'options' => array(
        'option_id_2'  => array( 'type' => 'text' ),
    ),
    'title' => __('Another Page', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),
);



// $settings_options = fw()->theme->get_settings_options();
// $db_settings_options = fw_get_db_settings_option();

// if( !empty( $settings_options['upload_option']['url'] ) ) {
//     $main_logo = $settings_options['upload_option']['url'];
//     echo 'Option 1 - Work';
// };
?>