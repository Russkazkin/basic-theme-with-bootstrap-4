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
}
add_action( 'customize_register', 'bbsCustomJumbotron' );