<?php get_header(); ?>

<!-- Begin Section Container -->
    <section class="row">
        <div class="twelve columns opened-post-page">
            <!-- Begin Loop -->
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    /* OUR DATA CONTEXT IS DEFINED */
                    the_post();

                    if ( has_post_thumbnail() ) { ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <?php } ?>

                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                }
            }
            ?>
            <!-- End Loop -->
            <div class="post-nav">
                <?php previous_post_link(); ?>  |  
                <?php next_post_link(); ?>
            </div>
            </div>
        </div>
    </section>
<!-- End Section Container -->

<?php get_footer(); ?>
