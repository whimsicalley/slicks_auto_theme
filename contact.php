<?php //Template Name: Contact Page ?>

<?php get_header(); ?>

    <?php get_header(); ?>
    <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

    <div class="row">
        <!--Blog post section-->
        <div class="eight columns" id="promos-widget">
            <div class="contact-form">
                <h2>Contact Us</h2>
                <p>Please fill out the form below if you have any questions or concerns. One of our talented technicians will get back to you within the next business day.</p>
                <?php wd_contact_form_maker(5); ?>
            </div>
        </div>
        <!--Sidebar area-->
        <div class="four columns" id="about-widget-sidebar">
            <h3>Get In Touch</h3>
            <?php dynamic_sidebar('about-widget-sidebar'); ?>
        </div>
    </div>

<?php get_footer(); ?>
