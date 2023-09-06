<?php
$ServicesPageArr = array();
$ServicesPage = services_content::get_data($ServicesPageArr);
if (count($ServicesPage)) {
    $ServicesPage = $ServicesPage[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $ServicesPage['meta_title'];
$meta_description     = $ServicesPage['meta_description'];
$meta_keyword         = $ServicesPage['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $ServicesPage['banner_video_image'];
// $banner_details['mobile_background_image'] = $ServicesPage['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $ServicesPage['banner_title_heading_tag'];
$banner_details['banner_title'] = $ServicesPage['banner_title'];
$banner_details['banner_subtitle'] = $ServicesPage['banner_subtitle'];
$banner_details['banner_button_1_text'] = $ServicesPage['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $ServicesPage['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $ServicesPage['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $ServicesPage['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<div class="container">
    this is services page
</div>

<?php
require 'inc/footer.php';
?>