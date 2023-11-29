<?php
$BlogsPageArr = array();
$BlogsPageArr = blogs_content::get_data($BlogsPageArr);
if (count($BlogsPageArr)) {
    $BlogsPageArr = $BlogsPageArr[0];
}

$BlogsArr = array('orderBy' => 'dragSortOrder ASC');
$BlogsArr = blogs::get_data($BlogsArr);

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
    <section class="bg-white py-8">
        <div class="container">
            <div class="bg-light row mb-5">
                <div class="col-2">
                    <select class="mx-4 py-4 bg-transparent border-0 text outline-none shadow-none">
                        <option selected disabled>Select Blog Category</option>
                        <option>test1</option>
                    </select>
                </div>
                <div class="col-auto">
                    <div class="divider"></div>
                </div>
                <div class="col">
                    <div class="row h-100 align-items-center">
                        <div class="col-auto">
                            <p class="text-grey-3">Selected Filters</p>
                        </div>
                        <div class="col-auto">
                            <p class="text-white rounded-pill bg-grey-3 px-3 py-2">All</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach ($BlogsArr as $blog) { ?>
                    <div class="col-md-6 col-lg-4">
                        <article class="blogCard">
                            <div class="image">
                                <?= _imgSrc($blog, 'thumbnail'); ?>
                            </div>
                            <article class="content flex-grow-1 d-flex flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-24 fw-600"><?= _isset($blog, 'title') ?></h4>
                                    <div class="divider"></div>
                                    <p class="fs-14 fw-500 lh-1_5 pb-4"><?= _isset($blog, 'short_description') ?></p>
                                </div>
                                <div>
                                    <a href="<?= _isset($blog, 'slug') ?>" class="btn btn-outline-primary d-inline-flex border-1 text-white rounded-pill px-3 px-lg-4 fs-16 fw-700">Read More</a>
                                </div>
                            </article>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>

<?php require 'inc/footer.php'; ?>