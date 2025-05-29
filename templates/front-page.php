<?php
/*
Template Name: Custom Front Page
*/
get_header();
?>

<section class="hero">
    <div class="hero-inner">
        <h1>Welcome to Our Animal Shelter</h1>
        <p>We provide care and find loving homes for animals in need.</p>
    </div>
</section>

<section id="about" class="offerings">
    <h2>What We Offer</h2>
    <div class="cards">
        <article class="card">
            <h3>Adoption</h3>
            <p>Find your perfect companion and give them a forever home.</p>
            <a href="#" class="button"><span class="dashicons dashicons-paw"></span>Adopt</a>
        </article>
        <article class="card">
            <h3>Volunteer</h3>
            <p>Join our team to help care for animals at the shelter.</p>
            <a href="#" class="button"><span class="dashicons dashicons-heart"></span>Join Us</a>
        </article>
        <article class="card">
            <h3>Donate</h3>
            <p>Your support helps us continue our mission.</p>
            <a href="#" class="button"><span class="dashicons dashicons-money"></span>Donate</a>
        </article>
        <article class="card">
            <h3>Foster</h3>
            <p>Provide a temporary home for animals awaiting adoption.</p>
            <a href="#" class="button"><span class="dashicons dashicons-admin-home"></span>Foster</a>
        </article>
    </div>
</section>

<section class="gallery">
    <h2>Our Animals</h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/image-slider-1.png" alt="Animal 1">
            </div>
            <div class="swiper-slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/image-slider-2.png" alt="Animal 2">
            </div>
            <div class="swiper-slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/image-slider-3.png" alt="Animal 3">
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<section id="contact" class="contact-section">
    <h2>Contact Us</h2>
    <div class="contact-card">
        <div class="contact-container">
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); ?>
            </div>
            <div class="contact-info">
                <p><span class="dashicons dashicons-location"></span>1234 Shelter Way City, ST 12345</p>
                <p><span class="dashicons dashicons-email"></span>info@example.com</p>
                <p><span class="dashicons dashicons-phone"></span>(555) 123-4567</p>
            </div>
        </div>
        <div class="contact-map">
            <iframe src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" loading="lazy"></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>