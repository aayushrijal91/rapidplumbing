<?php
$page_content_arr = array();
$page_content = hot_water_services_content::get_data($page_content_arr);
if (count($page_content)) {
    $page_content = $page_content[0];
}

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

<main class="hotWaterServicesPage">
    <section class="introduction">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <article>
                        <h3 class="fs-60 highlight-primary text-capitalize fw-700 lh-1">Keep Your Home Safe <span class="fw-400">And Dry before the next storm</span></h3>
                        <article class="description fs-18 lh-1_5 py-4">
                            <p>If your hot water heater is reaching the 15-year mark, it may be time to replace it. However, if it is still relatively new it may just need to be repaired. Either way, you need expert technicians to perform a thorough inspection and determine the most cost-effective solution for you.</p>

                            <p>Not having access to clean, hot water can really mess up your daily routine. Call Rapid Plumbing Group today, and we’ll dispatch a technician to your home as quickly as possible! We’re available 24/7 to address any urgent hot water heater repairs, or just for a routine inspection.</p>
                        </article>
                        <a href="#" class="btn btn-primary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700 d-inline-flex">Enquire</a>
                    </article>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </section>
</main>

<?php require 'inc/footer.php'; ?>