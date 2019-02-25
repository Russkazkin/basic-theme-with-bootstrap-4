</div>
<!--.wrapper -->
<footer>
    <div class="container">
        <div class="bottom-wrapper row align-items-center">
            <div class="col-6">
                <div class="copyright">
                    &copy; <?= $_SERVER['SERVER_NAME'] ?>, 2017&mdash;<?=date('Y');?>
                </div>
            </div>
            <div class="col-6 skazkin-info">
                <?= get_theme_mod('footer_text', 'Basic Bootstrap Theme'); ?>
            </div>
        </div>
    </div>
</footer>

<?php
/**
 * after_footer_block hook.
 *
 * @hooked mainFormModal - 10 (/inc/bbs_form_modal.php - outputs jumbotron form)
 */
do_action('after_footer_block'); ?>
<?php wp_footer(); ?>
</body>
</html>