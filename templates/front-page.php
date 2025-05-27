<?php
/*
Template Name: Custom Front Page
*/
get_header();
?>

<section class="hero">
    <div class="hero-inner">
        <h2>Welcome to Our Animal Shelter</h2>
        <p>We provide care and find loving homes for animals in need.</p>
    </div>
</section>

<section class="offerings">
    <h2>What We Offer</h2>
    <div class="cards">
        <article class="card">
            <h3>Adoption</h3>
            <p>Find your perfect companion and give them a forever home.</p>
        </article>
        <article class="card">
            <h3>Volunteer</h3>
            <p>Join our team to help care for animals at the shelter.</p>
        </article>
        <article class="card">
            <h3>Donate</h3>
            <p>Your support helps us continue our mission.</p>
        </article>
        <article class="card">
            <h3>Foster</h3>
            <p>Provide a temporary home for animals awaiting adoption.</p>
        </article>
    </div>
</section>

<section class="gallery">
    <h2>Our Animals</h2>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-slider-1.png" alt="Animal 1"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-slider-2.png" alt="Animal 2"></div>
            <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-slider-3.png" alt="Animal 3"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<section class="contact-section">
    <h2>Contact Us</h2>
    <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); ?>
    </div>
    <div class="contact-info">
        <p>1234 Shelter Way<br>City, ST 12345</p>
        <p>Email: info@example.com<br>Phone: (555) 123-4567</p>
    </div>
</section>

<?php get_footer(); ?>
