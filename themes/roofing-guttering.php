<?php
$page_content_arr = array();
$page_content = roofing_guttering_content::get_data($page_content_arr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$cta_list = array('orderBy' => 'dragSortOrder ASC');
$cta_list = cta_list::get_data($cta_list);

$services = array('orderBy' => 'dragSortOrder ASC');
$services = roofing_guttering_services::get_data($services);

$faqs = array('orderBy' => 'dragSortOrder ASC');
$faqs = roofing_guttering_faqs::get_data($faqs);

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

<main class="roofingGutteringServicePage">
    <section class="help">
        <div class="container">
            <div class="about">
                <h3 class="fs-50 text-center text-primary fw-700"><?= _isset($page_content, 'introduction_title') ?></h3>
                <p class="text-center fs-20 pt-3"><?= _isset($page_content, 'introduction_subtitle') ?></p>
                <div class="py-5">
                    <?= _imgSrc($page_content, 'introduction_image', 'h-100 w-100'); ?>
                </div>
                <article class="fs-18 lh-1_67 description">
                    <?= _isset($page_content, 'introduction_description') ?>
                </article>
                <div class="row">
                    <?php foreach ($services as $service) : ?>
                        <div class="col-4">
                            <article class="aboutCard d-flex flex-column">
                                <p class="fs-24 text-center pb-4 flex-grow-1"><?= _isset($service, 'title') ?></p>
                                <?= _imgSrc($service, 'image', 'w-100'); ?>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="container pt-7 pb-9">
            <div class="row gy-4">
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

        <section class="serviceFaq">
            <div class="container">
                <h3 class="fs-60 fw-700 highlight-secondary text-center"><?= _isset($page_content, 'banner_title') ?> FAQs</h3>
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