<?php

if (isset($_GET['slug']) && !empty($_GET['slug']) && !is_numeric($_GET['slug'])) {
    $serviceSlug = $_GET['slug'];
}

if ($serviceSlug != '') {
    $serviceArray = array('where' => "`slug` = '" . $serviceSlug . "'");
    $service = leak_detection_services::get_data($serviceArray);
    if (count($service) > 0) {
        $page_content = $service[0];
    } else {
        include('404.php');
        die();
    }
}

$cta_list = array('orderBy' => 'dragSortOrder ASC');
$cta_list = cta_list::get_data($cta_list);

$faqs = array('orderBy' => 'dragSortOrder ASC');
$faqs = leak_detection_inner_service_faqs::get_data($faqs);

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
    'banner_video_image' => _isset($page_content, 'banner_video_image'),
    'banner_button_1_text' => _isset($page_content, 'banner_button_1_text'),
    'banner_button_1_link' => _isset($page_content, 'banner_button_1_link'),
    'banner_button_2_text' => _isset($page_content, 'banner_button_2_text'),
    'banner_button_2_link' => _isset($page_content, 'banner_button_2_link'),
);

/*  Banner Array End */

require V_ROOT_THEME . 'inc/header.php';
require V_ROOT_THEME . 'inc/nav.php';
require V_ROOT_THEME . 'inc/serviceBanner.php';
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

                <div class="slider">
                    <div class="innerServiceFaqSlider pt-6 pt-lg-7 z-1">
                        <?php
                        $count = 0;

                        foreach ($faqs as $faq) :
                            if ($page_content['slug'] == $faq['category']) :
                                $count++;
                        ?>
                                <article class="box">
                                <div class="bg-primary title text-center">
                                    <p class="fs-24 fw-600"><?= _isset($faq, 'title') ?></p>
                                </div>

                                <article class="description fs-18 lh-1_5">
                                    <?= _isset($faq, 'content') ?>
                                </article>
                            </article>
                        <?php
                            endif;
                        endforeach; ?>
                    </div>

                    <?php if ($count > 3) : ?>
                        <div class="slider-progressbar mt-4">
                            <div class="content">
                                <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </section>

    <?php require V_ROOT_THEME . 'inc/gallery.php'; ?>
</main>

<?php require V_ROOT_THEME . 'inc/footer.php'; ?>