<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="eight columns common-page">
            <!-- Begin Loop -->
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>

                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                }
            }
            ?>
            <!-- End Loop -->
        </div>

        <div class="four columns" id="about-widget-sidebar">
            <h3>Get In Touch</h3>
            <?php dynamic_sidebar('about-widget-sidebar'); ?>
        </div>

    </section>
<!-- End Section Container -->

<?php get_footer(); ?>
