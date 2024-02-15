<footer id="footer">
    <div class="footer-container">      
        <div class="row">
            <div class="footer-container">
                <div class="IG Icon">
                    <a target="_blank" href="https://www.instagram.com/danny.holman.media/" target="_blank">
                        <img src="https://dannyholmanmedia.com/wp-content/uploads/2023/11/IG-1.png" alt="IG Icon">
                    </a>
                </div>
                <div class="Email Icon">
                    <a href="mailto:media.dgh@gmail.com" target="_blank">
                        <img src="https://dannyholmanmedia.com/wp-content/uploads/2023/11/Mail-1.png" alt="Email Icon">
                    </a>
                </div>
                <div class="LinkedIn Icon">
                    <a href="https://www.linkedin.com/in/danny-holman-03a215176/" target="_blank">
                        <img src="https://dannyholmanmedia.com/wp-content/uploads/2023/11/Linkedin-1.png" alt="LinkedIn Icon">
                    </a>
                </div>
            </div>
        </div>
    </div>
	<script>
	const photos = document.querySelectorAll('.photo');

function enlargeImg(element) {
    const imgElement = element.querySelector('img');
    const portfolioText = element.querySelector('.portfolio-text');

    imgElement.classList.add('enlarged'); // Add the "enlarged" class to the image
    portfolioText.style.display = 'none'; // Hide the portfolio text
}

function resetImg(element) {
    const imgElement = element.querySelector('img');
    const portfolioText = element.querySelector('.portfolio-text');

    imgElement.classList.remove('enlarged'); // Remove the "enlarged" class from the image
    portfolioText.style.display = 'block'; // Show the portfolio text
}

photos.forEach(photo => {
    photo.addEventListener('click', () => {
        enlargeImg(photo); // Enlarge the clicked image and hide text
    });

    document.addEventListener('click', event => {
        if (!photo.contains(event.target)) {
            resetImg(photo); // Reset image size and show text when clicking outside the image
        }
    });
});
	</script>
</footer>