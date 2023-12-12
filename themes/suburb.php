<?php

$SUBURB = '';

if (isset($_GET['slug']) && !empty($_GET['slug']) && !is_numeric($_GET['slug'])) {
    $suburbSlug = $_GET['slug'];
}

if ($suburbSlug != '') {
    $suburbArray = array('where' => "`slug` = '" . $suburbSlug . "'");
    $suburb = suburb_list::get_data($serviceArray);
    if (count($suburb) > 0) {
        $SUBURB = $suburb[0]['title'];
    } else {
        include('404.php');
        die();
    }
}

$pageContentArr = array();
$page_content = suburb_inner_content::get_data($pageContentArr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

/*  Meta data */
$meta_title         =  $SUBURB . ' - ' . $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $page_content['banner_video_image'];
// $banner_details['mobile_background_image'] = $page_content['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $page_content['banner_title_heading_tag'];
$banner_details['banner_title'] = !empty($page_content['banner_title']) ? $page_content['banner_title'] : $SUBURB;
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

<main class="suburbInnerPage">
    <section class="introduction py-7">
        <div class="container">
            <div class="hero-image bg-grey-2 d-flex justify-content-center align-items-center">
                <?php
                if (count($page_content['introduction_hero_image']) > 0) : ?>
                    <?= _imgSrc($page_content, 'introduction_hero_image', 'h-100 w-100 object-fit-cover'); ?>
                <?php else : ?>
                    <svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M103.569 0.426697H20.9232C15.4435 0.426697 10.1881 2.60353 6.31334 6.47831C2.43855 10.3531 0.261719 15.6084 0.261719 21.0882L0.261719 103.734C0.261719 109.214 2.43855 114.469 6.31334 118.344C10.1881 122.219 15.4435 124.396 20.9232 124.396H103.569C109.049 124.396 114.304 122.219 118.179 118.344C122.054 114.469 124.231 109.214 124.231 103.734V21.0882C124.231 15.6084 122.054 10.3531 118.179 6.47831C114.304 2.60353 109.049 0.426697 103.569 0.426697ZM41.5847 21.0882C43.628 21.0882 45.6253 21.6941 47.3242 22.8293C49.0231 23.9644 50.3472 25.5779 51.1291 27.4656C51.911 29.3533 52.1156 31.4304 51.717 33.4344C51.3184 35.4384 50.3345 37.2791 48.8897 38.7239C47.4449 40.1687 45.6041 41.1526 43.6002 41.5512C41.5962 41.9498 39.519 41.7453 37.6313 40.9633C35.7436 40.1814 34.1302 38.8573 32.995 37.1584C31.8599 35.4595 31.254 33.4622 31.254 31.419C31.254 28.6791 32.3424 26.0514 34.2798 24.114C36.2172 22.1766 38.8449 21.0882 41.5847 21.0882ZM99.7572 93.4035H28.0515C27.5209 93.4033 27.0032 93.2396 26.5689 92.9348C26.1346 92.63 25.8047 92.1988 25.6241 91.6999C25.4435 91.201 25.421 90.6586 25.5595 90.1464C25.6981 89.6342 25.991 89.1771 26.3985 88.8373L80.1805 44.0225C80.4941 43.7621 80.8649 43.5797 81.2626 43.4901C81.6603 43.4005 82.0735 43.4064 82.4685 43.5071C82.8635 43.6079 83.229 43.8007 83.5352 44.0699C83.8414 44.339 84.0795 44.6768 84.2301 45.0556L102.154 89.86C102.311 90.2519 102.37 90.6763 102.325 91.096C102.28 91.5158 102.132 91.9181 101.896 92.2678C101.659 92.6175 101.341 92.9038 100.968 93.1018C100.595 93.2998 100.179 93.4034 99.7572 93.4035Z" fill="white" />
                    </svg>
                <?php endif; ?>
            </div>
            <div class="content py-6 px-5">
                <p class="text-primary fs-55 fw-700">Reliable Emergency <?= $SUBURB ?> Plumber</p>

                <div class="description fs-24 lh-1_67 pt-5">
                    <p>At Rapid Plumbing Group Pty Ltd, you can count on our team of dedicated Kingswood plumbing technicians to deliver outstanding plumbing repair and installation services designed to restore the flow of water to your home. Our expert plumber Kingswood offers fast and effective service, including burst pipe repair emergency solutions, water heater installation and repair, septic tank plumbing, and much more, so make sure to work with a team who always puts your needs and comfort first and call for service today.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require 'inc/footer.php'; ?>