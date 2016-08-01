<?php //Template Name: Promotions Page ?>

<?php get_header(); ?>

    <?php get_header(); ?>
    <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

    <div class="row">
        <!--Blog post section-->
        <div class="eight columns" id="promos-widget">
            <?php dynamic_sidebar('promos-widget'); ?>
        </div>
        <!--Sidebar area-->
        <div class="four columns" id="about-widget-sidebar">
            <h3>Get In Touch</h3>
            <?php dynamic_sidebar('about-widget-sidebar'); ?>
        </div>
    </div>

<?php get_footer(); ?>
