<?php
var_dump('tst');
die();
/*  Meta data */
$meta_title         = "Thank You";
$meta_description     = "Thank You";
$meta_keyword         = "Thank You";
$meta_image         = '';
// $meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
// $banner_details['banner_image'] = "";
$banner_details['banner_title_heading_tag'] = "h1";
$banner_details['banner_title'] = "test";
$banner_details['banner_subtitle'] = "test";
// $banner_details['banner_button_1_text'] = "";
// $banner_details['banner_button_1_link'] = "";
// $banner_details['banner_button_2_text'] = "";
// $banner_details['banner_button_2_link'] = "";
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<?php require 'inc/footer.php'; ?>