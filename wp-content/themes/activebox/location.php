<section class="bg_blue">
    <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row padding_top_70 padding_bottom_70 text-center">
            <div class="col-xs-4">
                <h3 class="light">Location</h3>
                <p class="location"><?php the_field('adresse'); ?></p>
            </div>

            <div class="col-xs-4">
                <h3 class="light margin_bottom_25">Share with Love</h3>
                <p class="location"><i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-linkedin-square"></i></p>
            </div>

            <div class="col-xs-4">
                <h3 class="light">About ActiveBox</h3>
                <p class="location"><?php the_field('texte_apropos'); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>