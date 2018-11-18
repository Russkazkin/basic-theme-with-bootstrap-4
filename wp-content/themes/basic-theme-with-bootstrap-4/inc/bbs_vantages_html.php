<?php
if(!function_exists('vantagesSection')){
	function vantagesSection(){ ?>
		<div class="container vantages-wrap">
			<div class="vantages my-5">
				<div class="vantages-heading section-heading text-center py-5">
					<span>advantages</span>
				</div>
				<div class="vantages-items-wrap d-flex justify-content-center align-items-center flex-wrap">
					<div class="vantages-item p-3">
						<div class="vantages-item-heading text-center py-2">
							Heading 1
						</div>
						<div class="vantages-item-img text-center">
							<div class="vantages-item-img-icon vantages-item-img-icon1"></div>
						</div>
						<div class="vantages-item-text text-center py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
						<div class="vantages-item-list-wrap">
							<ul class="vantages-item-listDownload now! py-2">
								<li class="vantages-item-list-item">Liberte</li>
								<li class="vantages-item-list-item">Egalite</li>
								<li class="vantages-item-list-item">Fraternite</li>
							</ul>
						</div>
						<div class="bbs-separator"></div>
						<div class="vantages-item-offer">Download now!</div>
						<div class="vantages-item-button py-3 text-center">
							<a class="btn btn-info btn-bss" href="#">Push me</a>
						</div>
					</div>
					<div class="vantages-item p-3">
						<div class="vantages-item-heading text-center py-2">Heading 2</div>
						<div class="vantages-item-img text-center">
							<div class="vantages-item-img-icon vantages-item-img-icon2"></div>
						</div>
						<div class="vantages-item-text text-center py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
						<div class="vantages-item-list-wrap">
							<ul class="vantages-item-list py-2">
								<li class="vantages-item-list-item">Liberte</li>
								<li class="vantages-item-list-item">Egalite</li>
								<li class="vantages-item-list-item">Fraternite</li>
							</ul>
						</div>
						<div class="bbs-separator"></div>
						<div class="vantages-item-offer">Download now!</div>
						<div class="vantages-item-button py-3 text-center">
							<a class="btn btn-info btn-bss" href="#">Push me</a>
						</div>
					</div>
					<div class="vantages-item p-3">
						<div class="vantages-item-heading text-center py-2">Heading 3</div>
						<div class="vantages-item-img text-center">
							<div class="vantages-item-img-icon vantages-item-img-icon3"></div>
						</div>
						<div class="vantages-item-text text-center py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
						<div class="vantages-item-list-wrap">
							<ul class="vantages-item-list py-2">
								<li class="vantages-item-list-item">Liberte</li>
								<li class="vantages-item-list-item">Egalite</li>
								<li class="vantages-item-list-item">Fraternite</li>
							</ul>
						</div>
						<div class="bbs-separator"></div>
						<div class="vantages-item-offer">Download now!</div>
						<div class="vantages-item-button py-3 text-center">
							<a class="btn btn-info btn-bss" href="#">Push me</a>
						</div>
					</div>
					<div class="vantages-item p-3">
						<div class="vantages-item-heading text-center py-2">Heading 4</div>
						<div class="vantages-item-img text-center">
							<div class="vantages-item-img-icon vantages-item-img-icon4"></div>
						</div>
						<div class="vantages-item-text text-center py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
						<div class="vantages-item-list-wrap">
							<ul class="vantages-item-list py-2">
								<li class="vantages-item-list-item">Liberte</li>
								<li class="vantages-item-list-item">Egalite</li>
								<li class="vantages-item-list-item">Fraternite</li>
							</ul>
						</div>
						<div class="bbs-separator"></div>
						<div class="vantages-item-offer">Download now!</div>
						<div class="vantages-item-button py-3 text-center">
							<a class="btn btn-info btn-bss" href="#">Push me</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }
}
add_action('bbsVantages', 'vantagesSection');
