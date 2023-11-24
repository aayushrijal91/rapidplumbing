<?php
$FaqPageArr = array();
$FaqPage = faqs_content::get_data($FaqPageArr);
if (count($FaqPage)) {
    $FaqPage = $FaqPage[0];
}

$general_plumbing_faqs = array('orderBy' => 'dragSortOrder ASC');
$general_plumbing_faqs = general_plumbing_faqs::get_data($general_plumbing_faqs);

$gas_plumbing_faqs = array('orderBy' => 'dragSortOrder ASC');
$gas_plumbing_faqs = gas_plumbing_faqs::get_data($gas_plumbing_faqs);

$commercial_plumbing_faqs = array('orderBy' => 'dragSortOrder ASC');
$commercial_plumbing_faqs = commercial_plumbing_faqs::get_data($commercial_plumbing_faqs);

$emergency_plumbing_faqs = array('orderBy' => 'dragSortOrder ASC');
$emergency_plumbing_faqs = emergency_plumbing_faqs::get_data($emergency_plumbing_faqs);

$blocked_drains_faqs = array('orderBy' => 'dragSortOrder ASC');
$blocked_drains_faqs = blocked_drains_faqs::get_data($blocked_drains_faqs);

$hot_water_faqs = array('orderBy' => 'dragSortOrder ASC');
$hot_water_faqs = hot_water_services_faqs::get_data($hot_water_faqs);

$taps_toilets_faqs = array('orderBy' => 'dragSortOrder ASC');
$taps_toilets_faqs = taps_toilets_faqs::get_data($taps_toilets_faqs);

$rainwater_tanks_faqs = array('orderBy' => 'dragSortOrder ASC');
$rainwater_tanks_faqs = rainwater_tanks_faqs::get_data($rainwater_tanks_faqs);

$water_filters_faqs = array('orderBy' => 'dragSortOrder ASC');
$water_filters_faqs = water_filters_faqs::get_data($water_filters_faqs);

$backflow_prevention_faqs = array('orderBy' => 'dragSortOrder ASC');
$backflow_prevention_faqs = backflow_prevention_faqs::get_data($backflow_prevention_faqs);

$septic_systems_faqs = array('orderBy' => 'dragSortOrder ASC');
$septic_systems_faqs = septic_systems_faqs::get_data($septic_systems_faqs);

$roofing_guttering_faqs = array('orderBy' => 'dragSortOrder ASC');
$roofing_guttering_faqs = roofing_guttering_faqs::get_data($roofing_guttering_faqs);

$renovation_plumbers_faqs = array('orderBy' => 'dragSortOrder ASC');
$renovation_plumbers_faqs = renovation_plumbers_faqs::get_data($renovation_plumbers_faqs);

$leak_detection_faqs = array('orderBy' => 'dragSortOrder ASC');
$leak_detection_faqs = leak_detection_faqs::get_data($leak_detection_faqs);

/*  Meta data */
$meta_title         = $FaqPage['meta_title'];
$meta_description     = $FaqPage['meta_description'];
$meta_keyword         = $FaqPage['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $FaqPage['banner_video_image'];
// $banner_details['mobile_background_image'] = $FaqPage['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $FaqPage['banner_title_heading_tag'];
$banner_details['banner_title'] = $FaqPage['banner_title'];
$banner_details['banner_subtitle'] = $FaqPage['banner_subtitle'];
$banner_details['banner_button_1_text'] = $FaqPage['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $FaqPage['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $FaqPage['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $FaqPage['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="faqPage">
    <section class="slider">
        <div class="container">
            <p class="fs-24 fw-700">Emergency Plumbing</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($emergency_plumbing_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Blocked Drains</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($blocked_drains_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Hot Water Services</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($hot_water_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Taps & Toilets</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($taps_toilets_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Rainwater Tanks & Pumps</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($rainwater_tanks_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Gas Plumbing</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($gas_plumbing_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">General Plumbing</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($general_plumbing_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Commercial Plumbing</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($commercial_plumbing_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Water Filters</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($water_filters_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Backflow Prevention & RPZ Valves</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($backflow_prevention_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Septic Systems</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($septic_systems_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Roofing & Guttering</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($roofing_guttering_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Renovation Plumber</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($renovation_plumbers_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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

    <section class="slider pt-8">
        <div class="container">
            <p class="fs-24 fw-700">Leak Detection</p>
        </div>
        <div class="faq-slider pt-4 z-1">
            <?php foreach ($leak_detection_faqs as $faq) { ?>
                <article class="box">
                    <p class="fs-20 fw-700"><?= _isset($faq, 'title') ?></p>
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
</main>

<?php require 'inc/gallery.php'; ?>
<?php require 'inc/footer.php'; ?>