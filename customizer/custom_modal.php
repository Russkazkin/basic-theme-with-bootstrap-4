<?php
/**
 * Contact form 7 modal
 * @param $wp_customize
 */
function bbsCustomModal( $wp_customize ){
    $wp_customize->add_section(
        'modalOptions',
        array(
            'title' => 'Modal',
            'priority' => 500,
            'description' => 'Setup modal with Contact form 7 plugin for front-page Jumbotron'
        )
    );
    $wp_customize->add_setting(
        'modalHeading',
        array(
            'default' => 'Contact Form',
            'sanitize_callback' => 'bbsSanitize',
            'transport' => 'refresh'
        )
    );
    $wp_customize->add_control(
        'modalHeading',
        array(
            'section' => 'modalOptions',
            'label' => 'Modal heading',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'formShortCode',
        array(
            'default' => 'Contact Form',
            'sanitize_callback' => 'bbsSanitize',
            'transport' => 'refresh'
        )
    );
    $wp_customize->add_control(
        'formShortCode',
        array(
            'section' => 'modalOptions',
            'label' => 'Contact Form 7 plugin short code',
            'description' => 'Please install and setup Contact Form 7 <a href="/wp-admin/plugin-install.php?s=contact+form+7&tab=search&type=term">plugin</a>',
            'type' => 'text'
        )
    );
}

add_action( 'customize_register', 'bbsCustomModal' );