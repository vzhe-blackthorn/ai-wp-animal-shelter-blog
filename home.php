<?php
get_header();
?>

<section class="hero">
    <div class="hero-inner">
        <h1>Our Blog</h1>
        <p>Latest news and stories from our shelter.</p>
    </div>
</section>

<section class="blog-section">
    <div class="blog-grid">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
                    <?php if (has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>" class="blog-card-image">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    <?php endif; ?>
                    <div class="blog-card-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                    </div>
                </article>
            <?php endwhile; else: ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>