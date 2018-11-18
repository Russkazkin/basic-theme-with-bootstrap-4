<?php
if(!function_exists('frontPageJumbotron')){
function frontPageJumbotron(){ ?>
    <div class="container jumbotron-wrap mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <div class="bbs-separator"></div>
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <button type="button" class="btn btn-info btn-lg btn-bss">Order</button>
        </div>
    </div>
<?php }
}
add_action('bbsJumbotron', 'frontPageJumbotron');
