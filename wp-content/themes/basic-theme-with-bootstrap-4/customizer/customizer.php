<?php
function bbsCustomizerInit( $wp_customize ){

	//Телефон
	$wp_customize->add_setting(
		'phone',
		array(
		'default' => null,
		'sanitize_callback' => 'bbsSanitize',
		'transport' => 'postMessage'
		)
	);
    $wp_customize->add_control(
        'phone',
		 array(
		     'section' => 'title_tagline',
		     'label' => 'Телефон',
		     'type' => 'text'
		 )
    );
	//Почта
	$wp_customize->add_setting(
		'email',
		array(
			'default' => null,
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'email',
		array(
			'section' => 'title_tagline',
			'label' => 'Email',
			'type' => 'text'
		)
	);
	//Лого
	$wp_customize->add_setting(
		'logo',
		array(
			'default' => '/wp-content/themes/basic-theme-with-bootstrap-4/customizer/img/sample-logo.jpg',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo',
			array(
				'section' => 'title_tagline',
				'label' => 'Логотип',
				'description' => 'Добавление логотипа сайта (JPG/PNG)',
				'type' => 'image'
			)
		)
	);
}
add_action( 'customize_register', 'bbsCustomizerInit' );