<?php
if(!function_exists('frontPageJumbotron')){
function frontPageJumbotron(){ ?>
    <div class="container jumbotron-wrap mt-5">
        <div class="jumbotron">
            <h1 class="display-4"><?= get_theme_mod('JumbotronHeading', 'Hello, world!');?></h1>
            <?php if(!get_theme_mod('hideJumbotronBigText', false)): ?>
            <p class="lead"><?= get_theme_mod('JumbotronBigText', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.');?></p>
            <?php endif; ?>
            <?php if(!get_theme_mod('hideJumbotronSeparator', false)): ?>
            <div class="bbs-separator"></div>
            <?php endif; ?>
            <?php if(!get_theme_mod('hideJumbotronSmallText', false)): ?>
            <p><?= get_theme_mod('JumbotronSmallText', 'It uses utility classes for typography and spacing to space content out within the larger container.');?></p>
            <?php endif; ?>
            <button type="button" class="btn btn-info btn-lg btn-bss">Order</button>
        </div>
    </div>
<?php }
}
add_action('bbsJumbotron', 'frontPageJumbotron');
