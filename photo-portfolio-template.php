<?php get_header(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/photo-portfolio.css">
    <!-- Other meta tags, title, and stylesheets can go here -->
    <?php wp_head(); ?>
	
</head>
 <div class="overlay"></div>
	    <div id="top" style="padding-top: 100px;">

        <h2 style="text-align: center; font-size: 40px;line-height: 40px; color: #238196; margin-top:50px">
            Welcome to my portfolio
        </h2>   
	<div class="ux-portfolio-header">
            <a href="https://dannyholmanmedia.com/ux-portfolio">
                <button>
                    <h2>UX / UI Design</h2>
                </button>
            </a>
            <a href="https://dannyholmanmedia.com/webdev-portfolio">
    
            <button>
                <h2>Web Development</h2>
            </button>
        </a>
            <a href="https://dannyholmanmedia.com/media-portfolio">
                <button>
                    <h2>Media</h2>
                
                </button>
            </a>
            <a href="https://dannyholmanmedia.com/photo-portfolio">
                <button style="background-color: #238196;">
                    <h2>Photography</h2>
                </button>
            </a>
    </div>
			        </div>

	<h1 style="text-align: center; margin-top: 00px;">Landscape & Travel Photography</h1>

<div class="portfolio-grid-container">
    <div class="photo-gallery">
        <?php
        $portfolio_query = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => -1));

        if ($portfolio_query->have_posts()) :
            $count = 0; // Initialize a counter

            while ($portfolio_query->have_posts()) : $portfolio_query->the_post();

                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the image URL.
                $location = get_the_content(); // Get the location from post content.

                // Output each photo within a column
                if ($count % 7 === 0) { // Change 4 to the desired number of items per column
                    echo '<div class="column">';
                }
                ?>
                <div class="photo">
                    <img src="<?php echo esc_url($image_url); ?>" onclick="enlargeImg()" alt="">
					<div class="portfolio-text">
						                    <?php echo wp_kses_post($location); ?>
                </div>
		    </div>

                <?php
                $count++;

                // Close the current column and start a new column after every 4 items
                if ($count % 7 === 0) { // Change 4 here as well
                    echo '</div>';
                }
            endwhile;

            // Close the last column if it's not already closed
            if ($count % 7 !== 0) { // Change 4 here as well
                echo '</div>';
            }

            wp_reset_postdata();
        else :
            echo 'No portfolio items found.';
        endif;
        ?>
    </div>
</div>

<?php
/*
Template Name: Photography Portfolio
*/
// Custom query to retrieve portfolio items.
$portfolio_query = new WP_Query(array(
    'post_type' => 'portfolio', // Use the custom post type name.
    'posts_per_page' => -1,
));

if ($portfolio_query->have_posts()) :
    while ($portfolio_query->have_posts()) :
        $portfolio_query->the_post();
        ?>
        <?php
    endwhile;
    wp_reset_postdata(); // Restore the global post data.
else :
    echo 'No portfolio items found.';
endif;

get_footer(); ?>