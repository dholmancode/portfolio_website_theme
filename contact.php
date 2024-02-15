<?php
/*
Template Name: Contact Page
*/
get_header();
?>
<head>
	<style>
/* Style the container div of your contact form */
.contact-form {
    text-align: left; /* Align the text to the left */
    margin: 0 auto; /* Center the form horizontally */
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    max-width: 60vw; /* Limit the form width */
}

/* Style the form fields and labels */
.wpcf7-form-control {
    width: 100%; /* Set field width to 100% */
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
	font-style: 'nunito', sans-seriff;
}

.wpcf7-form-label {
    font-weight: bold;
}

/* Style the submit button */
.wpcf7-submit {
    background-color: #4B1521;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    max-width: 30vw;
    display: block; /* Ensure button takes full width */
    margin: 0 auto; /* Center the button horizontally */
	transition: color .5s ease, background-color .5s ease;
}

/* Hover effect for the submit button */
.wpcf7-submit:hover {
    background-color: white;
    color: black;
}

/* Style the success message (optional) */
.wpcf7-mail-sent-ok {
    background-color: transparent; /* Remove green background */
    color: #4B1521; /* Set font color to your desired color */
    font-weight: bold;
    text-align: center; /* Center the text */
    padding: 10px; /* Add some padding for better spacing */
}
		
		.wpcf7-response-output {
    background-color: transparent !important; /* Remove green background */
    color: #C89878; /* Set font color to your desired color */
    font-weight: bold;
    text-align: center; /* Center the text */
    padding: 10px; /* Add some padding for better spacing */
	border: none !important;
		}


	</style>
</head>

<div class="page-title">
    <h1 style="margin-top: 100px;"><?php the_title(); ?></h1>
</div>
<div class="Contact-content">
    <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="f3fcd46" title="Get in Touch"]'); ?>
    </div>
</div>

<?php get_footer(); ?>
