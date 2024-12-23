<?php
/**
 * Template part for displaying posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
        ?>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages();
        ?>
    </div>

    <footer class="entry-footer">
        <?php
        $categories_list = get_the_category_list( esc_html__( ', ', 'your-theme-text-domain' ) );
        if ( $categories_list ) {
            printf( '<span class="cat-links">%s</span>', $categories_list );
        }
        ?>
    </footer>
</article>
