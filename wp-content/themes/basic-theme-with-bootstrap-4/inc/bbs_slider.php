<?php
if(!function_exists('frontPageSlider')){
	function frontPageSlider(){ ?>
		<div class="front-page-slider">
			<div id="sliderIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#sliderIndicators" data-slide-to="0" class="active"></li>
					<?php if (!get_theme_mod('hideSecondSlide')):?>
					<li data-target="#sliderIndicators" data-slide-to="1"></li>
					<?php endif;?>
					<?php if (!get_theme_mod('hideThirdSlide')):?>
					<li data-target="#sliderIndicators" data-slide-to="2"></li>
					<?php endif;?>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?= get_theme_mod('firstSlideImage', '/wp-content/themes/basic-theme-with-bootstrap-4/customizer/img/sample-slide-1.jpg'); ?>" alt="First slide">
						<?php if (!get_theme_mod('hideSliderHeading') || !get_theme_mod('hideSliderText')):?>
						<div class="carousel-caption d-none d-md-block">
							<?php if (!get_theme_mod('hideSliderHeading')):?>
							<h5><?= get_theme_mod('firstSlideHeading', 'First slide')?></h5>
							<?php endif;?>
							<?php if (!get_theme_mod('hideSliderText')):?>
							<p><?= get_theme_mod('firstSlideText', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit')?></p>
							<?php endif;?>
						</div>
						<?php endif;?>
					</div>
					<?php if (!get_theme_mod('hideSecondSlide')):?>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= get_theme_mod('secondSlideImage', '/wp-content/themes/basic-theme-with-bootstrap-4/customizer/img/sample-slide-2.jpg'); ?>" alt="Second slide">
						<?php if (!get_theme_mod('hideSliderHeading') || !get_theme_mod('hideSliderText')):?>
						<div class="carousel-caption d-none d-md-block">
							<?php if (!get_theme_mod('hideSliderHeading')):?>
							<h5><?= get_theme_mod('secondSlideHeading', 'Second slide')?></h5>
							<?php endif;?>
							<?php if (!get_theme_mod('hideSliderText')):?>
							<p><?= get_theme_mod('secondSlideText', 'Integer sit amet lobortis felis')?></p>
							<?php endif;?>
						</div>
						<?php endif;?>
					</div>
					<?php endif;?>
					<?php if (!get_theme_mod('hideThirdSlide')):?>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= get_theme_mod('thirdSlideImage', '/wp-content/themes/basic-theme-with-bootstrap-4/customizer/img/sample-slide-3.jpg'); ?>" alt="Third slide">
						<?php if (!get_theme_mod('hideSliderHeading') || !get_theme_mod('hideSliderText')):?>
						<div class="carousel-caption d-none d-md-block">
							<?php if (!get_theme_mod('hideSliderHeading')):?>
							<h5><?= get_theme_mod('thirdSlideHeading', 'Third slide')?></h5>
							<?php endif;?>
							<?php if (!get_theme_mod('hideSliderText')):?>
							<p><?= get_theme_mod('thirdSlideText', 'Aenean sagittis quam vel felis eleifend hendrerit')?></p>
							<?php endif;?>
						</div>
						<?php endif;?>
					</div>
					<?php endif;?>
				</div>
				<a class="carousel-control-prev" href="#sliderIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#sliderIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	<?php }
}
add_action('bbsSlider', 'frontPageSlider');