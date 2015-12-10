<section>

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="box_client">
        <img src="<?php the_field('photo_citation'); ?>" class="img-responsive" />
    </div>
    <div class="box_client purple_box">
        <p class="citation"><?php the_field('citation'); ?></p>
        <p class="client_title"><?php the_field('poste_citation'); ?></p>
    </div>
    <div class="clearfix"></div>
<?php endwhile ; ?>
<?php endif; ?>    
</section>