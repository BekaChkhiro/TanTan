<?php
/**
 * The front page template
 */

get_header();
?>

<main class="site-main">
    <section class="hero-section">
        <!-- Hero section content -->
    </section>

    <section class="featured-products">
        <div class="container">
            <h2><?php echo esc_html__('Featured Products', 'woocommerce'); ?></h2>
            <?php
            echo do_shortcode('[products limit="4" columns="4" visibility="featured"]');
            ?>
        </div>
    </section>

    <section class="new-arrivals">
        <div class="container">
            <h2><?php echo esc_html__('New Arrivals', 'woocommerce'); ?></h2>
            <?php
            echo do_shortcode('[products limit="4" columns="4" orderby="date" order="DESC"]');
            ?>
        </div>
    </section>

    <section class="categories-section">
        <div class="container">
            <h2><?php echo esc_html__('Shop by Category', 'woocommerce'); ?></h2>
            <?php
            echo do_shortcode('[product_categories number="4" columns="4"]');
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
