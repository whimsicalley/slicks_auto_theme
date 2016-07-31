<?php get_header(); ?>

    <!-- Begin Skeleton Container -->
        <main class="row">
            <div class="twelve columns">
                <!-- Begin Image Slider -->
                <?php echo do_shortcode( '[URIS id=25]' ); ?>
                <!-- Begin Main Content Area -->
                <div class="row">
                    <!-- Promotional Deals -->
                    <div class="four columns main-promos">
                        <div id="side-pic1">
                            <h3 class="side-headings"><a href="http://www.alleymanalio.com/slicks/promotions/">Specials</a></h3>
                        </div>
                        <div id="side-pic2">
                            <h3 class="side-headings"><a href="http://www.alleymanalio.com/slicks/about-2/">Why Slick's?</a></h3>
                        </div>
                        <div id="side-pic3">
                            <h3 class="side-headings"><a href="http://www.alleymanalio.com/slicks/blog/">Blog</a></h3>
                        </div>
                    </div>
                    <!-- Welcome Message -->
                    <div class="eight columns welcome-msg">
                        <h2>Welcome to Slick's!</h2>
                        <p>Slick's Auto Body is New Jersey's most highly rated full-service auto repair shop. We value our customers and strive to make every client 100% satisfied with our timely work, performed at the highest standards. Our certified mechanics are guaranteed to provide you with quality work. When you choose Slick's, you choose quality.</p>

                        <button>Learn More</button>
                    </div>
                </div>
                <!-- Begin Testimonials -->
                <section class="row">
                    <h3>Testimonials</h3>
                    <div class="four columns">
                        <p class="testimonial">"Very professional and FAST! Getting into an accident is stressful, but Slick's put my mind right at ease. I genuinely felt that I was a valued patron."</p>
                        <p>--Elizabeth W. of Cherry Hill, NJ</p>
                    </div>
                    <div class="four columns">
                        <p class="testimonial">"Thank you to all at Slick's Auto Body for fixing my baby. She's never driven or looked better!"</p>
                        <p>--Tom H. of Tuckerton, NJ</p>
                    </div>
                    <div class="four columns">
                        <p class="testimonial">"Incredible service at the right price. I recommend Slick's to anyone looking for quality auto work."</p>
                        <p>--Laura M. of Egg Harbor Township, NJ</p>
                    </div>
                </section>
            </div>
        </main>
    <!-- End Skeleton Container (not overall container) -->

<?php get_footer(); ?>
