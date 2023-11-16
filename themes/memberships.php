<?php
$MembershipsArr = array();
$page_content = memberships_content::get_data($MembershipsArr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$why_membership_list = array('orderBy' => 'dragSortOrder ASC');
$why_membership_list = why_membership_list::get_data($why_membership_list);

$other_plumbers_offer = array('orderBy' => 'dragSortOrder ASC');
$other_plumbers_offer = other_plumbers_offer::get_data($other_plumbers_offer);

$vip_members_offer = array('orderBy' => 'dragSortOrder ASC');
$vip_members_offer = vip_members_offer::get_data($vip_members_offer);

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

<main class="membershipsPage">
    <section class="introduction position-relative text-white">
        <div class="container pb-5 pb-xl-0">
            <div class="row justify-content-end">
                <article class="col-xl-6">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/vip-member-program.png" alt="VIP member program" />
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

        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/home-safety-inspection-guide.png" class="membershipIntroductionImg" alt="Home Safety Inspection" />
    </section>

    <?php require 'inc/gallery.php'; ?>

    <section class="comparison bg-dark-grey py-6 py-lg-7">
        <div class="container">
            <div class="text-center"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/membership-comparison.png" alt="Membership Comparison\" /></div>
            <p class="text-center text-grey fs-20 pt-3">There's a reason why nearly half of our clients return to us to solve their plumbing problems</p>

            <div class="row g-4 pt-5">
                <div class="col-xl-6">
                    <article class="comparison1">
                        <article class="title">
                            <p>Other Plumbers</p>
                        </article>
                        <table class="table table-striped">
                            <thead>
                                <td class="bg-comparison-table-head-1"><span class="fw-600">Membership Benefits</span></td>
                                <td class="bg-comparison-table-head-1-offer">Offer</td>
                            </thead>
                            <tbody>
                                <?php foreach ($other_plumbers_offer as $offer) : ?>
                                    <tr>
                                        <td scope="row"><?= _isset($offer, 'title') ?></td>
                                        <td>
                                            <?php if (_isset($offer, 'offer') == 'No') : ?>
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.5613 0.858328C14.2804 0.57746 13.8994 0.419678 13.5021 0.419678C13.1049 0.419678 12.7239 0.57746 12.4429 0.858328L7.50937 5.79187L2.57582 0.858328C2.29326 0.58542 1.91481 0.434411 1.52199 0.437825C1.12917 0.441238 0.753407 0.598801 0.47563 0.876578C0.197853 1.15435 0.0402903 1.53012 0.0368767 1.92294C0.0334632 2.31576 0.184472 2.69421 0.45738 2.97677L5.39092 7.91031L0.45738 12.8439C0.314287 12.9821 0.200152 13.1474 0.121633 13.3302C0.0431146 13.5129 0.0017852 13.7095 5.65668e-05 13.9085C-0.00167207 14.1074 0.0362348 14.3047 0.111565 14.4888C0.186895 14.6729 0.298141 14.8402 0.43881 14.9809C0.579479 15.1215 0.746755 15.2328 0.930877 15.3081C1.115 15.3834 1.31228 15.4213 1.51121 15.4196C1.71014 15.4179 1.90673 15.3766 2.08952 15.298C2.2723 15.2195 2.43762 15.1054 2.57582 14.9623L7.50937 10.0288L12.4429 14.9623C12.7255 15.2352 13.1039 15.3862 13.4967 15.3828C13.8896 15.3794 14.2653 15.2218 14.5431 14.944C14.8209 14.6663 14.9784 14.2905 14.9819 13.8977C14.9853 13.5049 14.8343 13.1264 14.5613 12.8439L9.62781 7.91031L14.5613 2.97677C14.8422 2.69582 15 2.31482 15 1.91755C15 1.52028 14.8422 1.13928 14.5613 0.858328Z" fill="#D43D3A" />
                                                </svg>
                                            <?php else : ?>
                                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.7 9.48634L2.2 6.08634L0 8.35301L7.7 17.4197L22 2.68634L19.8 0.419678L7.7 9.48634Z" fill="white" />
                                                </svg>
                                            <?php endif; ?>
                                            <span class="ps-3"><?= _isset($offer, 'offer') ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </article>
                </div>
                <div class="col-xl-6">
                    <article class="comparison2">
                        <article class="title">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/vip-member-program.png" alt="VIP member program" />
                        </article>
                        <table class="table table-striped">
                            <thead>
                                <td class="bg-comparison-table-head-2"><span class="fw-600">Membership Benefits</span></td>
                                <td class="bg-comparison-table-head-2-offer">Offer</td>
                            </thead>
                            <tbody>
                                <?php foreach ($vip_members_offer as $offer) : ?>
                                    <tr>
                                        <td scope="row"><?= _isset($offer, 'title') ?></td>
                                        <td>
                                            <?php if (_isset($offer, 'offer') == 'No') : ?>
                                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.5613 0.858328C14.2804 0.57746 13.8994 0.419678 13.5021 0.419678C13.1049 0.419678 12.7239 0.57746 12.4429 0.858328L7.50937 5.79187L2.57582 0.858328C2.29326 0.58542 1.91481 0.434411 1.52199 0.437825C1.12917 0.441238 0.753407 0.598801 0.47563 0.876578C0.197853 1.15435 0.0402903 1.53012 0.0368767 1.92294C0.0334632 2.31576 0.184472 2.69421 0.45738 2.97677L5.39092 7.91031L0.45738 12.8439C0.314287 12.9821 0.200152 13.1474 0.121633 13.3302C0.0431146 13.5129 0.0017852 13.7095 5.65668e-05 13.9085C-0.00167207 14.1074 0.0362348 14.3047 0.111565 14.4888C0.186895 14.6729 0.298141 14.8402 0.43881 14.9809C0.579479 15.1215 0.746755 15.2328 0.930877 15.3081C1.115 15.3834 1.31228 15.4213 1.51121 15.4196C1.71014 15.4179 1.90673 15.3766 2.08952 15.298C2.2723 15.2195 2.43762 15.1054 2.57582 14.9623L7.50937 10.0288L12.4429 14.9623C12.7255 15.2352 13.1039 15.3862 13.4967 15.3828C13.8896 15.3794 14.2653 15.2218 14.5431 14.944C14.8209 14.6663 14.9784 14.2905 14.9819 13.8977C14.9853 13.5049 14.8343 13.1264 14.5613 12.8439L9.62781 7.91031L14.5613 2.97677C14.8422 2.69582 15 2.31482 15 1.91755C15 1.52028 14.8422 1.13928 14.5613 0.858328Z" fill="#D43D3A" />
                                                </svg>
                                            <?php else : ?>
                                                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.7 9.48634L2.2 6.08634L0 8.35301L7.7 17.4197L22 2.68634L19.8 0.419678L7.7 9.48634Z" fill="white" />
                                                </svg>
                                            <?php endif; ?>

                                            <span class="ps-3"><?= _isset($offer, 'offer') ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="why-us position-relative">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row">
                        <div class="col-xl-9">
                            <article>
                                <h2 class="text-white fs-165 fw-800 lh-0_7 ps-md-10">Why</h2>
                                <p class="fs-109 text-secondary lh-1 fw-800">our membership</p>
                            </article>

                            <div class="membershipSlider mt-5">
                                <?php foreach ($why_membership_list as $list) : ?>
                                    <article class="membershipSlide">
                                        <p class="fs-30 text-capitalize fw-700"><?= _isset($list, 'title') ?></p>
                                        <p class="text-primary-light lh-1_5 pt-3"><?= _isset($list, 'content') ?></p>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/vip-member-hand.png" class="d-none d-xl-block position-absolute bottom-0 end-0" alt="VIP membership program" />
    </section>
</main>
<?php require 'inc/footer.php'; ?>