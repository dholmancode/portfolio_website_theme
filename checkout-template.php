<?php
/**
 * Template Name: WooCommerce Checkout Page
 *
 * This template can be applied to a page to display the WooCommerce cart using the [woocommerce_cart] shortcode.
 *
 * @package YourTheme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php
                // Display the WooCommerce cart using the shortcode.
                echo do_shortcode('[woocommerce_checkout]');
                ?>
            </div>
        </article>

    </main>
</div>

<?php get_footer(); ?>
