<?php
$ServicesPageArr = array();
$page_content = services_content::get_data($ServicesPageArr);
if (count($page_content)) {
    $page_content = $page_content[0];
}

/* Assets Rates multi record end */

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

// Get Projects
$services_list = array('orderBy' => 'dragSortOrder ASC');
$services_list = services_list::get_data($services_list);

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="servicesPage">
    <section class="how-can-we-help">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-md-5">
                    <h2 class="fs-64 text-primary lh-1 highlight-white"><?= _isset($page_content, 'introduction_title') ?></h2>
                </div>
                
                <div class="col-md-7">
                    <article class="description fs-18">
                        <?= _isset($page_content, 'introduction_description') ?>
                    </article>
                </div>
            </div>

            <div class="row pt-6 pt-lg-8 g-3" id="servicesSlider">
                <?php foreach ($services_list as $service) : ?>
                    <div class="col-md-4 col-xl serviceHelpCardRow">
                        <a href="<?= _isset($service, 'slug') ?>">
                            <article class="serviceHelpCard">
                                <?= _imgSrc($service, 'image'); ?>
                                <div class="overlay">
                                    <p class="title"><?= _isset($service, 'title') ?></p>
                                </div>
                            </article>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="why-hire-us">
        <div class="container">
            <div class="row justify-content-xl-end">
                <div class="col-xl-9">
                    <article class="col-xl-6">
                        <p class="fs-165 text-white fw-700 text-xl-end lh-xl-0_7">Why</p>
                        <p class="fs-109 text-primary fw-700 lh-1">hire us?</p>
                    </article>

                    <div class="row justify-content-center g-3 pt-6">
                        <div class="col-md-6 col-lg-4">
                            <article class="whyHireUsCard">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <?= _imgSrc($page_content, 'reason_1_image', 'w-100 h-100') ?>
                                    </div>
                                    <div class="col-8">
                                        <p class="fs-24 fw-700"><?= _isset($page_content, 'reason_1_title') ?></p>
                                    </div>
                                </div>
                                <p class="pt-4 text-primary-light lh-1_5"><?= _isset($page_content, 'reason_1_description') ?></p>
                            </article>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <article class="whyHireUsCard">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <?= _imgSrc($page_content, 'reason_2_image', 'w-100 h-100') ?>
                                    </div>
                                    <div class="col-8">
                                        <p class="fs-24 fw-700"><?= _isset($page_content, 'reason_2_title') ?></p>
                                    </div>
                                </div>
                                <p class="pt-4 text-primary-light lh-1_5"><?= _isset($page_content, 'reason_2_description') ?></p>
                            </article>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <article class="whyHireUsCard">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <?= _imgSrc($page_content, 'reason_3_image', 'w-100 h-100') ?>
                                    </div>
                                    <div class="col-8">
                                        <p class="fs-20 fw-700"><?= _isset($page_content, 'reason_3_title') ?></p>
                                    </div>
                                </div>
                                <p class="pt-4 text-primary-light lh-1_5"><?= _isset($page_content, 'reason_3_description') ?></p>
                            </article>
                        </div>
                    </div>

                    <div class="row justify-content-end pt-5">
                        <div class="col-lg-10">
                            <article class="text-primary-light fs-18 lh-1_5">
                                <?= _isset($page_content, 'why_us_description') ?>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>

<?php require 'inc/footer.php'; ?>