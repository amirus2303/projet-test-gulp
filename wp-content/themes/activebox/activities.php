<section class="padding_top_100 padding_bottom_100">
        <div class="container">
            <div class="row">
            <?php query_posts('post_type=activities'); ?>
            <?php while (have_posts()) : the_post(); ?> 
                <div class="col-xs-4 text-center margin_bottom_70 overflow_hidden">
                    <?php the_post_thumbnail(); ?>
                    <h3 class="margin_bottom_25 dark"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

                <!--<div class="col-xs-4 text-center margin_bottom_70">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/crayon.png" />
                    <h3 class="margin_bottom_25 dark">Easily Customised</h3>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor
                    </p>
                </div>
                <div class="col-xs-4 text-center margin_bottom_70">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/ecran.png" />
                    <h3 class="margin_bottom_25 dark">Responsive Ready</h3>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor
                    </p>
                </div>

                <div class="col-xs-4 text-center margin_bottom_70">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/ampoule.png" />
                    <h3 class="margin_bottom_25 dark">Modern Design</h3>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor
                    </p>
                </div>

                <div class="col-xs-4 text-center">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/atome.png" />
                    <h3 class="margin_bottom_25 dark">Clean Code</h3>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor
                    </p>
                </div>

                <div class="col-xs-4 text-center">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/cartable.png" />
                    <h3 class="margin_bottom_25 dark">Ready to Ship</h3>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor
                    </p>
                </div>

                <div class="col-xs-4 text-center">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/nuage.png" />
                    <h3 class="margin_bottom_25 dark">Download for Free</h3>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor
                    </p>
                </div>
            </div>-->
        </div>
    </section>