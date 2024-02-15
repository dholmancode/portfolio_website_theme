<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
    <body>

        <div class="hero-image">
            <div class="slideshow">
                <div id="heroBackground" class="slide active" style="background-image: url('https://dannyholmanmedia.com/wp-content/uploads/2023/09/Portfolio_2023-3.jpg');"></div>
                <div id="heroBackground" class="slide" style="background-image: url('https://dannyholmanmedia.com/wp-content/uploads/2023/09/Portfolio_2023-5.jpg');"></div>
                <div id="heroBackground" class="slide" style="background-image: url('https://dannyholmanmedia.com/wp-content/uploads/2023/09/Portfolio-12.jpg');"></div>
                <div id="heroBackground" class="slide" style="background-image: url('https://dannyholmanmedia.com/wp-content/uploads/2023/09/Portfolio-5.jpg');"></div>
                <div id="heroBackground" class="slide" style="background-image: url('https://dannyholmanmedia.com/wp-content/uploads/2023/09/Portfolio_2023-2.jpg');"></div>
                <div id="heroBackground" class="slide" style="background-image: url('https://dannyholmanmedia.com/wp-content/uploads/2023/09/Portfolio-21.jpg');"></div>
                <div id="heroBackground" class="slide" style="background-image: url('https://dannyholmanmedia.com/wp-content/uploads/2023/09/Portfolio-16.jpg');"></div>
            </div>           
        </div>
    
            <div class="hero-content">
                <div class="home-title">                
                    <h1>Danny Holman Media</h1>
                </div>
                <div id="dyno-header">
                    <p id="dynamic-phrase">Projects in <span id="dynamic-word"></span></p>
                  </div> 
                  <div class="hero-menu">
                    <div class="portfolio-btn">
                        <button onclick="window.location.href='https://dannyholmanmedia.com/portfolio/'">
                            Portfolio
                        </button>
                    </div>
                    <div class="extra-btn">
                        <button onclick="window.location.href='https://dannyholmanmedia.com/photo-portfolio/'">
                            Photography
                        </button>
                        
                        <button onclick="window.location.href='https://dannyholmanmedia.com/order-prints/'">
                            Order Prints
                        </button>
                    </div>
                    
                </div>
             </div>

<script>
  // JavaScript for the slideshow
const slideshow = document.querySelector('.slideshow');
const slides = document.querySelectorAll('.slide');
let currentIndex = 0;

function nextSlide() {
    // Get the current slide
    const currentSlide = slides[currentIndex];

    // Fade out the current slide
    currentSlide.style.opacity = 0;

    // Wait for the fade-out effect to complete before proceeding
    setTimeout(() => {
        // Remove 'active' class from the current slide
        currentSlide.classList.remove('active');

        // Increment the index
        currentIndex = (currentIndex + 1) % slides.length;

        // Add 'active' class to the next slide
        slides[currentIndex].classList.add('active');

        // Reset the opacity for the next slide
        slides[currentIndex].style.opacity = .7;
    }, 1000); // Adjust the delay based on your transition duration
}
setInterval(nextSlide, 5000);

    </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const words = ['Photography', 'Web Design', 'Web Development', 'Graphic Design', 'Video', 'Digital Marketing'];

      const dynamicWordElement = document.getElementById('dynamic-word');
      const dynamicPhraseElement = document.getElementById('dynamic-phrase');

      let currentIndex = 0;

      function changeDynamicWord() {
        const currentWord = words[currentIndex];

        currentIndex = (currentIndex + 1) % words.length;

        dynamicWordElement.style.opacity = 0;
        dynamicWordElement.style.transform = 'translateY(50px)';

        setTimeout(() => {
          dynamicWordElement.textContent = currentWord;
          dynamicPhraseElement.style.height = `${dynamicWordElement.offsetHeight}px`;
          dynamicWordElement.style.opacity = 1;
          dynamicWordElement.style.transform = 'translateY(0)';
        }, 300); 
      }

      changeDynamicWord();

      setInterval(changeDynamicWord, 4000);
    });
  </script>

  
    

</body>
</html>

<?php get_footer(); ?>
