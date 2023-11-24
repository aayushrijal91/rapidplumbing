<?php
$page_content_arr = array();
$page_content = emergency_plumbing_content::get_data($page_content_arr);
if (count($page_content)) {
    $page_content = $page_content[0];
}

$cta_list = array('orderBy' => 'dragSortOrder ASC');
$cta_list = cta_list::get_data($cta_list);

$faqs = array('orderBy' => 'dragSortOrder ASC');
$faqs = emergency_plumbing_faqs::get_data($faqs);

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

<main class="emergencyPlumbingServicesPage">
    <section class="introduction">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-xl-6">
                    <p class="font-serpentine fs-20 text-italic"><?= _isset($page_content, 'introduction_subtitle') ?></p>
                    <h2 class="font-serpentine py-3 text-capitalize fs-85 text-italic lh-1 highlight-secondary">
                        <?= _isset($page_content, 'introduction_title') ?>
                    </h2>
                    <article class="description fs-18">
                        <?= _isset($page_content, 'introduction_description') ?>
                    </article>
                    <div class="row pt-4">
                        <?php if (!empty($page_content['introduction_button_1_text']) && !empty($page_content['introduction_button_1_link'])) : ?>
                            <div class="col-auto">
                                <a href="<?= _issetUrl($page_content, 'introduction_button_1_link'); ?>" class="btn btn-secondary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($page_content, 'introduction_button_1_text'); ?></a>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($page_content['introduction_button_2_text']) && !empty($page_content['introduction_button_2_link'])) : ?>
                            <div class="col-auto">
                                <a href="<?= _issetUrl($page_content, 'introduction_button_2_link'); ?>" class="btn btn-outline-white border-2 rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($page_content, 'introduction_button_2_text'); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/emergency-plumbing-truck.png" class="position-absolute top-0 z-n1" alt="Truck" />
    </section>

    <section class="trustworthy-plumbers py-5">
        <div class="container">
            <h2 class="text-center fs-64 highlight-secondary"><?= _isset($page_content, 'about_title') ?></h2>
            <article class="fs-20 text-center col-lg-11 mx-auto py-4 lh-1_5 description">
                <?= _isset($page_content, 'about_description') ?>
            </article>

            <div class="row gy-4 pt-4 pt-lg-6">
                <?php foreach ($cta_list as $cta) { ?>
                    <div class="col-12">
                        <article class="trustCard">
                            <div class="row h-100">
                                <div class="col-lg-6">
                                    <?= _imgSrc($cta, 'image', 'h-100 w-100'); ?>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                    <article class="pt-5 pb-3 px-3 p-md-5 px-lg-3 p-xl-5">
                                        <h3 class="fs-60 fw-600 lh-1"><?= _isset($cta, 'title') ?></h3>
                                        <article class="fs-18 pt-3 lh-1_5 description">
                                            <?= _isset($cta, 'content') ?>
                                        </article>
                                    </article>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="slider serviceFaq pt-6 pt-md-8">
        <div class="container">
            <h3 class="fs-60 fw-700 highlight-secondary text-center"><span><?= _isset($page_content, 'banner_title') ?></span> Sydney FAQs</h3>
        </div>
        <div class="faq-slider pt-6 pt-lg-7 z-1">
            <?php foreach ($faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-26 fw-600"><?= _isset($faq, 'title') ?></p>
                    <article class="description fs-18 pt-3 lh-1_5">
                        <?= _isset($faq, 'content') ?>
                    </article>
                </article>
            <?php } ?>
        </div>

        <div class="container mt-4">
            <div class="slider-progressbar">
                <div class="content">
                    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>

<?php require 'inc/footer.php'; ?>