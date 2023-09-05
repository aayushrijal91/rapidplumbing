<?php
$page_contentArr = array();
$page_content = about_content::get_data($page_contentArr);
if (count($page_content)) {
    $page_content = $page_content[0];
}

/*  Meta data */
$meta_title         = $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $page_content['banner_video_image'];
// $banner_details['mobile_background_image'] = $page_content['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $page_content['banner_title_heading_tag'];
$banner_details['banner_title'] = $page_content['banner_title'];
$banner_details['banner_subtitle'] = $page_content['banner_subtitle'];
$banner_details['banner_button_1_text'] = $page_content['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $page_content['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $page_content['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $page_content['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="aboutUsPage">
    <div class="container">
        this is about us page
    </div>

    <?php require 'inc/gallery.php'; ?>
</main>
<?php
require 'inc/footer.php';
?>