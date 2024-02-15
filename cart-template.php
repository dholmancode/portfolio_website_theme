<?php
/**
 * Template Name: WooCommerce Cart Page
 *
 * This template can be applied to a page to display the WooCommerce cart using the [woocommerce_cart] shortcode.
 *
 * @package YourTheme
 */

get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" ="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php
                // Display the WooCommerce cart using the shortcode.
                echo do_shortcode('[woocommerce_cart]');
                ?>
            </div>
        </article>

    </main>
</div>

<?php get_footer(); ?>
