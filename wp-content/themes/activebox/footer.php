<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<footer class="bg_dark_blue text-center">
        <div class="container">
            <div class="row padding_top_30 padding_bottom_30">
                <p class="location">Copyright © 2015 ActiveBox. All Rights Reserved<br />Made with Y by Kamal Chaneman</p>
            </div>
        </div>
    </footer>
<?php endwhile; ?>
<?php endif; ?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/jquery.min.js"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/bootstrap.min.js"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/vendor/wow.min.js"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/assets_dist/js/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>