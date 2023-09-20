<?php
$MembershipsArr = array();
$MembershipsArr = memberships_content::get_data($MembershipsArr);
if (count($MembershipsArr)) {
    $MembershipsArr = $MembershipsArr[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $MembershipsArr['meta_title'];
$meta_description     = $MembershipsArr['meta_description'];
$meta_keyword         = $MembershipsArr['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $MembershipsArr['banner_video_image'];
// $banner_details['mobile_background_image'] = $MembershipsArr['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $MembershipsArr['banner_title_heading_tag'];
$banner_details['banner_title'] = $MembershipsArr['banner_title'];
$banner_details['banner_subtitle'] = $MembershipsArr['banner_subtitle'];
$banner_details['banner_button_1_text'] = $MembershipsArr['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $MembershipsArr['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $MembershipsArr['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $MembershipsArr['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="membershipsPage">
    <section class="introduction position-relative text-white">
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/home-safety-inspection-guide.png" class="homeSafetyInspectionGuideImage position-absolute start-0 bottom-0" alt="Home Safety Inspection" />

        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <article class="">
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/vip-member-program.png" alt="VIP member program" />
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

    <section class="gallery py-5">
        <div class="gallery-slider">
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img1.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img2.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img3.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img4.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img5.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img6.jpg" alt="Rapid Plumbing Van" /></div>
        </div>
    </section>

    <section class="comparison bg-dark-grey py-6 py-lg-7">
        <div class="container">
            <div class="text-center"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/membership-comparison.png" alt="Membership Comparison\" /></div>
            <p class="text-center text-grey fs-20 pt-3">There's a reason why nearly half of our clients return to us to solve their plumbing problems</p>

            <div class="row g-4">
                <div class="col-lg-6">
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
                                <tr>
                                    <td scope="row">Priority Service</td>
                                    <td>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5613 0.858328C14.2804 0.57746 13.8994 0.419678 13.5021 0.419678C13.1049 0.419678 12.7239 0.57746 12.4429 0.858328L7.50937 5.79187L2.57582 0.858328C2.29326 0.58542 1.91481 0.434411 1.52199 0.437825C1.12917 0.441238 0.753407 0.598801 0.47563 0.876578C0.197853 1.15435 0.0402903 1.53012 0.0368767 1.92294C0.0334632 2.31576 0.184472 2.69421 0.45738 2.97677L5.39092 7.91031L0.45738 12.8439C0.314287 12.9821 0.200152 13.1474 0.121633 13.3302C0.0431146 13.5129 0.0017852 13.7095 5.65668e-05 13.9085C-0.00167207 14.1074 0.0362348 14.3047 0.111565 14.4888C0.186895 14.6729 0.298141 14.8402 0.43881 14.9809C0.579479 15.1215 0.746755 15.2328 0.930877 15.3081C1.115 15.3834 1.31228 15.4213 1.51121 15.4196C1.71014 15.4179 1.90673 15.3766 2.08952 15.298C2.2723 15.2195 2.43762 15.1054 2.57582 14.9623L7.50937 10.0288L12.4429 14.9623C12.7255 15.2352 13.1039 15.3862 13.4967 15.3828C13.8896 15.3794 14.2653 15.2218 14.5431 14.944C14.8209 14.6663 14.9784 14.2905 14.9819 13.8977C14.9853 13.5049 14.8343 13.1264 14.5613 12.8439L9.62781 7.91031L14.5613 2.97677C14.8422 2.69582 15 2.31482 15 1.91755C15 1.52028 14.8422 1.13928 14.5613 0.858328Z" fill="#D43D3A" />
                                        </svg>

                                        <span class="ps-3">No</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Guaranteed Response Time</td>
                                    <td>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5613 0.858328C14.2804 0.57746 13.8994 0.419678 13.5021 0.419678C13.1049 0.419678 12.7239 0.57746 12.4429 0.858328L7.50937 5.79187L2.57582 0.858328C2.29326 0.58542 1.91481 0.434411 1.52199 0.437825C1.12917 0.441238 0.753407 0.598801 0.47563 0.876578C0.197853 1.15435 0.0402903 1.53012 0.0368767 1.92294C0.0334632 2.31576 0.184472 2.69421 0.45738 2.97677L5.39092 7.91031L0.45738 12.8439C0.314287 12.9821 0.200152 13.1474 0.121633 13.3302C0.0431146 13.5129 0.0017852 13.7095 5.65668e-05 13.9085C-0.00167207 14.1074 0.0362348 14.3047 0.111565 14.4888C0.186895 14.6729 0.298141 14.8402 0.43881 14.9809C0.579479 15.1215 0.746755 15.2328 0.930877 15.3081C1.115 15.3834 1.31228 15.4213 1.51121 15.4196C1.71014 15.4179 1.90673 15.3766 2.08952 15.298C2.2723 15.2195 2.43762 15.1054 2.57582 14.9623L7.50937 10.0288L12.4429 14.9623C12.7255 15.2352 13.1039 15.3862 13.4967 15.3828C13.8896 15.3794 14.2653 15.2218 14.5431 14.944C14.8209 14.6663 14.9784 14.2905 14.9819 13.8977C14.9853 13.5049 14.8343 13.1264 14.5613 12.8439L9.62781 7.91031L14.5613 2.97677C14.8422 2.69582 15 2.31482 15 1.91755C15 1.52028 14.8422 1.13928 14.5613 0.858328Z" fill="#D43D3A" />
                                        </svg>

                                        <span class="ps-3">No</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Service Call</td>
                                    <td>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5613 0.858328C14.2804 0.57746 13.8994 0.419678 13.5021 0.419678C13.1049 0.419678 12.7239 0.57746 12.4429 0.858328L7.50937 5.79187L2.57582 0.858328C2.29326 0.58542 1.91481 0.434411 1.52199 0.437825C1.12917 0.441238 0.753407 0.598801 0.47563 0.876578C0.197853 1.15435 0.0402903 1.53012 0.0368767 1.92294C0.0334632 2.31576 0.184472 2.69421 0.45738 2.97677L5.39092 7.91031L0.45738 12.8439C0.314287 12.9821 0.200152 13.1474 0.121633 13.3302C0.0431146 13.5129 0.0017852 13.7095 5.65668e-05 13.9085C-0.00167207 14.1074 0.0362348 14.3047 0.111565 14.4888C0.186895 14.6729 0.298141 14.8402 0.43881 14.9809C0.579479 15.1215 0.746755 15.2328 0.930877 15.3081C1.115 15.3834 1.31228 15.4213 1.51121 15.4196C1.71014 15.4179 1.90673 15.3766 2.08952 15.298C2.2723 15.2195 2.43762 15.1054 2.57582 14.9623L7.50937 10.0288L12.4429 14.9623C12.7255 15.2352 13.1039 15.3862 13.4967 15.3828C13.8896 15.3794 14.2653 15.2218 14.5431 14.944C14.8209 14.6663 14.9784 14.2905 14.9819 13.8977C14.9853 13.5049 14.8343 13.1264 14.5613 12.8439L9.62781 7.91031L14.5613 2.97677C14.8422 2.69582 15 2.31482 15 1.91755C15 1.52028 14.8422 1.13928 14.5613 0.858328Z" fill="#D43D3A" />
                                        </svg>

                                        <span class="ps-3">No</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Plumbing Checkup</td>
                                    <td>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5613 0.858328C14.2804 0.57746 13.8994 0.419678 13.5021 0.419678C13.1049 0.419678 12.7239 0.57746 12.4429 0.858328L7.50937 5.79187L2.57582 0.858328C2.29326 0.58542 1.91481 0.434411 1.52199 0.437825C1.12917 0.441238 0.753407 0.598801 0.47563 0.876578C0.197853 1.15435 0.0402903 1.53012 0.0368767 1.92294C0.0334632 2.31576 0.184472 2.69421 0.45738 2.97677L5.39092 7.91031L0.45738 12.8439C0.314287 12.9821 0.200152 13.1474 0.121633 13.3302C0.0431146 13.5129 0.0017852 13.7095 5.65668e-05 13.9085C-0.00167207 14.1074 0.0362348 14.3047 0.111565 14.4888C0.186895 14.6729 0.298141 14.8402 0.43881 14.9809C0.579479 15.1215 0.746755 15.2328 0.930877 15.3081C1.115 15.3834 1.31228 15.4213 1.51121 15.4196C1.71014 15.4179 1.90673 15.3766 2.08952 15.298C2.2723 15.2195 2.43762 15.1054 2.57582 14.9623L7.50937 10.0288L12.4429 14.9623C12.7255 15.2352 13.1039 15.3862 13.4967 15.3828C13.8896 15.3794 14.2653 15.2218 14.5431 14.944C14.8209 14.6663 14.9784 14.2905 14.9819 13.8977C14.9853 13.5049 14.8343 13.1264 14.5613 12.8439L9.62781 7.91031L14.5613 2.97677C14.8422 2.69582 15 2.31482 15 1.91755C15 1.52028 14.8422 1.13928 14.5613 0.858328Z" fill="#D43D3A" />
                                        </svg>

                                        <span class="ps-3">No</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Gas Checkup</td>
                                    <td>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5613 0.858328C14.2804 0.57746 13.8994 0.419678 13.5021 0.419678C13.1049 0.419678 12.7239 0.57746 12.4429 0.858328L7.50937 5.79187L2.57582 0.858328C2.29326 0.58542 1.91481 0.434411 1.52199 0.437825C1.12917 0.441238 0.753407 0.598801 0.47563 0.876578C0.197853 1.15435 0.0402903 1.53012 0.0368767 1.92294C0.0334632 2.31576 0.184472 2.69421 0.45738 2.97677L5.39092 7.91031L0.45738 12.8439C0.314287 12.9821 0.200152 13.1474 0.121633 13.3302C0.0431146 13.5129 0.0017852 13.7095 5.65668e-05 13.9085C-0.00167207 14.1074 0.0362348 14.3047 0.111565 14.4888C0.186895 14.6729 0.298141 14.8402 0.43881 14.9809C0.579479 15.1215 0.746755 15.2328 0.930877 15.3081C1.115 15.3834 1.31228 15.4213 1.51121 15.4196C1.71014 15.4179 1.90673 15.3766 2.08952 15.298C2.2723 15.2195 2.43762 15.1054 2.57582 14.9623L7.50937 10.0288L12.4429 14.9623C12.7255 15.2352 13.1039 15.3862 13.4967 15.3828C13.8896 15.3794 14.2653 15.2218 14.5431 14.944C14.8209 14.6663 14.9784 14.2905 14.9819 13.8977C14.9853 13.5049 14.8343 13.1264 14.5613 12.8439L9.62781 7.91031L14.5613 2.97677C14.8422 2.69582 15 2.31482 15 1.91755C15 1.52028 14.8422 1.13928 14.5613 0.858328Z" fill="#D43D3A" />
                                        </svg>

                                        <span class="ps-3">No</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Hot Water Checkup</td>
                                    <td>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5613 0.858328C14.2804 0.57746 13.8994 0.419678 13.5021 0.419678C13.1049 0.419678 12.7239 0.57746 12.4429 0.858328L7.50937 5.79187L2.57582 0.858328C2.29326 0.58542 1.91481 0.434411 1.52199 0.437825C1.12917 0.441238 0.753407 0.598801 0.47563 0.876578C0.197853 1.15435 0.0402903 1.53012 0.0368767 1.92294C0.0334632 2.31576 0.184472 2.69421 0.45738 2.97677L5.39092 7.91031L0.45738 12.8439C0.314287 12.9821 0.200152 13.1474 0.121633 13.3302C0.0431146 13.5129 0.0017852 13.7095 5.65668e-05 13.9085C-0.00167207 14.1074 0.0362348 14.3047 0.111565 14.4888C0.186895 14.6729 0.298141 14.8402 0.43881 14.9809C0.579479 15.1215 0.746755 15.2328 0.930877 15.3081C1.115 15.3834 1.31228 15.4213 1.51121 15.4196C1.71014 15.4179 1.90673 15.3766 2.08952 15.298C2.2723 15.2195 2.43762 15.1054 2.57582 14.9623L7.50937 10.0288L12.4429 14.9623C12.7255 15.2352 13.1039 15.3862 13.4967 15.3828C13.8896 15.3794 14.2653 15.2218 14.5431 14.944C14.8209 14.6663 14.9784 14.2905 14.9819 13.8977C14.9853 13.5049 14.8343 13.1264 14.5613 12.8439L9.62781 7.91031L14.5613 2.97677C14.8422 2.69582 15 2.31482 15 1.91755C15 1.52028 14.8422 1.13928 14.5613 0.858328Z" fill="#D43D3A" />
                                        </svg>

                                        <span class="ps-3">No</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Drain Checkup</td>
                                    <td>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5613 0.858328C14.2804 0.57746 13.8994 0.419678 13.5021 0.419678C13.1049 0.419678 12.7239 0.57746 12.4429 0.858328L7.50937 5.79187L2.57582 0.858328C2.29326 0.58542 1.91481 0.434411 1.52199 0.437825C1.12917 0.441238 0.753407 0.598801 0.47563 0.876578C0.197853 1.15435 0.0402903 1.53012 0.0368767 1.92294C0.0334632 2.31576 0.184472 2.69421 0.45738 2.97677L5.39092 7.91031L0.45738 12.8439C0.314287 12.9821 0.200152 13.1474 0.121633 13.3302C0.0431146 13.5129 0.0017852 13.7095 5.65668e-05 13.9085C-0.00167207 14.1074 0.0362348 14.3047 0.111565 14.4888C0.186895 14.6729 0.298141 14.8402 0.43881 14.9809C0.579479 15.1215 0.746755 15.2328 0.930877 15.3081C1.115 15.3834 1.31228 15.4213 1.51121 15.4196C1.71014 15.4179 1.90673 15.3766 2.08952 15.298C2.2723 15.2195 2.43762 15.1054 2.57582 14.9623L7.50937 10.0288L12.4429 14.9623C12.7255 15.2352 13.1039 15.3862 13.4967 15.3828C13.8896 15.3794 14.2653 15.2218 14.5431 14.944C14.8209 14.6663 14.9784 14.2905 14.9819 13.8977C14.9853 13.5049 14.8343 13.1264 14.5613 12.8439L9.62781 7.91031L14.5613 2.97677C14.8422 2.69582 15 2.31482 15 1.91755C15 1.52028 14.8422 1.13928 14.5613 0.858328Z" fill="#D43D3A" />
                                        </svg>

                                        <span class="ps-3">No</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </article>
                </div>
                <div class="col-lg-6">
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
                                <tr>
                                    <td scope="row">Priority Service</td>
                                    <td>
                                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.7 9.48634L2.2 6.08634L0 8.35301L7.7 17.4197L22 2.68634L19.8 0.419678L7.7 9.48634Z" fill="white" />
                                        </svg>

                                        <span class="ps-3">Yes</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Guaranteed Response Time</td>
                                    <td>
                                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.7 9.48634L2.2 6.08634L0 8.35301L7.7 17.4197L22 2.68634L19.8 0.419678L7.7 9.48634Z" fill="white" />
                                        </svg>

                                        <span class="ps-3">Yes</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Service Call</td>
                                    <td>
                                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.7 9.48634L2.2 6.08634L0 8.35301L7.7 17.4197L22 2.68634L19.8 0.419678L7.7 9.48634Z" fill="white" />
                                        </svg>

                                        <span class="ps-3">Yes</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Plumbing Checkup</td>
                                    <td>
                                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.7 9.48634L2.2 6.08634L0 8.35301L7.7 17.4197L22 2.68634L19.8 0.419678L7.7 9.48634Z" fill="white" />
                                        </svg>

                                        <span class="ps-3">Included</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Gas Checkup</td>
                                    <td>
                                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.7 9.48634L2.2 6.08634L0 8.35301L7.7 17.4197L22 2.68634L19.8 0.419678L7.7 9.48634Z" fill="white" />
                                        </svg>

                                        <span class="ps-3">Included</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Hot Water Checkup</td>
                                    <td>
                                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.7 9.48634L2.2 6.08634L0 8.35301L7.7 17.4197L22 2.68634L19.8 0.419678L7.7 9.48634Z" fill="white" />
                                        </svg>

                                        <span class="ps-3">Included</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Drain Checkup</td>
                                    <td>
                                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.7 9.48634L2.2 6.08634L0 8.35301L7.7 17.4197L22 2.68634L19.8 0.419678L7.7 9.48634Z" fill="white" />
                                        </svg>

                                        <span class="ps-3">Included</span>
                                    </td>
                                </tr>
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
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-lg-9">
                            <article>
                                <h2 class="text-white fs-165 text-white fw-800 lh-0_7 ps-10">Why</h2>
                                <p class="fs-109 text-secondary lh-1 fw-800">our membership</p>
                            </article>
        
                            <div class="membershipSlider mt-5">
                                <article class="membershipSlide">
                                    <p class="fs-30 text-capitalize fw-700">Up To 15% member rate discount</p>
                                    <p class="text-primary-light lh-1_5 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur interdum ullamcorper mattis. Phasellus ornare, lectus vel volutpat convallis, massa turpis facilisis turpis, vitae viverra ligula velit at augue.</p>
                                </article>
                                <article class="membershipSlide">
                                    <p class="fs-30 text-capitalize fw-700">Up To 15% member rate discount</p>
                                    <p class="text-primary-light lh-1_5 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur interdum ullamcorper mattis. Phasellus ornare, lectus vel volutpat convallis, massa turpis facilisis turpis, vitae viverra ligula velit at augue.</p>
                                </article>
                                <article class="membershipSlide">
                                    <p class="fs-30 text-capitalize fw-700">Up To 15% member rate discount</p>
                                    <p class="text-primary-light lh-1_5 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur interdum ullamcorper mattis. Phasellus ornare, lectus vel volutpat convallis, massa turpis facilisis turpis, vitae viverra ligula velit at augue.</p>
                                </article>
                                <article class="membershipSlide">
                                    <p class="fs-30 text-capitalize fw-700">Up To 15% member rate discount</p>
                                    <p class="text-primary-light lh-1_5 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur interdum ullamcorper mattis. Phasellus ornare, lectus vel volutpat convallis, massa turpis facilisis turpis, vitae viverra ligula velit at augue.</p>
                                </article>
                                <article class="membershipSlide">
                                    <p class="fs-30 text-capitalize fw-700">Up To 15% member rate discount</p>
                                    <p class="text-primary-light lh-1_5 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur interdum ullamcorper mattis. Phasellus ornare, lectus vel volutpat convallis, massa turpis facilisis turpis, vitae viverra ligula velit at augue.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/vip-member-hand.png" class="position-absolute bottom-0 end-0" alt="VIP membership program" />
    </section>
</main>
<?php require 'inc/footer.php'; ?>