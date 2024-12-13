<?php
/**
 * The main template file
 */

get_header();
?>
<div id="primary" class="content-area">
    <span>Test</span>
    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            }

            the_posts_navigation();
        } else {
            get_template_part( 'template-parts/content', 'none' );
        }
        ?>
    </main>
</div>

<?php
get_sidebar();
get_footer();
