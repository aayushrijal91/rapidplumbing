<?php
$page_contentArr = array();
$page_content = about_content::get_data($page_contentArr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$services = array('orderBy' => 'dragSortOrder ASC');
$services = about_services::get_data($services);

$stakeholders = array('orderBy' => 'dragSortOrder ASC');
$stakeholders = about_preface::get_data($stakeholders);

$staff_quotes = array('orderBy' => 'dragSortOrder ASC');
$staff_quotes = about_staff_quotes::get_data($staff_quotes);

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

<main class="aboutUsPage">
    <div class="container py-6">
        <section class="mission">
            <div class="row align-items-center gy-4">
                <div class="col-lg-4">
                    <h3 class="fs-64 fw-500 lh-1 highlight-primary"><?= _isset($page_content, 'introduction_title') ?></h3>
                </div>
                <div class="col-lg-8">
                    <p class="fw-700 fs-18"><?= _isset($page_content, 'introduction_subtitle') ?></p>
                </div>
            </div>

            <img class="py-5 w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/about-us-mission.gif" alt="Rapid Plumbing Van" />

            <article class="description fs-18">
                <?= _isset($page_content, 'introduction_description') ?>
            </article>

            <div class="row justify-content-center g-3 mt-5 mt-md-6">
                <div class="col-md-6 col-lg-4">
                    <article class="rapidContactCard">
                        <div class="d-flex gap-3 align-items-center justify-content-center flex-grow-1">
                            <svg width="45" height="37" viewBox="0 0 45 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.1319 1.44116C18.3121 -0.110514 11.6598 1.73504 8.51983 4.25578C3.69308 8.13129 5.95737 10.2597 5.95737 10.2597C5.95737 10.2597 7.36352 11.8929 10.8406 11.9275C12.135 7.00133 16.1156 4.79651 18.7 3.86345C19.2355 3.63055 19.8394 3.44026 20.523 3.30802C23.3372 2.76361 25.3296 3.14198 25.3296 3.14198C25.3296 3.14198 26.7013 3.43953 27.0403 2.66443C27.2939 2.08475 27.1118 1.63585 26.1319 1.44116Z" fill="white" />
                                <path d="M16.2395 5.70249C14.2521 7.11237 12.2891 9.15556 11.775 11.9004C12.6394 11.8416 13.6087 11.6903 14.6965 11.4045C14.6965 11.4045 14.2647 8.13874 16.2395 5.70249Z" fill="white" />
                                <path d="M11.5489 36.7199C11.5489 36.7199 12.4322 28.2481 14.6412 21.2516C16.5747 16.9544 23.8572 15.1808 28.9049 14.1596C32.8528 13.361 33.4209 17.1447 33.4209 17.1447L39.9677 14.103C39.9677 14.103 38.8547 8.43634 34.6557 7.88532C29.0022 7.14402 17.6299 11.4412 17.6299 11.4412C17.6299 11.4412 13.4297 12.7468 10.9363 12.6579C7.10826 12.5212 5.60795 10.985 5.60795 10.985C5.60795 10.985 5.85151 12.9621 5.75421 15.7568C5.6883 17.6582 5.40519 19.7771 4.89357 22.6211C4.3738 25.5114 1.75044 33.9611 0.0605469 36.6986L11.5489 36.7199Z" fill="white" />
                                <path d="M39.7115 14.9067L40.0316 15.7641C40.1421 16.0962 40.0003 16.4723 39.7171 16.6009L35.1942 18.6632C34.9105 18.7925 34.5891 18.6272 34.4786 18.2951L34.1584 17.4385L39.7115 14.9067Z" fill="white" />
                                <path d="M42.8922 29.5675C43.1791 29.4073 43.4522 29.2009 43.7026 28.9518C44.4704 28.1892 44.9205 27.1731 44.9362 26.1629C44.95 25.3342 44.8219 24.6414 44.2927 24.0742C43.8596 23.6091 43.3448 23.3718 42.4823 23.1073L42.4434 23.1007L42.4051 23.0868C40.1377 22.2779 39.1992 21.0715 38.8301 20.0598C37.6781 22.0288 37.186 23.8678 37.3636 25.5421C37.5934 27.7021 38.9085 28.8534 38.9217 28.8644L38.9412 28.8806L38.9613 28.9011C40.0598 30.023 41.6022 30.2846 42.8922 29.5675Z" fill="white" />
                                <path d="M26.1319 1.44116C18.312 -0.110514 11.6598 1.73504 8.51978 4.25578C3.69303 8.13129 5.95732 10.2597 5.95732 10.2597C5.95732 10.2597 7.36347 11.8929 10.8406 11.9275C12.135 7.00133 16.1155 4.79651 18.7 3.86345C19.2354 3.63055 19.8393 3.44026 20.5229 3.30802C23.3371 2.76361 25.3296 3.14198 25.3296 3.14198C25.3296 3.14198 26.7012 3.43953 27.0402 2.66443C27.2938 2.08475 27.1118 1.63585 26.1319 1.44116Z" fill="#00AEEF" />
                                <path d="M16.2395 5.70249C14.252 7.11237 12.2891 9.15556 11.775 11.9004C12.6394 11.8416 13.6086 11.6903 14.6965 11.4045C14.6965 11.4045 14.2646 8.13874 16.2395 5.70249Z" fill="#00AEEF" />
                                <path d="M39.7114 14.9067L40.0316 15.7641C40.1421 16.0962 40.0002 16.4723 39.7171 16.6009L35.1942 18.6632C34.9104 18.7925 34.589 18.6272 34.4785 18.2951L34.1584 17.4385L39.7114 14.9067Z" fill="#00AEEF" />
                                <path d="M42.8922 29.5675C43.179 29.4073 43.4521 29.2009 43.7026 28.9518C44.4703 28.1892 44.9204 27.1731 44.9361 26.1629C44.9499 25.3342 44.8219 24.6414 44.2927 24.0742C43.8595 23.6091 43.3448 23.3718 42.4822 23.1073L42.4433 23.1007L42.405 23.0868C40.1376 22.2779 39.1991 21.0715 38.83 20.0598C37.6781 22.0288 37.1859 23.8678 37.3636 25.5421C37.5934 27.7021 38.9085 28.8534 38.9217 28.8644L38.9411 28.8806L38.9612 28.9011C40.0598 30.023 41.6021 30.2846 42.8922 29.5675Z" fill="#00AEEF" />
                            </svg>
                            <p class="fs-24 fw-700">Meet <span class="text-primary">the Rapid Team</span></p>
                        </div>
                        <img class="heroImage pt-4" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/meet-the-rapid-team.jpg" alt="Meet the rapid team" />
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="rapidContactCard">
                        <div class="d-flex gap-3 align-items-center justify-content-center flex-grow-1">
                            <svg width="45" height="37" viewBox="0 0 45 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.1319 1.44116C18.3121 -0.110514 11.6598 1.73504 8.51983 4.25578C3.69308 8.13129 5.95737 10.2597 5.95737 10.2597C5.95737 10.2597 7.36352 11.8929 10.8406 11.9275C12.135 7.00133 16.1156 4.79651 18.7 3.86345C19.2355 3.63055 19.8394 3.44026 20.523 3.30802C23.3372 2.76361 25.3296 3.14198 25.3296 3.14198C25.3296 3.14198 26.7013 3.43953 27.0403 2.66443C27.2939 2.08475 27.1118 1.63585 26.1319 1.44116Z" fill="white" />
                                <path d="M16.2395 5.70249C14.2521 7.11237 12.2891 9.15556 11.775 11.9004C12.6394 11.8416 13.6087 11.6903 14.6965 11.4045C14.6965 11.4045 14.2647 8.13874 16.2395 5.70249Z" fill="white" />
                                <path d="M11.5489 36.7199C11.5489 36.7199 12.4322 28.2481 14.6412 21.2516C16.5747 16.9544 23.8572 15.1808 28.9049 14.1596C32.8528 13.361 33.4209 17.1447 33.4209 17.1447L39.9677 14.103C39.9677 14.103 38.8547 8.43634 34.6557 7.88532C29.0022 7.14402 17.6299 11.4412 17.6299 11.4412C17.6299 11.4412 13.4297 12.7468 10.9363 12.6579C7.10826 12.5212 5.60795 10.985 5.60795 10.985C5.60795 10.985 5.85151 12.9621 5.75421 15.7568C5.6883 17.6582 5.40519 19.7771 4.89357 22.6211C4.3738 25.5114 1.75044 33.9611 0.0605469 36.6986L11.5489 36.7199Z" fill="white" />
                                <path d="M39.7115 14.9067L40.0316 15.7641C40.1421 16.0962 40.0003 16.4723 39.7171 16.6009L35.1942 18.6632C34.9105 18.7925 34.5891 18.6272 34.4786 18.2951L34.1584 17.4385L39.7115 14.9067Z" fill="white" />
                                <path d="M42.8922 29.5675C43.1791 29.4073 43.4522 29.2009 43.7026 28.9518C44.4704 28.1892 44.9205 27.1731 44.9362 26.1629C44.95 25.3342 44.8219 24.6414 44.2927 24.0742C43.8596 23.6091 43.3448 23.3718 42.4823 23.1073L42.4434 23.1007L42.4051 23.0868C40.1377 22.2779 39.1992 21.0715 38.8301 20.0598C37.6781 22.0288 37.186 23.8678 37.3636 25.5421C37.5934 27.7021 38.9085 28.8534 38.9217 28.8644L38.9412 28.8806L38.9613 28.9011C40.0598 30.023 41.6022 30.2846 42.8922 29.5675Z" fill="white" />
                                <path d="M26.1319 1.44116C18.312 -0.110514 11.6598 1.73504 8.51978 4.25578C3.69303 8.13129 5.95732 10.2597 5.95732 10.2597C5.95732 10.2597 7.36347 11.8929 10.8406 11.9275C12.135 7.00133 16.1155 4.79651 18.7 3.86345C19.2354 3.63055 19.8393 3.44026 20.5229 3.30802C23.3371 2.76361 25.3296 3.14198 25.3296 3.14198C25.3296 3.14198 26.7012 3.43953 27.0402 2.66443C27.2938 2.08475 27.1118 1.63585 26.1319 1.44116Z" fill="#00AEEF" />
                                <path d="M16.2395 5.70249C14.252 7.11237 12.2891 9.15556 11.775 11.9004C12.6394 11.8416 13.6086 11.6903 14.6965 11.4045C14.6965 11.4045 14.2646 8.13874 16.2395 5.70249Z" fill="#00AEEF" />
                                <path d="M39.7114 14.9067L40.0316 15.7641C40.1421 16.0962 40.0002 16.4723 39.7171 16.6009L35.1942 18.6632C34.9104 18.7925 34.589 18.6272 34.4785 18.2951L34.1584 17.4385L39.7114 14.9067Z" fill="#00AEEF" />
                                <path d="M42.8922 29.5675C43.179 29.4073 43.4521 29.2009 43.7026 28.9518C44.4703 28.1892 44.9204 27.1731 44.9361 26.1629C44.9499 25.3342 44.8219 24.6414 44.2927 24.0742C43.8595 23.6091 43.3448 23.3718 42.4822 23.1073L42.4433 23.1007L42.405 23.0868C40.1376 22.2779 39.1991 21.0715 38.83 20.0598C37.6781 22.0288 37.1859 23.8678 37.3636 25.5421C37.5934 27.7021 38.9085 28.8534 38.9217 28.8644L38.9411 28.8806L38.9612 28.9011C40.0598 30.023 41.6021 30.2846 42.8922 29.5675Z" fill="#00AEEF" />
                            </svg>
                            <p class="fs-24 fw-700">Rapid <span class="text-primary">Partnerships</span></p>
                        </div>
                        <img class="heroImage pt-4" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/rapid-partnership.jpg" alt="Rapid Partnership" />
                    </article>
                </div>

                <div class="col-md-6 col-lg-4">
                    <article class="rapidContactCard">
                        <div class="d-flex gap-3 align-items-center justify-content-center flex-grow-1">
                            <svg width="45" height="37" viewBox="0 0 45 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.1319 1.44116C18.3121 -0.110514 11.6598 1.73504 8.51983 4.25578C3.69308 8.13129 5.95737 10.2597 5.95737 10.2597C5.95737 10.2597 7.36352 11.8929 10.8406 11.9275C12.135 7.00133 16.1156 4.79651 18.7 3.86345C19.2355 3.63055 19.8394 3.44026 20.523 3.30802C23.3372 2.76361 25.3296 3.14198 25.3296 3.14198C25.3296 3.14198 26.7013 3.43953 27.0403 2.66443C27.2939 2.08475 27.1118 1.63585 26.1319 1.44116Z" fill="white" />
                                <path d="M16.2395 5.70249C14.2521 7.11237 12.2891 9.15556 11.775 11.9004C12.6394 11.8416 13.6087 11.6903 14.6965 11.4045C14.6965 11.4045 14.2647 8.13874 16.2395 5.70249Z" fill="white" />
                                <path d="M11.5489 36.7199C11.5489 36.7199 12.4322 28.2481 14.6412 21.2516C16.5747 16.9544 23.8572 15.1808 28.9049 14.1596C32.8528 13.361 33.4209 17.1447 33.4209 17.1447L39.9677 14.103C39.9677 14.103 38.8547 8.43634 34.6557 7.88532C29.0022 7.14402 17.6299 11.4412 17.6299 11.4412C17.6299 11.4412 13.4297 12.7468 10.9363 12.6579C7.10826 12.5212 5.60795 10.985 5.60795 10.985C5.60795 10.985 5.85151 12.9621 5.75421 15.7568C5.6883 17.6582 5.40519 19.7771 4.89357 22.6211C4.3738 25.5114 1.75044 33.9611 0.0605469 36.6986L11.5489 36.7199Z" fill="white" />
                                <path d="M39.7115 14.9067L40.0316 15.7641C40.1421 16.0962 40.0003 16.4723 39.7171 16.6009L35.1942 18.6632C34.9105 18.7925 34.5891 18.6272 34.4786 18.2951L34.1584 17.4385L39.7115 14.9067Z" fill="white" />
                                <path d="M42.8922 29.5675C43.1791 29.4073 43.4522 29.2009 43.7026 28.9518C44.4704 28.1892 44.9205 27.1731 44.9362 26.1629C44.95 25.3342 44.8219 24.6414 44.2927 24.0742C43.8596 23.6091 43.3448 23.3718 42.4823 23.1073L42.4434 23.1007L42.4051 23.0868C40.1377 22.2779 39.1992 21.0715 38.8301 20.0598C37.6781 22.0288 37.186 23.8678 37.3636 25.5421C37.5934 27.7021 38.9085 28.8534 38.9217 28.8644L38.9412 28.8806L38.9613 28.9011C40.0598 30.023 41.6022 30.2846 42.8922 29.5675Z" fill="white" />
                                <path d="M26.1319 1.44116C18.312 -0.110514 11.6598 1.73504 8.51978 4.25578C3.69303 8.13129 5.95732 10.2597 5.95732 10.2597C5.95732 10.2597 7.36347 11.8929 10.8406 11.9275C12.135 7.00133 16.1155 4.79651 18.7 3.86345C19.2354 3.63055 19.8393 3.44026 20.5229 3.30802C23.3371 2.76361 25.3296 3.14198 25.3296 3.14198C25.3296 3.14198 26.7012 3.43953 27.0402 2.66443C27.2938 2.08475 27.1118 1.63585 26.1319 1.44116Z" fill="#00AEEF" />
                                <path d="M16.2395 5.70249C14.252 7.11237 12.2891 9.15556 11.775 11.9004C12.6394 11.8416 13.6086 11.6903 14.6965 11.4045C14.6965 11.4045 14.2646 8.13874 16.2395 5.70249Z" fill="#00AEEF" />
                                <path d="M39.7114 14.9067L40.0316 15.7641C40.1421 16.0962 40.0002 16.4723 39.7171 16.6009L35.1942 18.6632C34.9104 18.7925 34.589 18.6272 34.4785 18.2951L34.1584 17.4385L39.7114 14.9067Z" fill="#00AEEF" />
                                <path d="M42.8922 29.5675C43.179 29.4073 43.4521 29.2009 43.7026 28.9518C44.4703 28.1892 44.9204 27.1731 44.9361 26.1629C44.9499 25.3342 44.8219 24.6414 44.2927 24.0742C43.8595 23.6091 43.3448 23.3718 42.4822 23.1073L42.4433 23.1007L42.405 23.0868C40.1376 22.2779 39.1991 21.0715 38.83 20.0598C37.6781 22.0288 37.1859 23.8678 37.3636 25.5421C37.5934 27.7021 38.9085 28.8534 38.9217 28.8644L38.9411 28.8806L38.9612 28.9011C40.0598 30.023 41.6021 30.2846 42.8922 29.5675Z" fill="#00AEEF" />
                            </svg>
                            <p class="fs-24 fw-700">Message <span class="text-primary">from The Owner</span></p>
                        </div>
                        <img class="heroImage pt-4" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/message-from-the-owner.jpg" alt="Message from the owner" />
                    </article>
                </div>
            </div>
        </section>
    </div>

    <section class="services py-6">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-auto">
                    <h3 class="fs-64 fw-500"><?= _isset($page_content, 'services_title') ?></h3>
                </div>

                <div class="col-auto">
                    <?php if (!empty($page_content['services_button_link']) && !empty($page_content['services_button_text'])) : ?>
                        <button class="bg-transparent rounded-pill">
                            <a href="<?= _issetUrl($page_content, 'services_button_link'); ?>" class="btn btn-secondary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($page_content, 'services_button_text') ?></a>
                        </button>
                    <?php endif; ?>
                </div>
            </div>

            <hr class="border-primary my-4" />

            <article class="fs-18 description"><?= _isset($page_content, 'services_description'); ?></article>

            <div class="row gy-4 pt-5 justify-content-center">
                <?php foreach ($services as $service) : ?>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <article class="serviceCard">
                            <?= _imgSrc($service, 'image', 'heroImage w-100') ?>
                            <div class="title rounded-pill">
                                <p class="px-4 fs-20 fw-700 text-capitalize"><?= _isset($service, 'title') ?></p>

                                <?php if (!empty($service['button_link'])) : ?>
                                    <button class="bg-transparent rounded-pill">
                                        <a href="<?= _issetUrl($service, 'button_link'); ?>" class="btn btn-primary d-inline-flex text-white rounded-pill px-3 px-lg-4 fs-18 fw-700">Enquire</a>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="stakeholders">
        <div class="container">
            <div class="row gy-4">
                <?php foreach ($stakeholders as $stakeholder) : ?>
                    <div class="col-12">
                        <article class="stakeholderCard">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-5 col-lg-6 col-xl-3">
                                    <?= _imgSrc($stakeholder, 'image', 'w-100 h-100') ?>
                                </div>
                                <div class="col-12 col-md">
                                    <article class="px-3 px-xl-5 py-4">
                                        <p class="fs-24 fw-500"><?= _isset($stakeholder, 'title') ?></p>

                                        <article class="description fs-18 text-primary-light pt-3">
                                            <?= _isset($stakeholder, 'content') ?>
                                        </article>
                                    </article>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section class="ceo-message bg-primary-dark">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <article class="py-5 pt-lg-8 pb-lg-6">
                        <h3 class="fs-64 fw-400 text-capitalize lh-1 highlight-primary"><?= _isset($page_content, 'message_title') ?></h3>
                        <article class="description fs-18 lh-1_5 pt-4">
                            <?= _isset($page_content, 'message_description') ?>
                        </article>
                    </article>
                </div>
                <div class="col-lg-6">
                    <?= _imgSrc($page_content, 'message_image', 'h-100 w-100') ?>
                </div>
            </div>
        </div>
    </section>

    <section class="why-us py-5 py-lg-8">
        <div class="container">
            <div class="row align-items-center gy-5 ">
                <div class="col-lg-5">
                    <h3 class="fs-64 lh-1 highlight-primary"><?= _isset($page_content, 'why_us_title') ?></h3>

                    <article class="description pt-4 py-md-5 fs-18 lh-1_67">
                        <?= _isset($page_content, 'why_us_description') ?>
                    </article>

                    <?php if (!empty($page_content['why_us_button_link']) && !empty($page_content['why_us_button_text'])) : ?>
                        <button class="bg-transparent rounded-pill">
                            <a href="<?= _issetUrl($page_content, 'why_us_button_link'); ?>" class="btn btn-primary d-inline-flex text-white rounded-pill px-3 px-lg-7 fs-18 fw-700"><?= _isset($page_content, 'why_us_button_text') ?></a>
                        </button>
                    <?php endif; ?>
                </div>

                <div class="col-lg-7">
                    <?= _imgSrc($page_content, 'why_us_image', 'w-100 h-100') ?>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 py-md-6 py-lg-10">
        <section class="review" id="about-review">
            <?php foreach ($staff_quotes as $quote) : ?>
                <article>
                    <div class="row align-items-center gx-lg-6 gy-4">
                        <div class="col-lg-6">
                            <?= _imgSrc($quote, 'image', 'w-100 h-100') ?>
                        </div>
                        <div class="col-lg-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="42" viewBox="0 0 71 42" fill="none">
                                <path d="M27.5461 41.578H0.806641L17.9199 0.628418H35.4915L27.5461 41.578ZM62.231 41.578H35.6443L52.7576 0.628418H70.1764L62.231 41.578Z" fill="#00AEEF" />
                            </svg>

                            <h2 class="fs-48 fw-700 lh-1 text-primary py-4 highlight-white"><?= _isset($quote, 'title') ?></h2>

                            <article class="fs-18 lh-1_5 pt-4 description">
                                <?= _isset($quote, 'content') ?>
                            </article>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    </div>

    <section class="bg-white py-5">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row gy-4">
                        <div class="col-12 col-lg-3">
                            <p class="text-primary fs-32 fw-700 lh-1">Some of our<br /> happy customers</p>
                        </div>

                        <div class="col-12 col-lg-9">
                            <div class="customersSlider">
                                <?php foreach ($page_content['partner_images'] as $partner) : ?>
                                    <div><img src="<?= V_CDN_URL . $partner['urlPath'] ?>" alt="<?= $partner['info1'] ?>" title="<?= $partner['info2'] ?>" width="<?= $partner['width'] ?>" height="<?= $partner['height'] ?>"></div>
                                <?php endforeach; ?>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/westfield.png" alt="Westfield"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/zone-bowling.png" alt="Zone Bowling"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/woolworths.png" alt="Woolworths"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>
<?php
require 'inc/footer.php';
?>