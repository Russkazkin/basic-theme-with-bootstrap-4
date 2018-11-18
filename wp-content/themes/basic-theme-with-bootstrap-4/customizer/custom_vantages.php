<?php
function bbsCustomVantages( $wp_customize ){
	$wp_customize->add_panel(
		'vantagesOptions',
		array(
			'title' => 'Section Vantages',
			'description' => 'Setup vantages section',
			'priority' => 400,
		)
	);
	//General
	$wp_customize->add_section(
		'vantagesOptionsGeneral',
		array(
			'panel' => 'vantagesOptions',
			'title' => 'General',
			'priority' => 0,
			'description' => 'General options'
		)
	);
	$wp_customize->add_setting(
		'showVantages',
		array(
			'default' => true,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'showVantages',
		array(
			'section'   => 'vantagesOptionsGeneral',
			'label'     => 'Check to show Vantages Section',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'hideVantageHeading',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideVantageHeading',
		array(
			'section'   => 'vantagesOptionsGeneral',
			'label'     => 'Hide vantage\'s heading',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'hideVantageImg',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideVantageImg',
		array(
			'section'   => 'vantagesOptionsGeneral',
			'label'     => 'Hide vantage\'s icon',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'hideVantageText',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideVantageText',
		array(
			'section'   => 'vantagesOptionsGeneral',
			'label'     => 'Hide vantage\'s text',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'hideVantageList',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideVantageList',
		array(
			'section'   => 'vantagesOptionsGeneral',
			'label'     => 'Hide vantage\'s list',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'hideVantageSeparator',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideVantageSeparator',
		array(
			'section'   => 'vantagesOptionsGeneral',
			'label'     => 'Hide vantage\'s separator',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'hideVantageOffer',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideVantageOffer',
		array(
			'section'   => 'vantagesOptionsGeneral',
			'label'     => 'Hide vantage\'s offer',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'hideVantageButton',
		array(
			'default' => false,
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'hideVantageButton',
		array(
			'section'   => 'vantagesOptionsGeneral',
			'label'     => 'Hide vantage\'s button',
			'type'      => 'checkbox'
		)
	);
	$wp_customize->add_setting(
		'VantagesSectionHeading',
		array(
			'default' => 'advantages',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'VantagesSectionHeading',
		array(
			'section' => 'vantagesOptionsGeneral',
			'label' => 'Vantages section heading',
			'type' => 'text'
		)
	);
	//Item 1
	$wp_customize->add_section(
		'vantagesOptionsVantage1',
		array(
			'panel' => 'vantagesOptions',
			'title' => 'First vantage',
			'priority' => 10,
			'description' => 'First vantage options'
		)
	);
	$wp_customize->add_setting(
		'firstVantageHeading',
		array(
			'default' => 'Heading one',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstVantageHeading',
		array(
			'section' => 'vantagesOptionsVantage1',
			'label' => 'Vantage heading',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'firstVantageImg',
		array(
			'default' => 'f058',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstVantageImg',
		array(
			'section' => 'vantagesOptionsVantage1',
			'label' => 'Icon',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'firstVantageText',
		array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstVantageText',
		array(
			'section' => 'vantagesOptionsVantage1',
			'label' => 'Vantage text',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'firstVantageListItemOne',
		array(
			'default' => 'Liberte',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstVantageListItemOne',
		array(
			'section' => 'vantagesOptionsVantage1',
			'label' => 'First list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'firstVantageListItemTwo',
		array(
			'default' => 'Egalite',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstVantageListItemTwo',
		array(
			'section' => 'vantagesOptionsVantage1',
			'label' => 'Second list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'firstVantageListItemThree',
		array(
			'default' => 'Fraternite',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstVantageListItemThree',
		array(
			'section' => 'vantagesOptionsVantage1',
			'label' => 'Third list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'firstVantageOffer',
		array(
			'default' => 'Download now!',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstVantageOffer',
		array(
			'section' => 'vantagesOptionsVantage1',
			'label' => 'Offer',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'firstVantageButton',
		array(
			'default' => 'Push me',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstVantageButton',
		array(
			'section' => 'vantagesOptionsVantage1',
			'label' => 'Button text',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'firstVantageButtonLink',
		array(
			'default' => '#',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'firstVantageButtonLink',
		array(
			'section' => 'vantagesOptionsVantage1',
			'label' => 'Button link',
			'type' => 'text'
		)
	);
	//Item 2
	$wp_customize->add_section(
		'vantagesOptionsVantage2',
		array(
			'panel' => 'vantagesOptions',
			'title' => 'Second vantage',
			'priority' => 20,
			'description' => 'Second vantage options'
		)
	);
	$wp_customize->add_setting(
		'secondVantageHeading',
		array(
			'default' => 'Heading two',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondVantageHeading',
		array(
			'section' => 'vantagesOptionsVantage2',
			'label' => 'Vantage heading',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'secondVantageImg',
		array(
			'default' => 'f058',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondVantageImg',
		array(
			'section' => 'vantagesOptionsVantage2',
			'label' => 'Icon',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'secondVantageText',
		array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondVantageText',
		array(
			'section' => 'vantagesOptionsVantage2',
			'label' => 'Vantage text',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'secondVantageListItemOne',
		array(
			'default' => 'Liberte',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondVantageListItemOne',
		array(
			'section' => 'vantagesOptionsVantage2',
			'label' => 'First list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'secondVantageListItemTwo',
		array(
			'default' => 'Egalite',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondVantageListItemTwo',
		array(
			'section' => 'vantagesOptionsVantage2',
			'label' => 'Second list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'secondVantageListItemThree',
		array(
			'default' => 'Fraternite',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondVantageListItemThree',
		array(
			'section' => 'vantagesOptionsVantage2',
			'label' => 'Third list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'secondVantageOffer',
		array(
			'default' => 'Download now!',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondVantageOffer',
		array(
			'section' => 'vantagesOptionsVantage2',
			'label' => 'Offer',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'secondVantageButton',
		array(
			'default' => 'Push me',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondVantageButton',
		array(
			'section' => 'vantagesOptionsVantage2',
			'label' => 'Button text',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'secondVantageButtonLink',
		array(
			'default' => '#',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'secondVantageButtonLink',
		array(
			'section' => 'vantagesOptionsVantage2',
			'label' => 'Button link',
			'type' => 'text'
		)
	);
	//Item 3
	$wp_customize->add_section(
		'vantagesOptionsVantage3',
		array(
			'panel' => 'vantagesOptions',
			'title' => 'Third vantage',
			'priority' => 30,
			'description' => 'Third vantage options'
		)
	);
	$wp_customize->add_setting(
		'thirdVantageHeading',
		array(
			'default' => 'Heading three',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdVantageHeading',
		array(
			'section' => 'vantagesOptionsVantage3',
			'label' => 'Vantage heading',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'thirdVantageImg',
		array(
			'default' => 'f058',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdVantageImg',
		array(
			'section' => 'vantagesOptionsVantage3',
			'label' => 'Icon',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'thirdVantageText',
		array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdVantageText',
		array(
			'section' => 'vantagesOptionsVantage3',
			'label' => 'Vantage text',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'thirdVantageListItemOne',
		array(
			'default' => 'Liberte',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdVantageListItemOne',
		array(
			'section' => 'vantagesOptionsVantage3',
			'label' => 'First list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'thirdVantageListItemTwo',
		array(
			'default' => 'Egalite',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdVantageListItemTwo',
		array(
			'section' => 'vantagesOptionsVantage3',
			'label' => 'Second list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'thirdVantageListItemThree',
		array(
			'default' => 'Fraternite',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdVantageListItemThree',
		array(
			'section' => 'vantagesOptionsVantage3',
			'label' => 'Third list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'thirdVantageOffer',
		array(
			'default' => 'Download now!',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdVantageOffer',
		array(
			'section' => 'vantagesOptionsVantage3',
			'label' => 'Offer',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'thirdVantageButton',
		array(
			'default' => 'Push me',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdVantageButton',
		array(
			'section' => 'vantagesOptionsVantage3',
			'label' => 'Button text',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'thirdVantageButtonLink',
		array(
			'default' => '#',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'thirdVantageButtonLink',
		array(
			'section' => 'vantagesOptionsVantage3',
			'label' => 'Button link',
			'type' => 'text'
		)
	);
	//Item 4
	$wp_customize->add_section(
		'vantagesOptionsVantage4',
		array(
			'panel' => 'vantagesOptions',
			'title' => 'Fourth vantage',
			'priority' => 40,
			'description' => 'Fourth vantage options'
		)
	);
	$wp_customize->add_setting(
		'fourthVantageHeading',
		array(
			'default' => 'Heading four',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'fourthVantageHeading',
		array(
			'section' => 'vantagesOptionsVantage4',
			'label' => 'Vantage heading',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'fourthVantageImg',
		array(
			'default' => 'f058',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'fourthVantageImg',
		array(
			'section' => 'vantagesOptionsVantage4',
			'label' => 'Icon',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'fourthVantageText',
		array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'fourthVantageText',
		array(
			'section' => 'vantagesOptionsVantage4',
			'label' => 'Vantage text',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'fourthVantageListItemOne',
		array(
			'default' => 'Liberte',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'fourthVantageListItemOne',
		array(
			'section' => 'vantagesOptionsVantage4',
			'label' => 'First list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'fourthVantageListItemTwo',
		array(
			'default' => 'Egalite',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'fourthVantageListItemTwo',
		array(
			'section' => 'vantagesOptionsVantage4',
			'label' => 'Second list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'fourthVantageListItemThree',
		array(
			'default' => 'Fraternite',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'fourthVantageListItemThree',
		array(
			'section' => 'vantagesOptionsVantage4',
			'label' => 'Third list item',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'fourthVantageOffer',
		array(
			'default' => 'Download now!',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'fourthVantageOffer',
		array(
			'section' => 'vantagesOptionsVantage4',
			'label' => 'Offer',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'fourthVantageButton',
		array(
			'default' => 'Push me',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'fourthVantageButton',
		array(
			'section' => 'vantagesOptionsVantage4',
			'label' => 'Button text',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'fourthVantageButtonLink',
		array(
			'default' => '#',
			'sanitize_callback' => 'bbsSanitize',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'fourthVantageButtonLink',
		array(
			'section' => 'vantagesOptionsVantage4',
			'label' => 'Button link',
			'type' => 'text'
		)
	);
}
add_action( 'customize_register', 'bbsCustomVantages' );

function customVantagesCss() { ?>
<style>
.vantages-item-img-icon1:before{content: "\<?= get_theme_mod('firstVantageImg', 'f058')?>"}
.vantages-item-img-icon2:before{content: "\<?= get_theme_mod('secondVantageImg', 'f058')?>"}
.vantages-item-img-icon3:before{content: "\<?= get_theme_mod('thirdVantageImg', 'f058')?>"}
.vantages-item-img-icon4:before{content: "\<?= get_theme_mod('fourthVantageImg', 'f058')?>"}

</style>
<?php }
add_action('wp_head', 'customVantagesCss');