<?php get_header() ?>
<?php get_sidebar(); ?>
    <!-- contact -->
    <section class="contact">
        <div class="container">
            <div class="section-title">
                <div class="line"></div>
                <h1>Contact Us</h1>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="section-content">
                <!-- <form action="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" rows="10"></textarea>
                    </div>
                    <input type="submit" class="btn" value="Send">
                </form> -->
                <?php echo do_shortcode('[contact-form-7 id="114" title="IDesign"]') ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>