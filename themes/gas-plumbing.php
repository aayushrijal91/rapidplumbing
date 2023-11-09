<?php
$page_content_arr = array();
$page_content = gas_plumbing_content::get_data($page_content_arr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$cta_list = array('orderBy' => 'dragSortOrder ASC');
$cta_list = cta_list::get_data($cta_list);

$services = array('orderBy' => 'dragSortOrder ASC');
$services = gas_plumbing_services::get_data($services);

$faqs = array('orderBy' => 'dragSortOrder ASC');
$faqs = gas_plumbing_faqs::get_data($faqs);

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

<main class="gasPlumbingServicePage">
    <section class="help">
        <div class="container">
            <section class="introduction">
                <div class="row align-items-center">
                    <div class="col-6">
                        <article>
                            <h3 class="fs-64 fw-800 lh-1 text-capitalize"><?= _isset($page_content, 'introduction_title') ?></h3>
                            <article class="fs-18 description lh-1_67 py-4">
                                <?= _isset($page_content, 'introduction_description') ?>
                            </article>

                            <?php if (!empty($page_content['introduction_button_link']) && !empty($page_content['introduction_button_text'])) : ?>
                                <button class="bg-transparent rounded-pill mt-4">
                                    <a href="<?= _issetUrl($page_content, 'introduction_button_link'); ?>" class="btn btn-primary text-white d-inline-flex rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($page_content, 'introduction_button_text') ?></a>
                                </button>
                            <?php endif; ?>
                        </article>
                    </div>
                    <div class="col-6">
                        <?= _imgSrc($page_content, 'introduction_image', 'h-100 w-100'); ?>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <div class="row gy-4 pt-6">
                <?php foreach ($cta_list as $cta) : ?>
                    <div class="col-12">
                        <article class="aboutCard">
                            <div class="row h-100">
                                <div class="col-6">
                                    <?= _imgSrc($cta, 'image', 'h-100 w-100'); ?>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <article class="p-5">
                                        <h3 class="fs-60 fw-600 lh-1"><?= _isset($cta, 'title') ?></h3>
                                        <p class="fs-18 pt-3 lh-1_5">
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

        <div class="container pt-7">
            <h3 class="fs-70 highlight-primary text-center">How can we <span>help</span> you?</h3>

            <div class="row gy-5 pt-5">
                <?php foreach ($services as $service) : ?>
                    <div class="col-md-6 col-lg-4">
                        <article class="helpCard">
                            <?= _imgSrc($service, 'image', 'h-100 w-100'); ?>
                            <div class="overlay align-items-start">
                                <p class="fs-24 fw-700 lh-1 text-start"><?= _isset($service, 'title') ?></p>
                                <?php if (!empty($service['button_link'])) : ?>
                                    <a href="<?= _issetUrl($service, 'button_link'); ?>" class="btn btn-primary text-white rounded-pill py-0_75 px-3 px-lg-5 fs-18 fw-700 text-uppercase">Enquire</a>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <section class="serviceFaq pt-8">
            <div class="container">
                <h3 class="fs-60 fw-700 highlight-secondary text-center"><?= _isset($page_content, 'banner_title') ?> Sydney FAQs</h3>
                <div class="hot-water-faq-slider pt-6 pt-lg-7 z-1">
                    <?php foreach ($faqs as $faq) : ?>
                        <article class="box">
                            <p class="fs-26 fw-600"><?= _isset($faq, 'title') ?></p>
                            <article class="description fs-18 pt-3 lh-1_5">
                                <?= _isset($faq, 'content') ?>
                            </article>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>

<?php require 'inc/footer.php'; ?>