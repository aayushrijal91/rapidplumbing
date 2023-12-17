<?php

/*  Meta data */
$meta_title         = "Thank You | Rapid Plumbing Group";
$meta_description     = "Looking for a plumber you can trust? Call Rapid Plumbing Group Pty Ltd at 1800 172 743 and get reliable and professional plumbing solutions for your home in no time!";
$meta_keyword         = "Rapid Plumbing";
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_title_heading_tag'] = "h1";
$banner_details['banner_title'] = "Thank You";
$banner_details['banner_subtitle'] = "Thank you for contacting us! We will get back to you as soon as possible";
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<!-- Event snippet for Booking Form (NEW MAIN SITE) conversion page -->

<script>
    gtag('event', 'conversion', {
        'send_to': 'AW-469873309/Mp5YCKqJtf8YEJ3lhuAB'
    });
</script>

<?php require 'inc/footer.php'; ?>