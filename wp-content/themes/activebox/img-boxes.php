<section>
    <?php query_posts("post_type=img_boxes&order=ASC"); ?> 
    <?php while (have_posts()) : the_post(); ?>
        <div class="box-img js-box-img">
            <?php the_post_thumbnail(); ?>
            <div class="box-img-content">
                <div class="box-img-content_wrapper text-center">
                    <h3 class="light"><?php the_title(); ?></h3>
                    <p class="white"><?php the_field('project_name'); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>    

        <!--<div class="box-img js-box-img">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/img2.jpg">
            <div class="box-img-content">
                <div class="box-img-content_wrapper text-center">
                    <h3 class="light">Project name</h3>
                    <p class="white">Website design</p>
                </div>
            </div>
        </div>
        <div class="box-img js-box-img">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/img3.jpg">
            <div class="box-img-content">
                <div class="box-img-content_wrapper text-center">
                    <h3 class="light">Project name</h3>
                    <p class="white">Website design</p>
                </div>
            </div>
        </div>
        <div class="box-img js-box-img">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/img4.jpg">
            <div class="box-img-content">
                <div class="box-img-content_wrapper text-center">
                    <h3 class="light">Project name</h3>
                    <p class="white">Website design</p>
                </div>
            </div>
        </div>
        <div class="box-img js-box-img">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/img5.jpg">
            <div class="box-img-content">
                <div class="box-img-content_wrapper text-center">
                    <h3 class="light">Project name</h3>
                    <p class="white">Website design</p>
                </div>
            </div>
        </div>
        <div class="box-img js-box-img">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/img6.jpg">
            <div class="box-img-content">
                <div class="box-img-content_wrapper text-center">
                    <h3 class="light">Project name</h3>
                    <p class="white">Website design</p>
                </div>
            </div>
        </div>
        <div class="box-img js-box-img">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/img7.jpg">
            <div class="box-img-content">
                <div class="box-img-content_wrapper text-center">
                    <h3 class="light">Project name</h3>
                    <p class="white">Website design</p>
                </div>
            </div>
        </div>
        <div class="box-img js-box-img">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/img/img8.jpg">
            <div class="box-img-content">
                <div class="box-img-content_wrapper text-center">
                    <h3 class="light">Project name</h3>
                    <p class="white">Website design</p>
                </div>
            </div>
        </div>-->
        <div class="clearfix"></div>
    </section>