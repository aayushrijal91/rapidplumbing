<?php

if (isset($_GET['slug']) && !empty($_GET['slug']) && !is_numeric($_GET['slug'])) {
    $serviceSlug = $_GET['slug'];
}

if ($serviceSlug != '') {
    $serviceArray = array('where' => "`slug` = '" . $serviceSlug . "'");
    $service = services_list::get_data($serviceArray);
    if (count($service) > 0) {
        $page_content = $service[0];
    } else {
        include('404.php');
        die();
    }
}

/*  Meta data */
$meta_title         = $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/*  Banner details  Start*/
$banner_details['banner_title_heading_tag'] = _isset($page_content, 'banner_title_heading_tag');
$banner_details['banner_title'] = _isset($page_content, 'banner_title');
$banner_details['banner_button_1_text'] = _isset($page_content, 'banner_button_1');
$banner_details['banner_button_1_link'] = _isset($page_content, 'banner_button_1_link');
$banner_details['banner_button_2_text'] = _isset($page_content, 'banner_button_2');
$banner_details['banner_button_2_link'] = _isset($page_content, 'banner_button_2_link');
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/serviceBanner.php';
?>

<main class="serviceInner">
    
</main>

<?php require 'inc/footer.php'; ?>