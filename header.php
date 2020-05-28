<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header-top row align-items-center">
                <div class="header-top-info col-md-5">
                    <div class="header-top-info-name">
                        <?php if(is_front_page() && !is_paged()):?>
	                        <?php bloginfo('name');?>
	                    <?php else:?>
                        <a href="<?= home_url();?>">
	                        <?php bloginfo('name');?>
                        </a>
	                    <?php endif;?>
                    </div>
                    <div class="header-top-info-description">
                        <?php bloginfo('description');?>
                    </div>
                </div>
                <div class="header-top-info col-md-2 p-3">
                    <?php if(get_theme_mod('logo')):
                        if(is_front_page() && !is_paged()):?>
                            <img src="<?= get_theme_mod('logo', '/wp-content/themes/basic-theme-with-bootstrap-4/customizer/img/sample-logo.jpg'); ?>" alt="logo">
                        <?php else:?>
                            <a href="<?= home_url();?>">
                                <img src="<?= get_theme_mod('logo', '/wp-content/themes/basic-theme-with-bootstrap-4/customizer/img/sample-logo.jpg'); ?>" alt="logo">
                            </a>
                        <?php endif;?>
                    <?php endif;?>
                </div>
                <div class="header-top-contacts col-md-5">
                    <div class="header-top-contacts-phone">
                        <a href="tel:<?= preg_replace('/[^+0-9]/', '', get_theme_mod('phone')) ?>">
                            <?= get_theme_mod('phone') ?>
                        </a>
                    </div>
                    <div class="header-top-contacts-email">
                        <a href="mailto:<?= get_theme_mod('email') ?>">
                            <?= get_theme_mod('email') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-bss">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu([
                    'menu'            => 'top',
                    'theme_location'  => 'top',
                    'container'       => 'div',
                    'container_id'    => 'bs4navbar',
                    'container_class' => 'collapse navbar-collapse',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav mr-auto px-md-5',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new Bs4navwalker()
                ]);
                ?>
                <?php get_search_form(); ?>
            </nav>
        </div>
    </header>

