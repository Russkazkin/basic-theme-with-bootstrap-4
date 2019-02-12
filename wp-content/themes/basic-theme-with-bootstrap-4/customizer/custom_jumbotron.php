<?php
function bbsCustomJumbotron( $wp_customize ){
    //Jumbotron Section
    $wp_customize->add_section(
        'jumbotronOptions',
        array(
            'title' => 'Jumbotron',
            'priority' => 300,
            'description' => 'Setup front page Jumbotron Section'
        )
    );
    $wp_customize->add_setting(
        'showJumbotron',
        array(
            'default' => true,
            'transport' => 'refresh'
        )
    );
    $wp_customize->add_control(
        'showJumbotron',
        array(
            'section'   => 'jumbotronOptions',
            'label'     => 'Check to show Jumbotron',
            'type'      => 'checkbox'
        )
    );
    $wp_customize->add_setting(
        'JumbotronHeading',
        array(
            'default' => 'Hello, world!',
            'sanitize_callback' => 'bbsSanitize',
            'transport' => 'refresh'
        )
    );
    $wp_customize->add_control(
        'JumbotronHeading',
        array(
            'section' => 'jumbotronOptions',
            'label' => 'Jumbotron heading',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'JumbotronBigText',
        array(
            'default' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.',
            'sanitize_callback' => 'bbsSanitize',
            'transport' => 'refresh'
        )
    );
    $wp_customize->add_control(
        'JumbotronBigText',
        array(
            'section' => 'jumbotronOptions',
            'label' => 'Jumbotron Big Text',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'hideJumbotronBigText',
        array(
            'default' => false,
            'transport' => 'refresh'
        )
    );
    $wp_customize->add_control(
        'hideJumbotronBigText',
        array(
            'section'   => 'jumbotronOptions',
            'label'     => 'Hide jumbotron\'s big text',
            'type'      => 'checkbox'
        )
    );
    $wp_customize->add_setting(
        'hideJumbotronSeparator',
        array(
            'default' => false,
            'transport' => 'refresh'
        )
    );
    $wp_customize->add_control(
        'hideJumbotronSeparator',
        array(
            'section'   => 'jumbotronOptions',
            'label'     => 'Hide jumbotron\'s separator',
            'type'      => 'checkbox'
        )
    );
    $wp_customize->add_setting(
        'JumbotronSmallText',
        array(
            'default' => 'It uses utility classes for typography and spacing to space content out within the larger container.',
            'sanitize_callback' => 'bbsSanitize',
            'transport' => 'refresh'
        )
    );
    $wp_customize->add_control(
        'JumbotronSmallText',
        array(
            'section' => 'jumbotronOptions',
            'label' => 'Jumbotron Small Text',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'hideJumbotronSmallText',
        array(
            'default' => false,
            'transport' => 'refresh'
        )
    );
    $wp_customize->add_control(
        'hideJumbotronSmallText',
        array(
            'section'   => 'jumbotronOptions',
            'label'     => 'Hide jumbotron\'s small text',
            'type'      => 'checkbox'
        )
    );
}
add_action( 'customize_register', 'bbsCustomJumbotron' );