<?php
/*
Template Name: Banniere
 */ 
?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="container padding_top_100">
    <div class="row padding_top_100 padding_bottom_100 text-center">
        <div class="col-xs-10 col-xs-offset-1">
            <h1 class="no_padding_top_bottom big">Your Favorite One Page<br />Multi Purpose Template</h1>
            <p class="title_small padding_top_40">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna vel scelerisque nisl consectetur et.
            </p>
            <button type="button" class="btn red margin_top_80"> Find out more</button>
        </div>
        
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
