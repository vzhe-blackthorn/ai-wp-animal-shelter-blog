<footer class="site-footer">
    <div class="container">
        <nav class="footer-navigation" role="navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'fallback_cb' => 'ai_shelter_fallback_menu',
            ));
            ?>
        </nav>
        <div class="social-links">
            <a href="#" class="social-link" aria-label="Facebook"><span class="dashicons dashicons-facebook"></span></a>
            <a href="#" class="social-link" aria-label="Twitter"><span class="dashicons dashicons-twitter"></span></a>
            <a href="#" class="social-link" aria-label="Instagram"><span
                    class="dashicons dashicons-instagram"></span></a>
        </div>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>