<?php
$page_content_arr = array();
$page_content = renovation_plumber_content::get_data($page_content_arr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$cta_list = array('orderBy' => 'dragSortOrder ASC');
$cta_list = cta_list::get_data($cta_list);

$faqs = array('orderBy' => 'dragSortOrder ASC');
$faqs = renovation_plumbers_faqs::get_data($faqs);

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

require V_ROOT_THEME . 'inc/header.php';
require V_ROOT_THEME . 'inc/nav.php';
require V_ROOT_THEME . 'inc/serviceBanner.php';
?>

<main class="renovationPlumbersServicePage">
    <section class="help">
        <section class="about pb-5">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-md-6 col-xl-4 order-1">
                        <article class="callRapidCard primaryborder h-100 position-relative">
                            <?= _imgSrc($page_content, 'about_image_1', 'heroImage h-100 w-100 object-fit-cover'); ?>
                            <div class="overlay d-flex align-items-end h-100 w-100 top-0 position-absolute">
                                <p class="fw-800 lh-1"><?= _isset($page_content, 'about_image_1_title') ?></p>
                            </div>
                        </article>
                    </div>

                    <div class="col-xl-4 order-2 order-md-3 order-xl-2">
                        <h3 class="fs-36 highlight-primary lh-1 pt-md-4 text-capitalize"><?= _isset($page_content, 'about_title') ?></h3>

                        <article class="description fs-18 pt-4">
                            <?= _isset($page_content, 'about_description') ?>
                        </article>

                        <?php if (!empty($page_content['about_button_link'])) : ?>
                            <button class="bg-transparent rounded-pill mt-4">
                                <a href="<?= _issetUrl($page_content, 'about_button_link'); ?>" class="btn btn-primary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700 d-inline-flex">Enquire</a>
                            </button>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-6 col-xl-4 order-3 order-md-2 order-xl-3">
                        <article class="callRapidCard h-100 position-relative">
                            <?= _imgSrc($page_content, 'about_image_2', 'heroImage h-100 w-100 object-fit-cover'); ?>
                            <div class="overlay d-flex align-items-end h-100 w-100 top-0 position-absolute">
                                <p class="fw-800 lh-1"><?= _isset($page_content, 'about_image_2_title') ?></p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pb-9">
            <div class="row gy-4 pt-6">
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
                <h3 class="fs-60 fw-700 highlight-secondary text-center"><?= _isset($page_content, 'banner_title') ?> Sydney FAQs</h3>

                <div class="slider">
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

                    <?php if (count($faqs) > 3) : ?>
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