<?php
if(!function_exists('mainFormModal')){
	function mainFormModal(){ ?>
		<div class="modal fade" id="mainFormModal" tabindex="-1" role="dialog" aria-labelledby="mainFormModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered main-form-modal" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="mainFormModalLabel">Форма заказа</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="bbs-separator"></div>
					<div class="modal-body">
						<?= do_shortcode('[contact-form-7 id="89" title="main-form"]');?>
					</div>
				</div>
			</div>
		</div>
	<?php }
}
add_action('after_footer_block', 'mainFormModal', 10);
