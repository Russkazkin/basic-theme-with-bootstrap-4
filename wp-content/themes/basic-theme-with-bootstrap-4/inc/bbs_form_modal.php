<?php
if (!function_exists('mainFormModal')) {
    function mainFormModal()
    {
        $defaultFormRender = '
        <div role="form" class="wpcf7" id="wpcf7-f245-o1" lang="ru-RU" dir="ltr">
            <div class="screen-reader-response"></div>
            <form action="/#wpcf7-f245-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="245">
                    <input type="hidden" name="_wpcf7_version" value="5.1.1">
                    <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f245-o1">
                    <input type="hidden" name="_wpcf7_container_post" value="0">
                    <input type="hidden" name="g-recaptcha-response" value="">
                </div>
                <p><label> Your Name *<br>
                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value=""
                                                                               size="40"
                                                                               class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                               aria-required="true"
                                                                               aria-invalid="false"></span> </label></p>
                <p><label> Your Email *<br>
                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                aria-required="true"
                                                                                aria-invalid="false"></span> </label>
                </p>
                <p><label> Your Phone<br>
                        <span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="your-phone" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                aria-invalid="false"></span> </label>
                </p>
                <p><label> Your message<br>
                        <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40"
                                                                                     rows="10"
                                                                                     class="wpcf7-form-control wpcf7-textarea"
                                                                                     aria-invalid="false"></textarea></span>
                    </label></p>
                <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span
                            class="ajax-loader"></span></p>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
        </div>
        '?>
        <div class="modal fade" id="mainFormModal" tabindex="-1" role="dialog" aria-labelledby="mainFormModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered main-form-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mainFormModalLabel"><?= get_theme_mod('modalHeading', 'Contact Form');?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="bbs-separator"></div>
                    <div class="modal-body">
                        <?php if(get_theme_mod('formShortCode')):?>
                            <?= do_shortcode(get_theme_mod('formShortCode')); ?>
                        <?php else: ?>
                            <?= $defaultFormRender; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}
add_action('after_footer_block', 'mainFormModal', 10);
