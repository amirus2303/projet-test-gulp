<section>
        <div class="container">
            <div class="row padding_top_100 padding_bottom_100">
            <?php query_posts("post_type=employes"); ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="col-xs-3">
                    <div class="padding_right_30">
                        <?php the_post_thumbnail(); ?>
                        <p class="employe_name margin_top_25 no_margin_bottom"><?php the_title(); ?></p>
                        <p class="employe_title margin_bottom_25"><?php the_field('employe_job'); ?></p>
                        <p>
                            <?php echo wp_strip_all_tags( get_the_content() ); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>