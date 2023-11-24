<?php
$page_content_arr = array();
$page_content = leak_detection_content::get_data($page_content_arr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$cta_list = array('orderBy' => 'dragSortOrder ASC');
$cta_list = cta_list::get_data($cta_list);

$services = array('orderBy' => 'dragSortOrder ASC');
$services = leak_detection_services::get_data($services);

$faqs = array('orderBy' => 'dragSortOrder ASC');
$faqs = leak_detection_faqs::get_data($faqs);

/*  Meta data */
$meta_title         = $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/*  Banner details  Start*/
$banner_details = array(
    'banner_title_heading_tag' => _isset($page_content, 'banner_title_heading_tag'),
    'banner_title' => _isset($page_content, 'banner_title'),
    'banner_subtitle' => _isset($page_content, 'banner_subtitle'),
    'banner_button_1_text' => _isset($page_content, 'banner_button_1_text'),
    'banner_button_1_link' => _isset($page_content, 'banner_button_1_link'),
    'banner_button_2_text' => _isset($page_content, 'banner_button_2_text'),
    'banner_button_2_link' => _isset($page_content, 'banner_button_2_link'),
);

/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/serviceBanner.php';
?>

<main class="leakDetectionServicePage">
    <section class="help">
        <div class="container pb-7">
            <section class="introduction">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6">
                        <article>
                            <h3 class="fs-55 fw-500 lh-1 text-capitalize"><?= _isset($page_content, 'introduction_title') ?></h3>

                            <p class="text-primary text-capitalize fs-20 fw-700 pt-4"><?= _isset($page_content, 'introduction_subtitle') ?></p>

                            <article class="fs-18 description lh-1_67 py-4">
                                <?= _isset($page_content, 'introduction_description') ?>
                            </article>

                            <?php if (!empty($page_content['introduction_button_link']) && !empty($page_content['introduction_button_text'])) : ?>
                                <button class="bg-transparent rounded-pill">
                                    <a href="<?= _issetUrl($page_content, 'introduction_button_link'); ?>" class="btn btn-primary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700 d-inline-flex"><?= _isset($page_content, 'introduction_button_text') ?></a>
                                </button>
                            <?php endif; ?>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <?= _imgSrc($page_content, 'introduction_image', 'h-100 w-100'); ?>
                    </div>
                </div>
            </section>
        </div>

        <section class="services pt-6 pb-8">
            <div class="container">
                <h3 class="highlight-primary fs-70 fw-700"><span><?= _isset($page_content, 'banner_title') ?></span> Services Sydney</h3>

                <div class="row mt-5 gy-3 innerServiceListingSlider">
                    <?php foreach ($services as $service) : ?>
                        <div class="col-md-6 col-lg-3">
                            <a href="<?= _isset($service, 'slug') ?>">
                                <article class="box">
                                    <?= _imgSrc($service, 'image', 'h-100 w-100'); ?>
                                    <p class="overlay text-white"><?= _isset($service, 'title') ?></p>
                                </article>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <div class="container pt-7">
            <div class="row gy-4">
                <?php foreach ($cta_list as $cta) : ?>
                    <div class="col-12">
                        <article class="aboutCard">
                            <div class="row h-100">
                                <div class="col-lg-6">
                                    <?= _imgSrc($cta, 'image', 'h-100 w-100'); ?>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                    <article class="pt-5 pb-3 px-3 p-md-5 px-lg-3 p-xl-5">
                                        <h3 class="fs-60 fw-600 lh-1"><?= _isset($cta, 'title') ?></h3>
                                        <p class="fs-18 pt-3 lh-1_5 description">
                                            <?= _isset($cta, 'content') ?>
                                        </p>
                                    </article>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <section class="serviceFaq pt-8">
            <div class="container">
                <h3 class="fs-60 fw-700 highlight-secondary text-center"><?= _isset($page_content, 'banner_title') ?> Sydney FAQs</h3>
                <div class="innerServiceFaqSlider pt-6 pt-lg-7 z-1">
                    <?php foreach ($faqs as $faq) : ?>
                        <article class="box">
                            <p class="fs-26 fw-600"><?= _isset($faq, 'title') ?></p>
                            <article class="description fs-18 pt-3 lh-1_5">
                                <?= _isset($faq, 'content') ?>
                            </article>
                        </article>
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
        </section>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>

<?php require 'inc/footer.php'; ?>