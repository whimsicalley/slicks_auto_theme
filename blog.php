<?php //Template Name: Blog Post Page ?>

<?php get_header(); ?>

    <?php get_header(); ?>
    <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

    <div class="row">
        <!--Blog post section-->
        <div class="eight columns post-overall">
            <div class="row">
                <!-- Begin Post Loop -->
                <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                            <!--Start Individual Post Column-->
                            <div class="six columns post">
                                <div class="time">
                                    <?php the_time('F dS, Y'); ?>
                                </div>
                                <div class="post-thumbnail">
                                    <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('thumbnail');
                                    } ?>
                                </div>
                                <h3 class="post-header">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3></a>
                                <div class="excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                            <!--End Post Column-->
                            <?php
                        } //end while
                    } //end if
                    ?>
                <!-- End Loop -->

            <?php wp_reset_query(); ?>
            </div>
        </div>
        <!--Sidebar area-->
        <div class="four columns" id="blog-widget">
            <h3>A Slick Blog</h3>
            <?php dynamic_sidebar('blog-widget'); ?>
        </div>
    </div>

<?php get_footer(); ?>
