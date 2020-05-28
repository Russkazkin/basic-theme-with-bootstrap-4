<?php
function bbsCustomSlider( $wp_customize ){
	//Добавление секции слайдера
	$wp_customize->add_section(
		'sliderOptions',
		array(
			'title' => 'Slider',
			'priority' => 200,
			'description' => 'Setup front page slider'
		)
	);
	$wp_customize->add_setting(
		'showSlider',
		array(
			'default' => true,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'showSlider',
		array(
			'section'   => 'sliderOptions',
			'label'     => 'Check to show slider',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'hideSliderHeading',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideSliderHeading',
		array(
			'section'   => 'sliderOptions',
			'label'     => 'Hide caption\'s heading',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'hideSliderText',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideSliderText',
		array(
			'section'   => 'sliderOptions',
			'label'     => 'Hide caption\'s text',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'firstSlideImage',
		array(
			'default' => '/wp-content/themes/basic-theme-with-bootstrap-4/customizer/img/sample-slide-1.jpg',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'firstSlideImage',
			array(
				'section' => 'sliderOptions',
				'label' => 'First slide image',
				'description' => 'Recommended resolution 1400x560px',
				'type' => 'image'
			)
		)
	);
	$wp_customize->add_setting(
		'firstSlideHeading',
		array(
			'default' => 'First slide',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstSlideHeading',
		array(
			'section' => 'sliderOptions',
			'label' => 'First slide heading',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'firstSlideText',
		array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstSlideText',
		array(
			'section' => 'sliderOptions',
			'label' => 'First slide text',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'secondSlideImage',
		array(
			'default' => '/wp-content/themes/basic-theme-with-bootstrap-4/customizer/img/sample-slide-2.jpg',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'secondSlideImage',
			array(
				'section' => 'sliderOptions',
				'label' => 'Second slide image',
				'description' => 'Recommended resolution 1400x560px',
				'type' => 'image'
			)
		)
	);
	$wp_customize->add_setting(
		'secondSlideHeading',
		array(
			'default' => 'Second slide',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondSlideHeading',
		array(
			'section' => 'sliderOptions',
			'label' => 'Second slide heading',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'secondSlideText',
		array(
			'default' => 'Integer sit amet lobortis felis',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondSlideText',
		array(
			'section' => 'sliderOptions',
			'label' => 'Second slide text',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'hideSecondSlide',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideSecondSlide',
		array(
			'section'   => 'sliderOptions',
			'label'     => 'Hide second slide',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'thirdSlideImage',
		array(
			'default' => '/wp-content/themes/basic-theme-with-bootstrap-4/customizer/img/sample-slide-3.jpg',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'thirdSlideImage',
			array(
				'section' => 'sliderOptions',
				'label' => 'Third slide image',
				'description' => 'Recommended resolution 1400x560px',
				'type' => 'image'
			)
		)
	);
	$wp_customize->add_setting(
		'thirdSlideHeading',
		array(
			'default' => 'Third slide',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdSlideHeading',
		array(
			'section' => 'sliderOptions',
			'label' => 'Third slide heading',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'thirdSlideText',
		array(
			'default' => 'Aenean sagittis quam vel felis eleifend hendrerit',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdSlideText',
		array(
			'section' => 'sliderOptions',
			'label' => 'Third slide text',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'hideThirdSlide',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideThirdSlide',
		array(
			'section'   => 'sliderOptions',
			'label'     => 'Hide third slide',
			'type'      => 'checkbox'
		)
	);
}
add_action( 'customize_register', 'bbsCustomSlider' );