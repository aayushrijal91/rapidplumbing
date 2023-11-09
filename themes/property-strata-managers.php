<?php
$page_content_arr = array();
$page_content = property_strata_managers_content::get_data($page_content_arr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$cta_list = array('orderBy' => 'dragSortOrder ASC');
$cta_list = cta_list::get_data($cta_list);

$faqs = array('orderBy' => 'dragSortOrder ASC');
$faqs = strata_plumbing_faqs::get_data($faqs);

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

<main class="propertyManagersServicePage">
    <section class="introduction position-relative overflow-hidden">
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/strata-managers.png" class="plumber-right position-absolute top-0 end-0" alt="Plumber Left" />

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <article>
                        <h3 class="fs-64 fw-700 lh-1 text-capitalize"><?= _isset($page_content, 'introduction_title') ?></h3>
                        <p class="fw-700 text-primary text-capitalize fs-20 pt-4"><?= _isset($page_content, 'introduction_subtitle') ?></p>
                        <article class="fs-18 description pt-4 fw-300 lh-1_67">
                            <?= _isset($page_content, 'introduction_description') ?>
                        </article>

                        <?php if (!empty($page_content['introduction_button_link']) && !empty($page_content['introduction_button_text'])) : ?>
                            <button class="bg-transparent rounded-pill mt-4">
                                <a href="<?= _issetUrl($page_content, 'introduction_button_link'); ?>" class="btn btn-primary text-white d-inline-flex rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($page_content, 'introduction_button_text') ?></a>
                            </button>
                        <?php endif; ?>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="help">
        <div class="container pb-9">
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

        <section class="serviceFaq">
            <div class="container">
                <h3 class="fs-60 fw-700 highlight-secondary text-center">Strata Plumbing Sydney FAQs</h3>
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