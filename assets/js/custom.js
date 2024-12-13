jQuery(document).ready(function($) {
    // Cart quantity update
    $('.quantity input').on('change', function() {
        $('[name="update_cart"]').trigger('click');
    });

    // Add to wishlist functionality
    $('.add-to-wishlist').on('click', function(e) {
        e.preventDefault();
        // Add your wishlist functionality here
    });

    // Product image gallery
    $('.woocommerce-product-gallery').each(function() {
        $(this).wc_product_gallery();
    });

    // Mobile menu toggle
    $('.mobile-menu-toggle').on('click', function() {
        $('.main-navigation').toggleClass('active');
    });
});
