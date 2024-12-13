<?php
/**
 * Template part for displaying products
 */
?>

<div class="product-item">
    <?php
    global $product;

    // Ensure visibility
    if ( empty( $product ) || ! $product->is_visible() ) {
        return;
    }
    ?>
    <div class="product-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php echo woocommerce_get_product_thumbnail(); ?>
        </a>
    </div>

    <div class="product-details">
        <h2 class="woocommerce-loop-product__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <?php if ( $price_html = $product->get_price_html() ) : ?>
            <span class="price"><?php echo $price_html; ?></span>
        <?php endif; ?>

        <?php woocommerce_template_loop_add_to_cart(); ?>
    </div>
</div>
