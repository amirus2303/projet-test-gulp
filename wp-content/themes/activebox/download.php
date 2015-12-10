<section>
    <div class="container">
    <?php if (have_posts()) : while (Have_posts()) : the_post(); ?>
        <div class="row padding_top_100 padding_bottom_100">
            <div class="col-xs-7 col-xs-offset-2 text-center">
                <p class="download"><?php the_field('title_dwonload'); ?></p>
                <p class="sub_download margin_bottom_40"><?php the_field('sub_title_download'); ?></p>
                <button type="button" class="btn download_red"><?php the_field('btn_download'); ?></button>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>