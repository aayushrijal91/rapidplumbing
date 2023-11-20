<?php
$ContactUsPageArr = array();
$ContactUsPageArr = contact_us_content::get_data($ContactUsPageArr);
if (count($ContactUsPageArr)) {
    $ContactUsPageArr = $ContactUsPageArr[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $ContactUsPageArr['meta_title'];
$meta_description     = $ContactUsPageArr['meta_description'];
$meta_keyword         = $ContactUsPageArr['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $ContactUsPageArr['banner_video_image'];
// $banner_details['mobile_background_image'] = $ContactUsPageArr['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $ContactUsPageArr['banner_title_heading_tag'];
$banner_details['banner_title'] = $ContactUsPageArr['banner_title'];
$banner_details['banner_subtitle'] = $ContactUsPageArr['banner_subtitle'];
$banner_details['banner_button_1_text'] = $ContactUsPageArr['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $ContactUsPageArr['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $ContactUsPageArr['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $ContactUsPageArr['banner_button_2_link'];
/*  Banner Array End */

$HomePageArr = array();
$HomePage = homepage_content::get_data($HomePageArr);
if (count($HomePage)) {
    $HomePage = $HomePage[0];
}

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="contactUsPage position-relative">
    <?php require 'inc/contactForm.php'; ?>

    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/background/contact-us-dots.svg" class="position-absolute bottom-0 z-n1" alt="Rapid Plumbing Van" />
</main>

<?php require 'inc/footer.php'; ?>