<footer class="site-footer">
    <nav class="footer-navigation" role="navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'fallback_cb'    => 'ai_shelter_fallback_menu',
        ) );
        ?>
    </nav>
    <div class="footer-social">
        <a href="#"><span class="dashicons dashicons-facebook"></span></a>
        <a href="#"><span class="dashicons dashicons-twitter"></span></a>
        <a href="#"><span class="dashicons dashicons-instagram"></span></a>
    </div>
    <p>&copy; <?php echo date('Y'); ?> Your Shelter</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
