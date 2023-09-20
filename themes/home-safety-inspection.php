<?php
$HomeSafetyInspectionPageArr = array();
$HomeSafetyInspectionPageArr = home_safety_inspection_content::get_data($HomeSafetyInspectionPageArr);
if (count($HomeSafetyInspectionPageArr)) {
    $HomeSafetyInspectionPageArr = $HomeSafetyInspectionPageArr[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $HomeSafetyInspectionPageArr['meta_title'];
$meta_description     = $HomeSafetyInspectionPageArr['meta_description'];
$meta_keyword         = $HomeSafetyInspectionPageArr['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $HomeSafetyInspectionPageArr['banner_video_image'];
// $banner_details['mobile_background_image'] = $HomeSafetyInspectionPageArr['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $HomeSafetyInspectionPageArr['banner_title_heading_tag'];
$banner_details['banner_title'] = $HomeSafetyInspectionPageArr['banner_title'];
$banner_details['banner_subtitle'] = $HomeSafetyInspectionPageArr['banner_subtitle'];
$banner_details['banner_button_1_text'] = $HomeSafetyInspectionPageArr['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $HomeSafetyInspectionPageArr['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $HomeSafetyInspectionPageArr['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $HomeSafetyInspectionPageArr['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="homeSafetyInspectionPage">
    <section class="introduction position-relative text-white">
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/home-safety-inspection-guide.png" class="homeSafetyInspectionGuideImage position-absolute start-0 bottom-0" alt="Home Safety Inspection" />

        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <article class="">
                        <h2 class="fs-64 fw-800 lh-1">Home Safety Inspection Sydney</h2>
                        <article class="description fs-18 pt-4">
                            <p><strong>Is your Plumber giving you the best deal? Let us be your FREE second opinion</strong></p>
                            <p>Rapid Plumbing Group provides Home Safety Inspections, a vital service that involves a thorough check of your property to identify any potential plumbing or safety issues.</p>
                            <p>Many home and business owners are unaware of the troubles that exist within their property until it’s too late. If we find anything, we’ll then provide you a detailed report of our findings and some recommendations on how to fix problems.</p>
                        </article>
                        <div class="row pt-4">
                            <?php //if (!empty($banner_details['banner_button_1_text']) && !empty($banner_details['banner_button_1_link'])) : 
                            ?>
                            <div class="col-auto">
                                <a href="#" class="btn btn-white text-primary rounded-pill px-3 px-lg-5 fs-18 fw-700">Get Started</a>
                            </div>
                            <?php //endif; 
                            ?>

                            <?php // if (!empty($banner_details['banner_button_2_text']) && !empty($banner_details['banner_button_2_link'])) : 
                            ?>
                            <div class="col-auto">
                                <a href="#" class="btn btn-outline-white border-2 rounded-pill px-3 px-lg-5 fs-18 fw-700">Conditions</a>
                            </div>
                            <?php // endif; 
                            ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="propertyDamageProtection bg-white position-relative">
        <div class="container">
            <h2 class="text-primary fs-64 fw-800 text-center text-capitalize">Protect your property from damage</h2>
            <p class="text-center text-dark fs-18 pt-3">by identifying and putting a stop to small plumbing problems before they become costly disasters.</p>

            <div class="d-flex justify-content-center pt-5">
                <a href="tel:<?php echo preg_replace('/[^\d]/i', '', _isset($contact_info, 'phone_number')); ?>" class="btn btn-primary text-white fs-27 text-italic fw-700 gap-2">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/buzzing-phone.gif" width=38 height=38 alt="" />
                    <?= _isset($contact_info, 'phone_number'); ?>
                </a>
            </div>
            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/home-safety-inspection-schedule.png" class="w-100 pt-5" alt="Schedule a home safety inspection" />
        </div>
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/grass-fence.png" class="w-100 position-absolute bottom-0" alt="grass fence" />
    </section>
</main>

<?php require 'inc/footer.php'; ?>