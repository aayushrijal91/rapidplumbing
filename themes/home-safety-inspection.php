<?php
$HomeSafetyInspectionPageArr = array();
$HomeSafetyInspectionPageArr = home_safety_inspection_content::get_data($HomeSafetyInspectionPageArr);
if (count($HomeSafetyInspectionPageArr)) {
    $HomeSafetyInspectionPageArr = $HomeSafetyInspectionPageArr[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $HomeSafetyInspectionPageArr['meta_title'];
$meta_description     = $HomeSafetyInspectionPageArr['meta_description'];
$meta_keyword         = $HomeSafetyInspectionPageArr['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $HomeSafetyInspectionPageArr['banner_video_image'];
// $banner_details['mobile_background_image'] = $HomeSafetyInspectionPageArr['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $HomeSafetyInspectionPageArr['banner_title_heading_tag'];
$banner_details['banner_title'] = $HomeSafetyInspectionPageArr['banner_title'];
$banner_details['banner_subtitle'] = $HomeSafetyInspectionPageArr['banner_subtitle'];
$banner_details['banner_button_1_text'] = $HomeSafetyInspectionPageArr['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $HomeSafetyInspectionPageArr['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $HomeSafetyInspectionPageArr['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $HomeSafetyInspectionPageArr['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>