<?php
if(!function_exists('vantagesSection')) {
	function vantagesSection() {
		$vantages = array(
			1 => array(
				'heading' => get_theme_mod('firstVantageHeading', 'Heading one'),
				'text' => get_theme_mod('firstVantageText', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
                'li1' => get_theme_mod('firstVantageListItemOne', 'Liberte'),
                'li2' => get_theme_mod('firstVantageListItemTwo', 'Egalite'),
                'li3' => get_theme_mod('firstVantageListItemThree', 'Fraternite'),
                'offer' => get_theme_mod('firstVantageOffer', 'Download now!'),
				'button' => get_theme_mod('firstVantageButton', 'Push me'),
				'buttonLink' => get_theme_mod('firstVantageButtonLink', '#'),
			),
			2 => array(
				'heading' => get_theme_mod('secondVantageHeading', 'Heading two'),
				'text' => get_theme_mod('secondVantageText', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
				'li1' => get_theme_mod('secondVantageListItemOne', 'Liberte'),
				'li2' => get_theme_mod('secondVantageListItemTwo', 'Egalite'),
				'li3' => get_theme_mod('secondVantageListItemThree', 'Fraternite'),
				'offer' => get_theme_mod('secondVantageOffer', 'Download now!'),
				'button' => get_theme_mod('secondVantageButton', 'Push me'),
				'buttonLink' => get_theme_mod('secondVantageButtonLink', '#'),
			),
			3 => array(
				'heading' => get_theme_mod('thirdVantageHeading', 'Heading three'),
				'text' => get_theme_mod('thirdVantageText', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
				'li1' => get_theme_mod('thirdVantageListItemOne', 'Liberte'),
				'li2' => get_theme_mod('thirdVantageListItemTwo', 'Egalite'),
				'li3' => get_theme_mod('thirdVantageListItemThree', 'Fraternite'),
				'offer' => get_theme_mod('thirdVantageOffer', 'Download now!'),
				'button' => get_theme_mod('thirdVantageButton', 'Push me'),
				'buttonLink' => get_theme_mod('thirdVantageButtonLink', '#'),
			),
			4 => array(
				'heading' => get_theme_mod('fourthVantageHeading', 'Heading four'),
				'text' => get_theme_mod('fourthVantageText', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),
				'li1' => get_theme_mod('fourthVantageListItemOne', 'Liberte'),
				'li2' => get_theme_mod('fourthVantageListItemTwo', 'Egalite'),
				'li3' => get_theme_mod('fourthVantageListItemThree', 'Fraternite'),
				'offer' => get_theme_mod('fourthVantageOffer', 'Download now!'),
				'button' => get_theme_mod('fourthVantageButton', 'Push me'),
				'buttonLink' => get_theme_mod('fourthVantageButtonLink', '#'),
			),
		);
		?>
		<div class="container vantages-wrap">
			<div class="vantages my-5">
				<div class="vantages-heading section-heading text-center py-5">
					<span>
                        <?= get_theme_mod('VantagesSectionHeading', 'advantages');?>
                    </span>
				</div>
				<div class="vantages-items-wrap d-flex justify-content-center align-items-center flex-wrap">
				<?php foreach ($vantages as $key => $vantage):?>
					<div class="vantages-item p-3">
                        <?php if(!get_theme_mod('hideVantageHeading', false)):?>
						<div class="vantages-item-heading text-center py-2">
							<?= $vantage['heading'];?>
						</div>
                        <?php endif;?>
			            <?php if(!get_theme_mod('hideVantageImg', false)):?>
						<div class="vantages-item-img text-center">
							<div class="vantages-item-img-icon vantages-item-img-icon<?= $key;?>"></div>
						</div>
			            <?php endif;?>
			            <?php if(!get_theme_mod('hideVantageText', false)):?>
						<div class="vantages-item-text text-center py-2">
							<?= $vantage['text'];?>
						</div>
			            <?php endif;?>
			            <?php if(!get_theme_mod('hideVantageList', false)):?>
						<div class="vantages-item-list-wrap">
							<ul class="vantages-item-listDownload now! py-2">
								<li class="vantages-item-list-item"><?= $vantage['li1'];?></li>
								<li class="vantages-item-list-item"><?= $vantage['li2'];?></li>
								<li class="vantages-item-list-item"><?= $vantage['li3'];?></li>
							</ul>
						</div>
			            <?php endif;?>
			            <?php if(!get_theme_mod('hideVantageSeparator', false)):?>
						<div class="bbs-separator"></div>
			            <?php endif;?>
			            <?php if(!get_theme_mod('hideVantageOffer', false)):?>
						<div class="vantages-item-offer"><?= $vantage['offer'];?></div>
			            <?php endif;?>
			            <?php if(!get_theme_mod('hideVantageButton', false)):?>
						<div class="vantages-item-button py-3 text-center">
							<a class="btn btn-info btn-bss" href="<?= $vantage['buttonLink'];?>">
                                <?= $vantage['button'];?>
                            </a>
						</div>
			            <?php endif;?>
					</div>
				<?php endforeach;?>
				</div>
			</div>
		</div>
	<?php }
}
add_action('bbsVantages', 'vantagesSection');
