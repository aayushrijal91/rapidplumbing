<?php
/* menu single record start*/
$header_settings_Arr = array();
$header_settings = header_settings::get_data($header_settings_Arr);
$header_settings = $header_settings[0];
/* menu single record end */

/* SEO Info start */
$seo_common_variablesarr = array();
$seo_common_variables = seo_common_variables::get_data($seo_common_variablesarr);
$seo_common_variables = $seo_common_variables[0];
/* SEO Info End */
define('V_DEFAULT_IMG_ALT', $seo_common_variables['seo_default_image_alt_tag']);

$HomePageArr = array();
$page_content = homepage_content::get_data($HomePageArr);
if (count($page_content)) {
    $page_content = $page_content[0];
}

$services_list = array('orderBy' => 'dragSortOrder ASC');
$services_list = services_list::get_data($services_list);

$how_to_help_list = array('orderBy' => 'dragSortOrder ASC');
$how_to_help_list = how_to_help_list::get_data($how_to_help_list);

$testimonials = array('orderBy' => 'dragSortOrder ASC');
$testimonials = testimonials::get_data($testimonials);

$hiring_reasons = array('orderBy' => 'dragSortOrder ASC');
$hiring_reasons = hiring_reasons::get_data($hiring_reasons);

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

require 'inc/header.php';
require 'inc/nav.php';
?>

<main class="homepage">
    <section class="position-relative d-flex justify-content-center">
        <div class="w-100">
            <div class="homebanner d-none d-md-block">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/homebanner-1.jpg" alt="home banner slide" />
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/homebanner-2.jpg" alt="home banner slide" />
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/homebanner-3.jpg" alt="home banner slide" />
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/homebanner-4.jpg" alt="home banner slide" />
            </div>
            <div class="homebanner d-md-none">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/homebanner-sm-1.jpg" alt="home banner slide" />
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/homebanner-sm-2.jpg" alt="home banner slide" />
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/homebanner-sm-3.jpg" alt="home banner slide" />
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/homebanner-sm-4.jpg" alt="home banner slide" />
            </div>
        </div>
        <!--<?php if (!empty($page_content['banner_button_text']) && !empty($page_content['banner_button_link'])) : ?>-->
        <!--    <div class="d-flex justify-content-center mb-4">-->
        <!--        <a href="<?= _isset($page_content, 'banner_button_link') ?>" class="text-uppercase btn btn-secondary rounded-pill d-inline-flex fs-18 fw-700 text-white px-5 px-lg-6"><?= _isset($page_content, 'banner_button_text') ?></a>-->
        <!--    </div>-->
        <!--<?php endif; ?>-->

        <div class="rapid-van position-absolute bottom-0 mx-auto w-100">
            <div class="rapid-van-slider">
                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/van-1.png" alt="Rapid Plumbing Van" class="van" /></div>
                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/van-2.png" alt="Rapid Plumbing Van" class="van" /></div>
                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/van-3.png" alt="Rapid Plumbing Van" class="van" /></div>
                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/van-4.png" alt="Rapid Plumbing Van" class="van" /></div>
            </div>
        </div>
    </section>

    <?php require 'inc/contactForm.php'; ?>

    <section class="trusted position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="trusted-main-slider">
                    <?php foreach ($page_content['trusted_plumber_images'] as $val) : ?>
                        <div>
                            <img src="<?= V_CDN_URL . $val['urlPath'] ?>" alt="<?= $val['info2'] ?>" class="w-100 h-100 object-fit-cover" />
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <article class="px-3 py-6 p-md-7 p-lg-6 pe-xl-10 d-flex flex-column gap-1_5">
                    <h3 class="fs-70 fw-500 lh-1 highlight-primary"><?= _isset($page_content, 'trusted_plumber_title') ?></h3>

                    <article class="fs-20 py-4 col-xl-9 description">
                        <?= _isset($page_content, 'trusted_plumber_description') ?>
                    </article>

                    <div class="trusted-thumbnail-slider pt-md-4">
                        <?php foreach ($page_content['trusted_plumber_images'] as $val) : ?>
                            <div>
                                <img src="<?= V_CDN_URL . $val['urlPath'] ?>" alt="<?= $val['info2'] ?>" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                </article>
            </div>
        </div>
        <div class="trusted-bg position-absolute bottom-0 end-0 mt-12 z-n1">
            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-bg.png" alt="Rapid Plumbing Van" />
        </div>
    </section>

    <section class="blue-gradient overflow-hidden">
        <section class="welcome position-relative">
            <div class="container position-relative z-1">
                <p class="fs-48 fw-500 text-md-center lh-1 highlight-primary" data-aos="fade-up"><?= _isset($page_content, 'welcome_title') ?></p>

                <p class="fs-64 fw-500 text-md-center lh-1 highlight-primary py-4 py-md-5" data-aos="fade-up"><span>Award Winning</span> Plumbing Company </p>

                <p class="fs-20 text-md-center"><?= _isset($page_content, 'welcome_subtitle') ?></p>

                <?php if (!empty($page_content['welcome_button_text']) && !empty($page_content['welcome_button_link'])) : ?>
                    <div class="text-center py-6 d-none d-md-block">
                        <a href="<?= _isset($page_content, 'welcome_button_link') ?>" class="btn btn-primary d-inline-flex text-white rounded-pill py-1 px-4 fs-18 fw-700"><?= _isset($page_content, 'welcome_button_text') ?></a>
                    </div>
                <?php endif; ?>

                <div class="row justify-content-center pt-5 pt-md-0" data-aos="fade-up">
                    <div class="col-xl-9">
                        <div class="row gx-3" id="awards-slider">
                            <div class="col-6 col-md">
                                <article class="awardCard mt-md-7">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-award-2018.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2018</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Winner</p>
                                </article>
                            </div>
                            <div class="col-6 col-md">
                                <article class="awardCard mt-md-5">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-award-2019.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2019</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col-6 col-md">
                                <article class="awardCard mt-md-9">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-award-2020.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2020</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col-6 col-md">
                                <article class="awardCard">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-award-2021.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2021</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col-6 col-md">
                                <article class="awardCard mt-md-7">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-award-2022.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2022</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (!empty($page_content['welcome_button_text']) && !empty($page_content['welcome_button_link'])) : ?>
                    <div class="text-center pt-5 d-md-none">
                        <a href="<?= _isset($page_content, 'welcome_button_link') ?>" class="btn btn-primary d-inline-flex text-white rounded-pill py-1 px-4 fs-18 fw-700"><?= _isset($page_content, 'welcome_button_text') ?></a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="welcome-bg welcome-bg1 position-absolute start-0 top-50 translate-middle-y mt-5 z-n1 d-none d-lg-block"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg1.png" alt="Rapid Plumbing Van" /></div>
            <div class="welcome-bg welcome-bg2 position-absolute end-0 top-50 translate-middle-y mt-5 z-n1 d-none d-lg-block"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg2.png" alt="Rapid Plumbing Van" /></div>
            <div class="circle-gradient circle-gradient-1 z-n1"></div>
        </section>

        <section class="help">
            <div class="container position-relative z-1">
                <h3 class="fs-64 fw-500 text-md-center lh-1 highlight-primary">How can we <span>help</span> you?</h3>
                <div class="row pt-5 pt-md-8 gy-3">
                    <?php foreach ($how_to_help_list as $data) : ?>
                        <div class="col-md-6 col-xl-3">
                            <article class="helpCard">
                                <?= _imgSrc($data, 'image') ?>
                                <div class="overlay">
                                    <p class="fs-24 fw-700 lh-1 text-start filter-shadow"><?= _isset($data, 'title') ?></p>
                                    <a href="<?= _isset($data, 'slug') ?>" class="btn btn-primary text-white rounded-pill py-0_75 px-3 px-lg-5 fs-18 fw-700 ">ENQUIRE</a>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="process">
            <div class="container position-relative z-1">
                <h3 class="fs-70 fw-500 text-md-center lh-1 highlight-primary"><?= _isset($page_content, '3_step_process_title') ?></h3>
                <div class="row justify-content-center pt-5 pt-md-8">
                    <div class="col-xl-9">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <article class="processCard">
                                    <p class="number">01</p>
                                    <?= _imgSrc($page_content, 'step_1_image') ?>
                                    <div>
                                        <p class="fs-20 fw-600 lh-1"><?= _isset($page_content, 'step_1_title') ?></p>
                                        <article class="fs-18 text-primary-light pt-3 description"><?= _isset($page_content, 'step_1_description') ?></article>
                                    </div>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/arrow.png" class="arrow" alt="arrow" />
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="processCard">
                                    <p class="number">02</p>
                                    <?= _imgSrc($page_content, 'step_2_image') ?>
                                    <div>
                                        <p class="fs-20 fw-600 lh-1"><?= _isset($page_content, 'step_2_title') ?></p>
                                        <article class="fs-18 text-primary-light pt-3 description"><?= _isset($page_content, 'step_2_description') ?></article>
                                    </div>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/arrow.png" class="arrow" alt="arrow" />
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="processCard">
                                    <p class="number">03</p>
                                    <?= _imgSrc($page_content, 'step_3_image') ?>
                                    <div>
                                        <p class="fs-20 fw-600 lh-1"><?= _isset($page_content, 'step_3_title') ?></p>
                                        <article class="fs-18 text-primary-light pt-3 description"><?= _isset($page_content, 'step_3_description') ?></article>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="process-bg process-bg1 position-absolute start-0 top-50 translate-middle-y mt-0 z-n1"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg1.png" alt="Rapid Plumbing Van" /></div>
            <div class="process-bg process-bg2 position-absolute end-0 top-50 translate-middle-y mt-0 z-n1"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg2.png" alt="Rapid Plumbing Van" /></div>
        </section>

        <section class="expect position-relative">
            <div class="container position-relative z-1">
                <div class="row align-items-center gy-4">
                    <div class="col-xl-5">
                        <h3 class="fs-70 fw-500 lh-1 mb-0 highlight-primary"><?= _isset($page_content, 'expect_title') ?></h3>
                    </div>
                    <div class="col-xl-7">
                        <article class="fs-18 description">
                            <?= _isset($page_content, 'expect_description') ?>
                        </article>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="d-flex justify-content-end">
                    <div class="col-12 col-lg-11">
                        <div class="expect-slider pt-5 pt-md-7 position-relative z-1">
                            <?php foreach ($services_list as $service) : ?>
                                <article class="box">
                                    <?= _imgSrc($service, 'image', 'image'); ?>
                                    <div class="overlay">
                                        <p class="filter-shadow"><?= _isset($service, 'title') ?></p>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="slider-progressbar">
                        <div class="content">
                            <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="circle-gradient circle-gradient-2"></div>
        </section>

        <section class="project">
            <div class="container">
                <div class="main">
                    <div class="row align-items-center gx-xl-8 gy-5">
                        <div class="col-xl-6">
                            <article class="ps-md-1_75">
                                <h4 class="fs-48 lh-1 fw-500 text-center text-md-start"><?= _isset($page_content, 'custom_project_title') ?></h4>

                                <article class="fs-18 pt-4 pb-4 pb-xl-6 text-center text-md-start description">
                                    <?= _isset($page_content, 'custom_project_description') ?>
                                </article>

                                <?php if (!empty($page_content['custom_project_button_link'])) : ?>
                                    <div class="d-flex justify-content-center justify-content-md-start">
                                        <a href="<?= _isset($page_content, 'custom_project_button_link') ?>" class="btn btn-white text-primary rounded-pill px-lg-5 px-5 px-md-3 fs-18 fw-700 d-inline-flex">Enquire</a>
                                    </div>
                                <?php endif; ?>
                            </article>
                        </div>
                        <div class="col-auto col-xl-6 d-none d-md-block">
                            <?= _imgSrc($page_content, 'custom_project_image', "rounded-10 overflow-hidden") ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="customers">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-5">
                    <div class="col-xl-4">
                        <p class="fs-64 lh-1 fw-500 highlight-primary"><?= _isset($page_content, 'testimonials_title') ?></p>
                        <div class="row pt-5 d-none d-xl-flex">
                            <?php if (!empty($page_content['testimonials_button_1_text']) && !empty($page_content['testimonials_button_1_link'])) : ?>
                                <div class="col-6">
                                    <a href="<?= _isset($page_content, 'testimonials_button_1_link') ?>" class="btn btn-primary text-white rounded-pill fs-18 fw-700"><?= _isset($page_content, 'testimonials_button_1_text') ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($page_content['testimonials_button_2_text']) && !empty($page_content['testimonials_button_2_link'])) : ?>
                                <div class="col-6">
                                    <a href="<?= _isset($page_content, 'testimonials_button_2_link') ?>" class="btn border-white border-2 text-white rounded-pill fs-18 fw-700"><?= _isset($page_content, 'testimonials_button_2_text') ?></a>
                                </div>
                            <?php endif; ?>

                            <div class="row mt-5 gy-4 pb-3 bg-primary rounded-20 align-items-center">
                                <div class="col-12">
                                    <p class="text-primary-dark fs-24 fw-800 text-center">Sydney's Highest Rated Plumber</p>
                                </div>

                                <div class="col-auto">
                                    <div class="row align-items-center bg-white rounded-10 p-3">
                                        <div class="col-auto">
                                            <div class="review-icon">
                                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/big-google.png" alt="Google" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/five-stars.png" width="100" alt="5 Stars" />
                                            <p class="text-primary-darker text-italic fs-16 pt-2">800 Reviews</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="review-icon">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/hipages.png" alt="HiPages" />
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="review-icon">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/big-fb.png" alt="facebook" />
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="review-icon">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/product-review.png" alt="Product Review" />
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="review-icon">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/birdeye.png" alt="Birdeye" />
                                    </div>
                                </div>



                                <div class="col-auto">
                                    <div class="review-icon">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/yellow-pages.png" alt="Yellow Pages" />
                                    </div>
                                </div>


                                <div class="col-auto">
                                    <div class="review-icon">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/word-of-mouth.png" alt="Word Of Mouth" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonials-slider d-inline-flex">
                            <?php foreach ($testimonials as $testimonial) : ?>
                                <div class="testimonial">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial-quote.png" class="quote" alt="Rapid Plumbing Van" />
                                    <article class="text-center">
                                        <div class="d-inline-block position-relative">

                                            <div class="image">
                                                <?php if (empty(_imgSrc($testimonial, 'image'))) : ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                    </svg>
                                                <?php else : echo _imgSrc($testimonial, 'image'); ?>
                                                <?php endif; ?>
                                            </div>

                                            <div class="position-absolute end-0 bottom-0 mb-n0_5 me-n0_5">
                                                <?php if ($testimonial['platform'] == 'Google') : ?>
                                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/google.png" alt="Google" />
                                                <?php elseif ($testimonial['platform'] == 'Facebook') : ?>
                                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/facebook.png" alt="Facebook" />
                                                <?php else : ?>
                                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/somebox.png" alt="Others" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <p class="fs-24 fw-700 lh-1 mt-2_5 mb-3"><?= _isset($testimonial, 'title') ?></p>

                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stars.png" class="d-inline-block" alt="Rapid Plumbing Van" />

                                        <hr class="border-dark">

                                        <article class="text-primary-light fs-18 text-start">
                                            <?= _isset($testimonial, 'content') ?>
                                        </article>
                                    </article>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="slider-progressbar mt-4">
                            <div class="content">
                                <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-6 d-lg-none">
                    <?php if (!empty($page_content['testimonials_button_1_text']) && !empty($page_content['testimonials_button_1_link'])) : ?>
                        <div class="col-6">
                            <a href="<?= _isset($page_content, 'testimonials_button_1_link') ?>" class="btn btn-primary text-white rounded-pill fs-18 fw-700"><?= _isset($page_content, 'testimonials_button_1_text') ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($page_content['testimonials_button_2_text']) && !empty($page_content['testimonials_button_2_link'])) : ?>
                        <div class="col-6">
                            <a href="<?= _isset($page_content, 'testimonials_button_2_link') ?>" class="btn border-white border-2 text-white rounded-pill fs-18 fw-700"><?= _isset($page_content, 'testimonials_button_2_text') ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="whyUs position-relative">
            <div class="container position-relative z-1">
                <div class="row gx-lg-5 align-items-center gy-4">
                    <div class="col-lg-auto">
                        <h3 class="fs-64 lh-1 fw-500 mb-0 highlight-primary"><?= _isset($page_content, 'hire_us_title') ?></h3>
                    </div>

                    <article class="col-lg fs-18"><?= _isset($page_content, 'hire_us_description') ?></article>
                </div>
                <div class="row mt-5 gy-3 gy-md-4">
                    <?php
                    $count = count($hiring_reasons);

                    foreach ($hiring_reasons as $key => $reason) : ?>
                        <div class="col-md-6 col-xl-3">
                            <article class="whyusCard <?= $count == ($key + 1) ? 'bg-brighte-green' : '' ?>">
                                <?= _imgSrc($reason, 'image') ?>
                                <p class="fs-24 fw-700 lh-1 py-4"><?= _isset($reason, 'title') ?></p>
                                <article class="<?= $count == ($key + 1) ? 'text-white' : 'text-primary-light' ?>"><?= _isset($reason, 'content') ?></article>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="circle-gradient circle-gradient-3"></div>
        </section>

        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/background/homepage-dots.svg" class="position-relative w-100" alt="Rapid Plumbing Van" />
    </section>

    <section class="pricematching position-relative z-1 overflow-hidden">
        <div class="container-fluid px-0">
            <div class="row align-items-end gy-5">
                <div class="col-xl-6 order-2 order-xl-1">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/rapid-price-matching.png" alt="Rapid Plumbing Van" />
                </div>

                <div class="col-xl-6 order-1 order-xl-2">
                    <article class="px-3 px-xl-0 pe-xl-15 pt-7 pt-lg-8 pb-5">
                        <h3 class="fs-64 lh-1 fw-500 highlight-primary"><?= _isset($page_content, 'price_matching_title') ?></h3>

                        <p class="fs-18 description text-danger fw-700 pt-4 pt-md-5">Is your Plumber giving you the best deal? Let us be your FREE second opinion</p>

                        <form id="second_opinion_form" class="needs-validation border py-4 px-3 mt-5 border-white rounded-10" method="POST" novalidate>
                            <input type="hidden" name="recaptcha_response" class="g-recaptcha-response" value=<?= V_RECAPTCHA_CLIENT_SECRET ?>>
                            <input type="hidden" name="request" value="second_opinion_form">

                            <div class="row gy-5 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="firstName">First Name</label>
                                        <input type="text" name="firstName" id="firstName" class="form-control required" />
                                        <span class="text-danger fs-12 error">Error</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lastName">Last Name</label>
                                        <input type="text" name="lastName" id="lastName" class="form-control required" />
                                        <span class="text-danger fs-12 error">Error</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="emailAddress">Email</label>
                                        <input type="email" name="emailAddress" id="emailAddress" class="form-control required" />
                                        <span class="text-danger fs-12 error">Error</span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phoneNumber">Number</label>
                                        <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control required" />
                                        <span class="text-danger fs-12 error">Error</span>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <button type="submit" class="submit_btn btn btn-primary rounded-pill fs-18 fw-700 text-white px-5">Submit</button>
                                </div>
                            </div>
                        </form>

                        <article class="fs-18 description py-4 py-md-5">
                            <?= _isset($page_content, 'price_matching_description') ?>
                        </article>

                        <div class="row">
                            <?php if (!empty($page_content['price_matching_button_1_text']) && !empty($page_content['price_matching_button_1_link'])) : ?>
                                <div class="col-6 col-md-auto">
                                    <a href="<?= _isset($page_content, 'price_matching_button_1_link') ?>" class="btn btn-white text-primary rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($page_content, 'price_matching_button_1_text') ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($page_content['price_matching_button_1_text']) && !empty($page_content['price_matching_button_2_link'])) : ?>
                                <div class="col-6 col-md-auto">
                                    <a href="<?= _isset($page_content, 'price_matching_button_2_link') ?>" class="btn btn-outline-white rounded-pill px-3 px-lg-5 fs-18 border-2 fw-700"><?= _isset($page_content, 'price_matching_button_2_text') ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>

<?php
require 'inc/footer.php';
?>