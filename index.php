    <?php get_header() ?>
    <?php get_sidebar(); ?>
    <!-- gallery overlay -->
    <div class="gallery-overlay">
        <img src="" alt="">
    </div>
    <!-- end overlay -->

    <!-- main -->
    <main>
        <!-- about us -->
        <section id="about" class="about-us">
            <div class="container">
                <div class="section-title">
                    <div class="line"></div>
                    <h1>About Us</h1>
                    <p>Let's now more about us</p>
                </div>
                <div class="section-content">
                    <div class="about-img">
                        <img src="<?php echo get_template_directory_uri() ?>/images/about-us.jpg" alt="About Us">
                    </div>
                    <div class="about-text">
                        <h2>We have good designer!</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla veniam ex recusandae doloribus inventore deleniti velit delectus! Voluptates natus sint accusantium quos, ratione, facilis eligendi vitae delectus eaque exercitationem reprehenderit.</p>
                        <button class="btn">Check Now</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about us -->

        <!-- list designer -->
        <section class="list-designer">
            <div class="container">
                <div class="section-title">
                    <div class="line"></div>
                    <h1>List of Designer</h1>
                    <p>Our best designer</p>
                </div>
                <div class="section-content">
                    <?php
                    $query = new WP_Query([
                        // 'post_type' => 'designer',
                        'posts_per_page' => 4
                    ]);

                    if($query->have_posts()): ?>
                        <?php while($query->have_posts()) : $query->the_post() ?>
                            <div class="card">
                                <div class="card-img">
                                    <?php //the_post_thumbnail() ?>
                                    <img src="<?= get_field('image')['url'] ?>" alt="">
                                </div>
                                <div class="card-body">
                                    <p><?php echo get_field('joined_date') ?></p>
                                    <h5><?php echo get_field('designer_name') ?></h5>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- end list of designer -->

        <!-- contact info -->
        <section class="contact-info">
            <div class="container">
                <div class="section-title">
                    <div class="line"></div>
                    <h1>Contact Info</h1>
                    <p>Contact us with this address</p>
                </div>
                <div class="section-content">
                    <div class="contact-phone">
                        <p>Phone: </p>
                        <p>0845 3994 2349</p>
                    </div>
                    <div class="contact-address">
                        <p>Address: </p>
                        <p>Jl. Gajahmada, Pontianak Indonesia</p>
                    </div>
                    <div class="contact-email">
                        <p>Email: </p>
                        <p>admin@example.com</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact info -->

        <!-- gallery -->
        <section class="gallery">
            <div class="container">
                <div class="section-title">
                    <div class="line"></div>
                    <h1>Gallery</h1>
                    <p>Our designer portfolio gallery</p>
                </div>
                <div class="section-content">
                    <div class="gallery-container">
                        <?php echo do_shortcode('[pg_indodesign]'); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- end gallery -->

    </main>
    <!-- end main -->
<?php get_footer() ?>