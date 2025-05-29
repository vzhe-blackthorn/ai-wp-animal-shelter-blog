<footer class="site-footer">
    <div class="container footer-inner">
        <nav class="footer-navigation" role="navigation">
            <ul class="menu">
                <li><a href="<?php echo esc_url( home_url('/blog') ); ?>"><span class="dashicons dashicons-admin-post"></span><span class="label">Blog</span></a></li>
                <li><a href="#offerings"><span class="dashicons dashicons-info"></span><span class="label">About</span></a></li>
                <li><a href="#contact"><span class="dashicons dashicons-email-alt"></span><span class="label">Contact</span></a></li>
            </ul>
        </nav>
        <div class="footer-info">
            <p><span class="dashicons dashicons-location"></span>1234 Shelter Way, City, ST 12345</p>
            <p><span class="dashicons dashicons-phone"></span>(555) 123-4567</p>
            <p><span class="dashicons dashicons-email"></span>info@example.com</p>
        </div>
        <div class="social-links">
            <a href="#" class="social-link" aria-label="Facebook"><span class="dashicons dashicons-facebook"></span></a>
            <a href="#" class="social-link" aria-label="Twitter"><span class="dashicons dashicons-twitter"></span></a>
            <a href="#" class="social-link" aria-label="Instagram"><span class="dashicons dashicons-instagram"></span></a>
        </div>
        <p class="copy">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>