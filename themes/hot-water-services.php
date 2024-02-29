<?php
$page_content_arr = array();
$page_content = hot_water_services_content::get_data($page_content_arr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$cta_list = array('orderBy' => 'dragSortOrder ASC');
$cta_list = cta_list::get_data($cta_list);

$faqs = array('orderBy' => 'dragSortOrder ASC');
$faqs = hot_water_services_faqs::get_data($faqs);

$services = array('orderBy' => 'dragSortOrder ASC');
$services = hot_water_services_list::get_data($services);

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

<main class="hotWaterServicesPage">
    <section class="introduction">
        <div class="container">
            <div class="row align-items-end align-items-xl-center">
                <div class="col-lg-6">
                    <article class="py-5">
                        <h3 class="fs-60 highlight-primary text-capitalize fw-700 lh-1"><?= _isset($page_content, 'introduction_title') ?></h3>
                        <article class="description fs-18 lh-1_5 py-4">
                            <?= _isset($page_content, 'introduction_description') ?>
                        </article>

                        <?php if (!empty($page_content['introduction_button_link'])) : ?>
                            <button class="bg-transparent rounded-pill mt-md-4">
                                <a href="<?= _issetUrl($page_content, 'introduction_button_link'); ?>" class="btn btn-primary text-white d-inline-flex rounded-pill px-3 px-lg-5 fs-18 fw-700">Enquire</a>
                            </button>
                        <?php endif; ?>
                    </article>
                </div>
                <div class="col-lg-6">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/hot_water_partners.png" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="help">
        <div class="container">
            <p class="fs-70 highlight-primary text-center">How can we <span>help</span> you?</p>

            <div class="row justify-content-center align-items-center gy-4 mt-5 mt-xl-6">
                <?php for ($i = 1; $i < 9; $i++) : ?>
                    <div class="col-auto">
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/<?= $i ?>.png" alt="Brands" />
                    </div>
                <?php endfor; ?>
            </div>

            <div class="row justify-content-between align-items-center bg-primary rounded-20 p-5 my-5 my-xl-7">
                <div class="col-3 text-center">
                    <p class="fs-32 fw-700 text-italic">Buy Now</p>
                    <p class="pt-3">Don’t put your repairs and upgrades off any longer.</p>
                </div>
                <div class="col-3 text-center">
                    <p class="fs-32 fw-700 text-italic">Pay Later</p>
                    <p class="pt-3">We’ll start work today, and you can pay us later.</p>
                </div>
                <div class="col-3 text-center">
                    <p class="fs-32 fw-700 text-italic">No Interest</p>
                    <p class="pt-3">Pay the work off in instalments, without any interest!</p>
                </div>
                <div class="col-auto">
                    <?php if (!empty($page_content['introduction_button_link'])) : ?>
                        <button class="bg-transparent rounded-pill">
                            <a href="<?= _issetUrl($page_content, 'introduction_button_link'); ?>" class="btn btn-white text-primary d-inline-flex rounded-pill px-3 px-lg-5 fs-18 fw-700">Enquire</a>
                        </button>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row gy-4 gy-lg-5 innerServiceListingSlider">
                <?php foreach ($services as $service) : ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <article class="helpCard">
                            <?= _imgSrc($service, 'image', 'image'); ?>
                            <div class="overlay">
                                <p class="fs-24 fw-700 lh-1 text-start text-white filter-shadow"><?= _isset($service, 'title') ?></p>
                                <?php if (!empty($service['slug'])) : ?>
                                    <a href="<?= _issetUrl($service, 'slug'); ?>" class="btn btn-primary text-white rounded-pill py-0_75 px-3 px-lg-5 fs-18 fw-700 ">ENQUIRE</a>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="container">
            <div class="row gy-4 pt-6">
                <?php foreach ($cta_list as $cta) { ?>
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
                <?php } ?>
            </div>
        </div>

        <section class="serviceFaq pt-8">
            <div class="container">
                <h3 class="fs-60 fw-700 highlight-secondary text-center"><?= _isset($page_content, 'banner_title') ?> Sydney FAQs</h3>
                <div class="slider">
                    <div class="innerServiceFaqSlider pt-6 pt-lg-7 z-1">
                        <?php foreach ($faqs as $faq) { ?>
                            <article class="box">
                                <div class="bg-primary title text-center">
                                    <p class="fs-24 fw-600"><?= _isset($faq, 'title') ?></p>
                                </div>

                                <article class="description fs-18 lh-1_5">
                                    <?= _isset($faq, 'content') ?>
                                </article>
                            </article>
                        <?php } ?>
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