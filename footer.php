<?php
/**
 * The footer template
 */
?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-widgets">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="footer-widget-area">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="site-info">
            <?php echo '&copy; ' . date('Y') . ' ' . get_bloginfo('name'); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
