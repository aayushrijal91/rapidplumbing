<?php
$BlogsPageArr = array();
$BlogsPageArr = blogs_content::get_data($BlogsPageArr);
if (count($BlogsPageArr)) {
    $BlogsPageArr = $BlogsPageArr[0];
}

$BlogsArr = array();
$BlogsArr = blogs::get_data($BlogsArr);
// if (count($BlogsArr)) {
//     $BlogsArr = $BlogsArr[0];
// }

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $BlogsPageArr['meta_title'];
$meta_description     = $BlogsPageArr['meta_description'];
$meta_keyword         = $BlogsPageArr['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $BlogsPageArr['banner_video_image'];
// $banner_details['mobile_background_image'] = $BlogsPageArr['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $BlogsPageArr['banner_title_heading_tag'];
$banner_details['banner_title'] = $BlogsPageArr['banner_title'];
$banner_details['banner_subtitle'] = $BlogsPageArr['banner_subtitle'];
$banner_details['banner_button_1_text'] = $BlogsPageArr['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $BlogsPageArr['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $BlogsPageArr['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $BlogsPageArr['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="blogsPage">
    <section class="blogs">
        <div class="container">
            <div class="row g-4">
                <?php foreach ($BlogsArr as $blog) { ?>
                    <div class="col-md-6 col-lg-4">
                        <article class="blogCard">
                            <div class="image">
                                <?= _imgSrc($blog, 'thumbnail'); ?>
                            </div>
                            <div class="content">
                                <h4 class="fs-24 fw-600"><?= _isset($blog, 'title') ?></h4>
                                <div class="divider"></div>
                                <p class="fs-14 fw-500 lh-1_5 pb-4"><?= _isset($blog, 'short_description') ?></p>
                                <a href="#" class="btn btn-outline-primary d-inline-flex border-1 text-white rounded-pill px-3 px-lg-4 fs-16 fw-700">Read More</a>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>

<?php require 'inc/footer.php'; ?>