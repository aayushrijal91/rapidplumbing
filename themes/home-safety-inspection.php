<?php
$HomeSafetyInspectionPageArr = array();
$page_content = home_safety_inspection_content::get_data($HomeSafetyInspectionPageArr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $page_content['banner_video_image'];
// $banner_details['mobile_background_image'] = $page_content['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $page_content['banner_title_heading_tag'];
$banner_details['banner_title'] = $page_content['banner_title'];
$banner_details['banner_subtitle'] = $page_content['banner_subtitle'];
$banner_details['banner_button_1_text'] = $page_content['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $page_content['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $page_content['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $page_content['banner_button_2_link'];
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
                        <h2 class="fs-64 fw-800 lh-1"><?= _isset($page_content, 'introduction_title') ?></h2>
                        
                        <article class="description fs-18 pt-4">
                            <?= _isset($page_content, 'introduction_description') ?>
                        </article>

                        <div class="row pt-4">
                            <?php if (!empty($page_content['introduction_button_1_link']) && !empty($page_content['introduction_button_1_text'])) : ?>
                                <div class="col-auto">
                                    <button class="bg-transparent rounded-pill">
                                        <a href="<?= _issetUrl($page_content, 'introduction_button_1_link'); ?>" class="btn btn-white text-primary rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($page_content, 'introduction_button_1_text') ?></a>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($page_content['introduction_button_2_link']) && !empty($page_content['introduction_button_2_text'])) : ?>
                                <div class="col-auto">
                                    <button class="bg-transparent rounded-pill">
                                        <a href="<?= _issetUrl($page_content, 'introduction_button_2_link'); ?>" class="btn btn-outline-white border-2 rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($page_content, 'introduction_button_2_text') ?></a>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="propertyDamageProtection bg-white position-relative">
        <div class="container">
            <h2 class="text-primary fs-64 fw-800 text-center text-capitalize"><?= _isset($page_content, 'protection_title') ?></h2>
            <p class="text-center text-dark fs-18 pt-3"><?= _isset($page_content, 'protection_description') ?></p>

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