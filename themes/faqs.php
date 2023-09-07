<?php
$FaqPageArr = array();
$FaqPage = faqs_content::get_data($FaqPageArr);
if (count($FaqPage)) {
    $FaqPage = $FaqPage[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $FaqPage['meta_title'];
$meta_description     = $FaqPage['meta_description'];
$meta_keyword         = $FaqPage['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $FaqPage['banner_video_image'];
// $banner_details['mobile_background_image'] = $FaqPage['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $FaqPage['banner_title_heading_tag'];
$banner_details['banner_title'] = $FaqPage['banner_title'];
$banner_details['banner_subtitle'] = $FaqPage['banner_subtitle'];
$banner_details['banner_button_1_text'] = $FaqPage['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $FaqPage['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $FaqPage['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $FaqPage['banner_button_2_link'];
/*  Banner Array End */

// Get Projects
$services_list = array('orderBy' => 'dragSortOrder ASC');
$services_list = services_help_list::get_data($services_list);

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<?php
require 'inc/footer.php';
?>