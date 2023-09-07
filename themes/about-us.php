<?php
$AboutPageArr = array();
$AboutPage = about_content::get_data($AboutPageArr);
if (count($AboutPage)) {
    $AboutPage = $AboutPage[0];
}

/*  Meta data */
$meta_title         = $AboutPage['meta_title'];
$meta_description     = $AboutPage['meta_description'];
$meta_keyword         = $AboutPage['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $AboutPage['banner_video_image'];
// $banner_details['mobile_background_image'] = $AboutPage['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $AboutPage['banner_title_heading_tag'];
$banner_details['banner_title'] = $AboutPage['banner_title'];
$banner_details['banner_subtitle'] = $AboutPage['banner_subtitle'];
$banner_details['banner_button_1_text'] = $AboutPage['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $AboutPage['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $AboutPage['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $AboutPage['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="aboutUsPage">
    <div class="container py-6">
        <section class="mission">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h3 class="fs-64 fw-500 lh-1">Our <span class="text-primary">Mission</span></h3>
                </div>
                <div class="col-lg-8">
                    <p class="fw-700 fs-18">Provide a fast and efficient plumbing solution whilst not compromising on the quality of work or safety.</p>
                </div>
            </div>

            <img class="py-5 w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/about-us-mission.gif" alt="Rapid Plumbing Van" />

            <article class="description fs-18">
                <p>We are committed to ensuring that our clients are totally satisfied with the overall experience of dealing with our company and it is our philosophy to provide the highest level of customer service and workmanship to ensure our service meets and exceeds expectations.</p>
                <p>Our expert Penrith technicians are committed to providing effective and efficient results and are dedicated to letting our professionalism and workmanship leave a lasting impression. Don’t just take our word for it.</p>
            </article>

            <div class="row gx-3 mt-6">
                <div class="col-4">
                    <article class="rapidContactCard">
                        <div class="d-flex gap-3 align-items-center justify-content-center">
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
                <div class="col-4">
                    <article class="rapidContactCard">
                        <div class="d-flex gap-3 align-items-center justify-content-center">
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
                <div class="col-4">
                    <article class="rapidContactCard">
                        <div class="d-flex gap-3 align-items-center justify-content-center">
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
                            <p class="fs-20 fw-700">Message <span class="text-primary">from The Owner</span></p>
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
                    <h3 class="fs-64 fw-500">Services</h3>
                </div>
                <div class="col-auto">
                    <a href="<?= _issetUrl($banner_details, 'banner_button_1_link'); ?>" class="btn btn-secondary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($banner_details, 'banner_button_1_text'); ?></a>
                </div>
            </div>

            <hr class="border-primary my-4" />

            <p class="fs-18">Rapid Plumbing Group is a fully licensed and insured business that offers an impressive total plumbing, drainage and gas fitting services to our domestic, industrial, and commercial clients. Our services range from small maintenance jobs to large multi level developments within the area. No issue is ever too big or too small for our experts to handle.</p>

            <div class="row pt-5">
                <div class="col-md-6 col-lg-3">
                    <article class="serviceCard">
                        <img class="heroImage w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/service-1.jpg" alt="Plumbing" />
                        <div class="title rounded-pill">
                            <p class="px-4 fs-20 fw-700 text-capitalize">Plumbing</p>
                            <a href="#" class="btn btn-primary d-inline-flex text-white rounded-pill px-3 px-lg-4 fs-18 fw-700">Enquire</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article class="serviceCard">
                        <img class="heroImage w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/service-2.jpg" alt="Blocked Drains" />
                        <div class="title rounded-pill">
                            <p class="px-4 fs-20 fw-700 text-capitalize">Blocked Drains</p>
                            <a href="#" class="btn btn-primary d-inline-flex text-white rounded-pill px-3 px-lg-4 fs-18 fw-700">Enquire</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article class="serviceCard">
                        <img class="heroImage w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/service-3.jpg" alt="Hot Water" />
                        <div class="title rounded-pill">
                            <p class="px-4 fs-20 fw-700 text-capitalize">Hot Water</p>
                            <a href="#" class="btn btn-primary d-inline-flex text-white rounded-pill px-3 px-lg-4 fs-18 fw-700">Enquire</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article class="serviceCard">
                        <img class="heroImage w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/service-4.jpg" alt="Gas Fitting" />
                        <div class="title rounded-pill">
                            <p class="px-4 fs-20 fw-700 text-capitalize">Gas Fitting</p>
                            <a href="#" class="btn btn-primary d-inline-flex text-white rounded-pill px-3 px-lg-4 fs-18 fw-700">Enquire</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="stakeholders">
        <div class="container">
            <div class="row gy-4">
                <div class="col-12">
                    <article class="stakeholderCard">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img class="w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stakeholder-1.jpg" alt="Rapid Plumbing Van" />
                            </div>
                            <div class="col">
                                <article class="px-5 py-4">
                                    <p class="fs-24 fw-500">Staff</p>
                                    <p class="fs-18 text-primary-light pt-3">Our fully trained and experienced team work tirelessly to build a reputation of being professional, reliable and competent in all aspects of the plumbing trade. We do this by providing cost effective solutions to our customers’ specific needs. Additionally, we participate in regular trainings to ensure that we are industry leaders in the plumbing world. We have sourced the industries most dedicated and professional tradesmen to enable us to maintain the highest level of customer service and satisfaction.</p>
                                </article>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12">
                    <article class="stakeholderCard">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img class="w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stakeholder-2.jpg" alt="Rapid Plumbing Van" />
                            </div>
                            <div class="col">
                                <article class="px-5 py-4">
                                    <p class="fs-24 fw-500">Clients</p>
                                    <p class="fs-18 text-primary-light pt-3">Our client base is wide and varied which has seen us complete works for a variety of corporate sectors, agents, and builders alike. These include large organizations such as Transfield, Westfield shopping centres, Woolworths, and various government agencies such as N.S.W Fire Services, Defense Housing (DHA), NSW Primary and Secondary Schools, and various local councils. We have been able to continually exceed KPI’s with our maintenance contracts and are also highly regarded and respected for completing large projects well in advance of deadlines.</p>
                                </article>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12">
                    <article class="stakeholderCard">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img class="w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stakeholder-3.jpg" alt="Rapid Plumbing Van" />
                            </div>
                            <div class="col">
                                <article class="px-5 py-4">
                                    <p class="fs-24 fw-500">Policies</p>
                                    <p class="fs-18 text-primary-light pt-3">Our tradesmen follow a strict OHS policy and also adhere to a detailed Code of Conduct and cleanliness policies to ensure that our image in the community is held in high regard. All of our technicians are background checked and certified to complete services in your home. We always keep your home clean and safe providing all of our customers the peace of mind that their property is in the best shape possible.</p>
                                </article>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="ceo-message bg-primary-dark">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <article class="py-5 pt-lg-8 pb-lg-6">
                        <h3 class="fs-64 fw-400 text-capitalize lh-1">Message From Our Owners <span class="fw-700 text-primary">We'll Be there in a flush</span></h3>
                        <article class="description fs-18 lh-1_5 pt-4">
                            <p class="fw-600">A message from owner operators, Scott & Melanie Mahboub</p>
                            <p class="">Since starting our own business way back in 2005, we've always had one main focus in mind - to provide our clients a fast, personalised, friendly and expert service at an honest, affordable price. This continued philosophy has enabled us to grow & expand our customer base across multiple industry sectors. Our continued growth has positioned us ahead of the field & helped us to become the go to plumbing company in the Greater Sydney & lower Blue Mountains regions.</p>
                            <p class="">With the combined experience of over 210 years, we are well known for thinking outside of the box and having an innovative and environmentally friendly approach to all plumbing issues. It is our pleasure to serve you whether you are a home or business owner, Strata, real estate or facility Manager, Government agency or builder, we are here to help give you piece of mind & ensure that the job will get done right at the best possible price first time, every single time.</p>
                            <p class="fw-600">That is our promise to you!!!!</p>
                        </article>
                    </article>
                </div>
                <div class="col-lg-6">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/ceo.png" alt="CEO" />
                </div>
            </div>
        </div>
    </section>

    <section class="why-us py-5 py-lg-8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h3 class="fs-64 lh-1">Why <span class="text-primary">Choose Rapid?</span></h3>
                    <article class="description py-5">
                        <p class="fs-18 fw-500">No issue is too big or too small for our plumbers!</p>
                        <p class="fs-18 lh-1_5">
                            Nothing is worse than having a plumbing issues in your home or property. When this occurs you could find yourself looking for a reliable and professional Penrith plumber. At Rapid Plumbing Group Pty Ltd we offer customers in an around Penrith expert plumbing solutions.
                        </p>
                    </article>
                    <a href="<?= _issetUrl($banner_details, 'banner_button_1_link'); ?>" class="btn btn-primary d-inline-flex text-white rounded-pill px-3 px-lg-7 fs-18 fw-700">Enquire</a>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-4">
                            <img class="w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/why-us-about-1.jpg" alt="Why us" />
                        </div>
                        <div class="col-4">
                            <img class="w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/why-us-about-2.jpg" alt="Why us" />
                        </div>
                        <div class="col-4">
                            <img class="w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/why-us-about-3.jpg" alt="Why us" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 py-md-6 py-lg-10">
        <section class="review" id="about-review">
            <article>
                <div class="row align-items-center gx-lg-6">
                    <div class="col-lg-6">
                        <img class="w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/why-us-review-1.jpg" alt="Testimonial" />
                    </div>
                    <div class="col-lg-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="42" viewBox="0 0 71 42" fill="none">
                            <path d="M27.5461 41.578H0.806641L17.9199 0.628418H35.4915L27.5461 41.578ZM62.231 41.578H35.6443L52.7576 0.628418H70.1764L62.231 41.578Z" fill="#00AEEF" />
                        </svg>

                        <h2 class="fs-48 fw-700 lh-1 text-primary py-4">“Finally, a local plumber <span class="text-white">you can rely on</span> to provide a professional reliable service without being ripped off”</h2>
                        <p class="fs-18 lh-1_5 pt-4">At Rapid Plumbing Group Pty Ltd we provide all of our customers with dedicated services and attention. Our technicians will always provide you with pricing at affordable rates and with no hidden fees. We are dedicated to providing our customers with the care and attention that they deserve. We will always ensure that you are 100% satisfied with the services we perform on your home or property.</p>
                    </div>
                </div>
            </article>

            <article>
                <div class="row align-items-center gx-lg-6">
                    <div class="col-lg-6">
                        <img class="w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/why-us-review-2.jpg" alt="Testimonial" />
                    </div>
                    <div class="col-lg-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="42" viewBox="0 0 71 42" fill="none">
                            <path d="M27.5461 41.578H0.806641L17.9199 0.628418H35.4915L27.5461 41.578ZM62.231 41.578H35.6443L52.7576 0.628418H70.1764L62.231 41.578Z" fill="#00AEEF" />
                        </svg>

                        <h2 class="fs-48 fw-700 lh-1 text-primary py-4">“Great <span class="text-white">service and quality</span> workmanship.”</h2>
                        <article class="description pt-4 fs-18 lh-1_5">
                            <p>At Rapid Plumbing Group Pty Ltd we provide all of our customers with dedicated services and attention. Our technicians will always provide you with pricing at affordable rates and with no hidden fees. We are dedicated to providing our customers with the care and attention that they deserve. We will always ensure that you are 100% satisfied with the services we perform on your home or property.</p>
                        </article>
                    </div>
                </div>
            </article>

            <article>
                <div class="row align-items-center gx-lg-6">
                    <div class="col-lg-6">
                        <img class="w-100" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/why-us-review-3.jpg" alt="Testimonial" />
                    </div>
                    <div class="col-lg-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="71" height="42" viewBox="0 0 71 42" fill="none">
                            <path d="M27.5461 41.578H0.806641L17.9199 0.628418H35.4915L27.5461 41.578ZM62.231 41.578H35.6443L52.7576 0.628418H70.1764L62.231 41.578Z" fill="#00AEEF" />
                        </svg>

                        <h2 class="fs-48 fw-700 lh-1 text-primary py-4">“The boys are always on time and <span class="text-white">always provide choices</span> that are cost effective for me and always clean up after themselves.”</h2>
                        <article class="description pt-4 fs-18 lh-1_5">
                            <p>Whenever we are called to a job, we always put our customers first. We do this by providing quality services, arriving on time, and always providing our customers with multiple price points and options. This allows us to get the job done and stay affordable in the face of plumbing emergencies.</p>
                            <p>Additionally, our technicians will always clean up after themselves to ensure that your home is kept clean and organized even after we finish our services.</p>
                        </article>
                    </div>
                </div>
            </article>
        </section>
    </div>

    <section class="bg-white py-5">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-11">
                    <div class="row">
                        <div class="col-3">
                            <p class="text-primary fs-32 fw-700 lh-1">Some of our<br /> happy customers</p>
                        </div>
                        <div class="col-9">
                            <div class="customersSlider">
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/catholic-schools-nsw.png" alt="Catholic Schools NSW"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/nsw-ambulance.png" alt="NSW Ambulance"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/nsw-education.png" alt="NSW Education"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/fire-rescue.png" alt="Fire Rescue"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/roads-maritime.png" alt="Roads and Maritime"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/facilities-first.png" alt="Facilities First"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/mcdonalds.png" alt="McDonalds"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/dha.png" alt="DHA"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/westfield.png" alt="Westfield"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/penrith-city-council.png" alt="Penrith City Council"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/spotless.png" alt="Spotless"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/raine-home-commercial.png" alt="Raine Home Commercial"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/downer.png" alt="Downer"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/allianz.png" alt="Allianz"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/serco.png" alt="Serco"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/the-hills-sydney-garden-shire.png" alt="The hills Sydney Garden Shire"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/hungry-jacks.png" alt="Hungry Jacks"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/starr-partners.png" alt="Starr Partners"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/century-21.png" alt="Century 21"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/fairtrade.png" alt="Fair Trade"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/barbeque-galore.png" alt="Barbeque Galore"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/bcf.png" alt="BCF"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/ray-white.png" alt="Ray White"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/fitness-first.png" alt="Fitness First"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/zone-bowling.png" alt="Zone Bowling"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/woolworths.png" alt="Woolworths"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/netstrata.png" alt="Net Strata"></div>
                                <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/logo/belle-property.png" alt="Belle Property"></div>

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