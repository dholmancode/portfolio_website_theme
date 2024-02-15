<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="description" content="Landscape & Travel Photography, Website Development">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="loading-animation">
        <!-- You can customize the loading animation content here -->
        <img src="https://dannyholmanmedia.com/wp-content/uploads/2024/01/DGH-Media-Logo_2024.png" alt="LOADING">

    </div>	
    <header>
        <div style= id="site-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img id="header-logo" src="https://dannyholmanmedia.com/wp-content/uploads/2024/01/DGH-Media-Logo_2024.png" alt="DGH logo">
        </a>
    </div>
    <div id="site-menu">
        <nav class="navbar">
            <ul class="nav-menu">
                    <li class="nav-item"><a href="https://dannyholmanmedia.com/portfolio/">Portfolio</a></li>
                <li class="nav-item"><a href="https://dannyholmanmedia.com/order-prints" class="nav-link">Order Prints</a></li>
				<li class="nav-item"><a href="https://dannyholmanmedia.com/contact" class="nav-link">Contact</a></li>
                <li class="nav-item">
                   <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="nav-link cart-icon">
                        <?php
                        $cart_count = WC()->cart->get_cart_contents_count();
                        if ($cart_count > 0) {
                            echo '(' . esc_html($cart_count) . ')';
                        }
                        ?>
                    </a>
                </li>
            </ul>
        </div>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <?php // remove the slashes to repopulate the auto WP header wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
    <script>
   	// script.js

// Header size change script
const header = document.querySelector('header');
let lastScroll = 0;
const scrollThreshold = 10; // Adjust this threshold as needed

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    if (currentScroll > lastScroll && currentScroll > scrollThreshold) {
        // Scrolling down and not at the top
        header.classList.add('small');
    } else if (currentScroll === 0) {
        // At the top of the page
        header.classList.remove('small');
    }

    lastScroll = currentScroll;
});

// Hamburger menu script
const hamburger = document.querySelector(".hamburger");
const navmenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navmenu.classList.toggle("active");
});

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navmenu.classList.remove("active");
}));

// Page transitions script
document.addEventListener('DOMContentLoaded', function () {
    const pages = document.querySelectorAll('.page');
    const pageContainer = document.getElementById('page-container');

    let currentPage = 0;

    function showPage(pageIndex) {
        const offset = -pageIndex * 100;
        pageContainer.style.opacity = 0; // Fade out the current page

        setTimeout(function () {
            pageContainer.style.transform = `translateX(${offset}vw)`;
            pageContainer.style.opacity = 1; // Fade in the new page
            currentPage = pageIndex;
        }, 300); // Adjust the duration of the fade-out effect
    }

    // Example: Show the second page initially
    showPage(1);

    // Add event listeners to trigger page transitions
    document.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowRight' && currentPage < pages.length - 1) {
            showPage(currentPage + 1);
        } else if (e.key === 'ArrowLeft' && currentPage > 0) {
            showPage(currentPage - 1);
        }
    });
});


function toggleDropdown(dropdownId, arrowIconId) {
    var dropdown = document.getElementById(dropdownId);
    var arrowIcon = document.getElementById(arrowIconId);

    if (dropdown.style.opacity === "0" || dropdown.style.opacity === "") {
        dropdown.style.opacity = "1";
        dropdown.style.visibility = "visible";
        dropdown.style.bottom = "0";  // Set bottom to 0 when opening
        arrowIcon.classList.add("rotate");
    } else {
        dropdown.style.opacity = "0";
        dropdown.style.visibility = "hidden";
        dropdown.style.bottom = "-100%";  // Set bottom to -100% when closing
        arrowIcon.classList.remove("rotate");
    }
}


    const webitemElements = document.querySelectorAll('.web-portfolio-item');

    function animateOnScroll(entries, observer) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            } else {
                entry.target.classList.remove('animate');
            }
        });
    }

    const observer = new IntersectionObserver(animateOnScroll, { threshold: 0.2 });

    webitemElements.forEach((element) => {
        observer.observe(element);
    });


    const portfolioItems = document.querySelectorAll('.portfolio-item');

function animate() {
    portfolioItems.forEach(portfolioItem => {
        const portfolioItemPosition = portfolioItem.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;

        const textElement = portfolioItem.querySelector('.portfolio-text');
        const imgElement = portfolioItem.querySelector('.portfolio-item img');

        if (portfolioItemPosition < screenPosition) {
            textElement.classList.add('animate');
            imgElement.classList.add('animate');
        } else {
            textElement.classList.remove('animate');
            imgElement.classList.remove('animate');
        }
    });
}

window.addEventListener('scroll', animate);
// Trigger the animation on page load
animate();
   
   </script>
    <?php wp_footer(); ?>
</body>
</html>
