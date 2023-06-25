<?php 

// Define basic website variables 
$title = "Pamper Me Spa - Relaxation & Wellness Center";
$description = "A relaxation and wellness center offering massage therapy, facials, and other spa treatments";

// Include header file 
include_once 'header.php';

// Display page title 
echo "<h1>$title</h1>";

// Display page description
echo "<p>$description</p>";

// Display featured image
echo "<img src='images/spa-service.jpg' alt='Featured Image'>";

// Include menu file
include_once 'menu.php';

// Include spa services file
include_once 'spa-services.php';

// Include contact information file
include_once 'contact-info.php';

// Include footer file
include_once 'footer.php';

?>