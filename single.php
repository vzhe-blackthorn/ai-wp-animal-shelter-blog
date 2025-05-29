<?php
get_header();
?>

<section class="hero">
    <div class="hero-inner">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<main class="single-post-content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                <?php if (has_post_thumbnail()): ?>
                    <div class="single-post-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="single-post-meta">
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                </div>

                <div class="single-post-text">
                    <?php the_content(); ?>
                </div>

                <div class="share-links">
                    <a class="share-link facebook"
                        href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                        target="_blank" rel="noopener" aria-label="Share on Facebook"><span
                            class="dashicons dashicons-facebook"></span></a>
                    <a class="share-link twitter"
                        href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                        target="_blank" rel="noopener" aria-label="Share on Twitter"><span
                            class="dashicons dashicons-twitter"></span></a>
                    <a class="share-link whatsapp"
                        href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>"
                        target="_blank" rel="noopener" aria-label="Share on WhatsApp"><span
                            class="dashicons dashicons-whatsapp"></span></a>
                </div>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>