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
            <?php if(!get_theme_mod('hideJumbotronButton', false)): ?>
                <?php if( 'link' == get_theme_mod('jumbotronButton', 'link')): ?>
                    <a href="<?= get_theme_mod('JumbotronButtonLink', '#');?>" role="button" class="btn btn-info btn-lg btn-bss">
                        <?= get_theme_mod('JumbotronButtonText', 'Push me');?>
                    </a>
                <?php else:?>
                    <button type="button" class="btn btn-info btn-lg btn-bss" data-toggle="modal" data-target="#mainFormModal">
                        <?= get_theme_mod('JumbotronButtonText', 'Push me');?>
                    </button>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
<?php }
}
add_action('bbsJumbotron', 'frontPageJumbotron');
