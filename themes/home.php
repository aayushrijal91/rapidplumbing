<?php
/* menu single record start*/
$header_settings_Arr = array();
$header_settings = header_settings::get_data($header_settings_Arr);
$header_settings = $header_settings[0];
/* menu single record end */

/* menu single record start*/
$footer_settings_Arr = array();
$footer_settings = footer_settings::get_data($footer_settings_Arr);
$footer_settings = $footer_settings[0];
/* menu single record end */

/* SEO Info start */
$seo_common_variablesarr = array();
$seo_common_variables = seo_common_variables::get_data($seo_common_variablesarr);
$seo_common_variables = $seo_common_variables[0];
/* SEO Info End */
define('V_DEFAULT_IMG_ALT', $seo_common_variables['seo_default_image_alt_tag']);

$HomePageArr = array();
$HomePage = homepage_content::get_data($HomePageArr);
if (count($HomePage)) {
    $HomePage = $HomePage[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $HomePage['meta_title'];
$meta_description     = $HomePage['meta_description'];
$meta_keyword         = $HomePage['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */
?>


<?php
require 'inc/header.php';
require 'inc/nav.php';
?>

<main class="homepage">
    <section class="banner">
        <div class="w-100">
            <div class="homebanner">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/slide-1.jpg" alt="home banner slide" />
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/slide-2.jpg" alt="home banner slide" />
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/slide-3.jpg" alt="home banner slide" />
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/slide-4.jpg" alt="home banner slide" />
            </div>
        </div>
        <div class="rapid-van">
            <div class="d-flex justify-content-center mb-4">
                <a href="" class="text-uppercase btn btn-secondary rounded-pill d-inline-flex fs-18 fw-700 text-white px-5 px-lg-6">Enquire</a>
            </div>

            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/rapid-van.png" alt="Rapid Plumbing Van" />
        </div>
    </section>

    <section class="form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title">
                        <article>
                            <p class="text-1">Enquire</p>
                            <p class="text-2">with us</p>
                            <p class="text-3">Today</p>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form id="enquiry_form" class="needs-validation" method="POST" novalidate>
                        <input type="hidden" name="recaptcha_response" class="g-recaptcha-response" value="6Lc_0cQiAAAAAPy9Shlbf3Sru6VxUYAvqeIWN_hD">
                        <input type="hidden" name="request" value="enquiry_form_request">
                        <div class="row gy-5">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" name="firstName" id="firstName" class="form-control required" placeholder="E.g. John" />
                                    <span class="text-danger fs-12 error">Error</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" name="lastName" id="lastName" class="form-control required" placeholder="E.g. Smith" />
                                    <span class="text-danger fs-12 error">Error</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="emailAddress">Email</label>
                                    <input type="email" name="emailAddress" id="emailAddress" class="form-control required" placeholder="E.g. johnsmith@gmail.com" />
                                    <span class="text-danger fs-12 error">Error</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="phoneNumber">Number</label>
                                    <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control required" placeholder="E.g. 0400 000 000" />
                                    <span class="text-danger fs-12 error">Error</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="phoneNumber">What can we help you with?</label>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="service" id="service1" value="Hot Water System" checked>
                                                <label class="form-check-label" for="service1">
                                                    Hot Water System
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="service" id="service2" value="Leak Detection">
                                                <label class="form-check-label" for="service2">
                                                    Leak Detection
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="service" id="service3" value="Commercial Plumbing">
                                                <label class="form-check-label" for="service3">
                                                    Commercial Plumbing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="service" id="service4" value="Blocked Drains">
                                                <label class="form-check-label" for="service4">
                                                    Blocked Drains
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="service" id="service5" value="Water Filtration">
                                                <label class="form-check-label" for="service5">
                                                    Water Filtration
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="service" id="service6" value="Emergency Plumbing">
                                                <label class="form-check-label" for="service6">
                                                    Emergency Plumbing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="service" id="service7" value="Gas Fitting">
                                                <label class="form-check-label" for="service7">
                                                    Gas Fitting
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="service" id="service8" value="General Plumbing">
                                                <label class="form-check-label" for="service8">
                                                    General Plumbing
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="message">Message</label>
                                    <input type="text" name="message" id="message" class="form-control" placeholder="Write your message" />
                                    <span class="text-danger fs-12 error">Error</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="submit_btn btn btn-primary rounded-pill fs-18 fw-700 text-white px-5 px-lg-6">Enquire</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/24-hr-service-cta.jpg" alt="24 hour emergency service" />
                </div>

                <div class="col-lg-6">
                    <div class="row gy-3 h-100">
                        <div class="col-12">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-expert-cta.jpg" alt="24 hour emergency service" />
                        </div>
                        <div class="col-12">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/licensed-insured-cta.jpg" alt="24 hour emergency service" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trusted bg-primary position-relative z-1">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-img1.jpg" alt="Rapid Plumbing Van" />
            </div>
            <div class="col-6">
                <article class="p-7 pe-10 d-flex flex-column gap-1_5">
                    <p class="fs-70 fw-500 lh-1">Your <span class="text-primary">Trusted</span> <br>Penrith <span class="text-primary">Plumber.</span></p>
                    <p class="fs-20 py-4 col-xl-9">We pride ourselves on our reputation for fast, friendly service, and all of our staff is fully trained to uphold our high standards in everything they do.</p>
                    <div class="thumbnail-slider d-flex gap-3">
                        <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-thumbnail1.jpg" alt="Rapid Plumbing Van" /></div>
                        <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-thumbnail2.jpg" alt="Rapid Plumbing Van" /></div>
                        <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-thumbnail3.jpg" alt="Rapid Plumbing Van" /></div>
                    </div>
                </article>
            </div>
        </div>
        <div class="trusted-bg position-absolute bottom-0 end-0 mt-12 z-n1">
            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-bg.png" alt="Rapid Plumbing Van" />
        </div>
    </section>

    <section class="blue-gradient">
        <section class="welcome">
            <div class="container">
                <h3 class="fs-64 fw-500 text-center lh-1"><span class="text-primary">Welcome</span> to Rapid Plumbing Group</h3>
                <p class="fs-20 text-center pt-5">Your commercial preventative & reactive maintenance specialists</p>
                <div class="text-center py-6"><a href="#" class="btn btn-primary d-inline-flex text-white rounded-pill py-1 px-4 fs-18 fw-700">More About Us</a></div>
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="row gx-3">
                            <div class="col">
                                <article class="awardCard mt-7">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-awards.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2018</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col">
                                <article class="awardCard mt-5">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-awards.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2019</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col">
                                <article class="awardCard mt-9">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-awards.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2020</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col">
                                <article class="awardCard">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-awards.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2021</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col">
                                <article class="awardCard mt-7">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-awards.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2022</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-bg welcome-bg1 position-absolute start-0 top-50 translate-middle-y mt-5 z-n1"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg1.png" alt="Rapid Plumbing Van" /></div>
            <div class="welcome-bg welcome-bg2 position-absolute end-0 top-50 translate-middle-y mt-5 z-n1"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg2.png" alt="Rapid Plumbing Van" /></div>
        </section>

        <section class="help">
            <div class="container">
                <h3 class="fs-64 fw-500 text-center lh-1">How can we <span class="text-primary">help</span> you?</h3>
                <div class="row pt-8">
                    <div class="col-xl-3">
                        <article class="helpCard">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/help-img1.jpg" alt="Rapid Plumbing Van" />
                            <div class="overlay">
                                <p class="fs-24 fw-700 lh-1 text-start">Plumbing Repair & Installations</p>
                                <a href="#" class="btn btn-primary text-white rounded-pill py-0_75 px-3 px-lg-5 fs-18 fw-700 ">ENQUIRE</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3">
                        <article class="helpCard">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/help-img2.jpg" alt="Rapid Plumbing Van" />
                            <div class="overlay">
                                <p class="title">Hot water system repair & replacement</p>
                                <a href="#" class="btn btn-primary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700">ENQUIRE</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3">
                        <article class="helpCard">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/help-img3.jpg" alt="Rapid Plumbing Van" />
                            <div class="overlay">
                                <p class="title">Gas Fitting Services</p>
                                <a href="#" class="btn btn-primary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700 ">ENQUIRE</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3">
                        <article class="helpCard">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/help-img4.jpg" alt="Rapid Plumbing Van" />
                            <div class="overlay">
                                <p class="title">Blocked Drain Repair & Water Jetting</p>
                                <a href="#" class="btn btn-primary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700 ">ENQUIRE</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="process">
            <div class="container">
                <h3 class="fs-70 fw-500 text-center lh-1">The <span class="text-primary">rapid</span> 3-step process</h3>
                <div class="row justify-content-center pt-8">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-xl-4">
                                <article class="processCard">
                                    <p class="number">01</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/give-call.png" alt="Rapid Plumbing Van" />
                                    <div>
                                        <p class="fs-20 fw-600 lh-1">Give Us A Call</p>
                                        <article class="fs-18 text-primary-light pt-3">Our friendly team is ready to help answer your questions</article>
                                    </div>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/arrow.png" class="arrow" alt="arrow" />
                                </article>
                            </div>
                            <div class="col-xl-4">
                                <article class="processCard">
                                    <p class="number">02</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/give-call.png" alt="Rapid Plumbing Van" />
                                    <div>
                                        <p class="fs-20 fw-600 lh-1">Sit Back & Relax</p>
                                        <article class="fs-18 text-primary-light pt-3">Our professuional tradesmen will arrive on time, ready to fix your plumbing issues</article>
                                    </div>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/arrow.png" class="arrow" alt="arrow" />
                                </article>
                            </div>
                            <div class="col-xl-4">
                                <article class="processCard">
                                    <p class="number">03</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/give-call.png" alt="Rapid Plumbing Van" />
                                    <div>
                                        <p class="fs-20 fw-600 lh-1">Complete Peace Of Mind</p>
                                        <article class="fs-18 text-primary-light pt-3">Knowing all your plumbing issues will be fixed professionally with a smile</article>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="process-bg process-bg1 position-absolute start-0 top-50 translate-middle-y mt-0 z-n1"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg1.png" alt="Rapid Plumbing Van" /></div>
            <div class="process-bg process-bg2 position-absolute end-0 top-50 translate-middle-y mt-0 z-n1"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg2.png" alt="Rapid Plumbing Van" /></div>
        </section>

        <section class="expect">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <h3 class="fs-70 fw-500 lh-1 mb-0">What to <span class="text-primary">expect</span> from us?</h3>
                    </div>
                    <div class="col-xl-7">
                        <article class="fs-18 description">
                            <p>Homeowners, as well as our industrial and commercial clients enjoy a full range of plumbing services.</p>
                            <p>From blocked drain repair to hot water heater replacement, there's no job too big or too small for us to handle.</p>
                        </article>
                    </div>
                </div>
            </div>
            <div class="expect-slider pt-7">
                <article class="box">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img1.jpg" alt="Rapid Plumbing Van" />
                    <p class="overlay">24 Hour Emergency Service</p>
                </article>
                <article class="box">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img2.jpg" alt="Rapid Plumbing Van" />
                    <p class="overlay">Septic Tank Services</p>
                </article>
                <article class="box">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img3.jpg" alt="Rapid Plumbing Van" />
                    <p class="overlay">Rain Water Tanks & Pumps</p>
                </article>
                <article class="box">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img4.jpg" alt="Rapid Plumbing Van" />
                    <p class="overlay">Sewer & Stormwater</p>
                </article>
                <article class="box">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img5.jpg" alt="Rapid Plumbing Van" />
                    <p class="overlay">Backflow Testing & Certification</p>
                </article>
                <article class="box">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img6.jpg" alt="Rapid Plumbing Van" />
                    <p class="overlay">Broken Pipe Repair</p>
                </article>
                <article class="box">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img7.jpg" alt="Rapid Plumbing Van" />
                    <p class="overlay">Bathroom Renovations</p>
                </article>
                <article class="box">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img8.jpg" alt="Rapid Plumbing Van" />
                    <p class="overlay">Water Jetting</p>
                </article>
            </div>
        </section>

        <section class="project">
            <div class="container">
                <div class="main">
                    <div class="row align-items-center gx-xl-8">
                        <div class="col-xl-6">
                            <article class="ps-1_75">
                                <h4 class="fs-48 lh-1 fw-500">Have a project in mind?</h4>
                                <p class="fs-18 pt-4 pb-6">We offer professional, onsite quotes for only $49 - which is credited to your job, if you go ahead with us! All plumbing quotes are no-obligation and hassle-free!</p>
                                <a href="#" class="btn btn-white text-primary rounded-pill px-lg-5 px-3 fs-18 fw-700 d-inline-flex">Enquire</a>
                            </article>
                        </div>
                        <div class="col-xl-6">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/project-in-mind.jpg" class="rounded-10 overflow-hidden" alt="Rapid Plumbing Van" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="customers pt-xl-9 pb-xl-6 py-md-5 py-3 position-relative z-1 overflow-hidden">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-4">
                        <p class="fs-64 lh-1 fw-500 mb-3_75"><span class="text-primary">See what our</span> customers <span class="text-primary">have to say</span></p>
                        <div class="row gx-1">
                            <div class="col-6">
                                <a href="#" class="btn btn-primary text-white rounded-pill d-block p-0_75 fs-18 fw-700">Leave A Review</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-primary text-white rounded-pill d-block p-0_75 fs-18 fw-700">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonials-slider d-inline-flex">
                            <article class="testimonial bg-blue p-1_75">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial-quote.png" class="mt-n6 text-start d-inline-block" alt="Rapid Plumbing Van" />
                                <article class="text-center pt-3">
                                    <div class="d-inline-block position-relative">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial1.png" alt="Rapid Plumbing Van" />

                                        <div class="position-absolute end-0 bottom-0 mb-n0_5 me-n0_5">
                                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/google.png" alt="Rapid Plumbing Van" />
                                        </div>
                                    </div>
                                    <p class="fs-24 fw-700 lh-1 mt-2_5">Lorraine C.</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stars.png" class="d-inline-block" alt="Rapid Plumbing Van" />
                                    <hr class="border-dark my-2">
                                </article>
                                <article class="text-darkblue fs-18">
                                    <p>”Our HWS decided to fail us on a Friday Evening when we were expecting house guests for the weekend. A phone call made to them on friday night (after hours) saw us with our old system replced by a new one in no time. Thanks Rapid Plumbing... you saved us from what could have been a disastrous weekend. I’ll spread the word to my friends.”</p>
                                </article>
                            </article>
                            <article class="testimonial bg-blue p-1_75">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial-quote.png" class="mt-n6 text-start d-inline-block" alt="Rapid Plumbing Van" />
                                <article class="text-center pt-3">
                                    <div class="d-inline-block position-relative">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial1.png" alt="Rapid Plumbing Van" />
                                        <div class="position-absolute end-0 bottom-0 mb-n0_5 me-n0_5">
                                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/google.png" alt="Rapid Plumbing Van" />
                                        </div>
                                    </div>
                                    <p class="fs-24 fw-700 lh-1 mt-2_5">Lorraine C.</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stars.png" class="d-inline-block" alt="Rapid Plumbing Van" />
                                    <hr class="border-dark my-2">
                                </article>
                                <article class="text-darkblue fs-18">
                                    <p>”Our HWS decided to fail us on a Friday Evening when we were expecting house guests for the weekend. A phone call made to them on friday night (after hours) saw us with our old system replced by a new one in no time. Thanks Rapid Plumbing... you saved us from what could have been a disastrous weekend. I’ll spread the word to my friends.”</p>
                                </article>
                            </article>
                            <article class="testimonial bg-blue p-1_75">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial-quote.png" class="mt-n6 text-start d-inline-block" alt="Rapid Plumbing Van" />

                                <article class="text-center pt-3">
                                    <div class="d-inline-block position-relative">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial1.png" alt="Rapid Plumbing Van" />
                                        <div class="position-absolute end-0 bottom-0 mb-n0_5 me-n0_5">
                                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/google.png" alt="Rapid Plumbing Van" />
                                        </div>
                                    </div>
                                    <p class="fs-24 fw-700 lh-1 mt-2_5">Lorraine C.</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stars.png" class="d-inline-block" alt="Rapid Plumbing Van" />
                                    <hr class="border-dark my-2">
                                </article>
                                <article class="text-darkblue fs-18">
                                    <p>”Our HWS decided to fail us on a Friday Evening when we were expecting house guests for the weekend. A phone call made to them on friday night (after hours) saw us with our old system replced by a new one in no time. Thanks Rapid Plumbing... you saved us from what could have been a disastrous weekend. I’ll spread the word to my friends.”</p>
                                </article>
                            </article>
                            <article class="testimonial bg-blue p-1_75">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial-quote.png" class="mt-n6 text-start d-inline-block" alt="Rapid Plumbing Van" />
                                <article class="text-center pt-3">
                                    <div class="d-inline-block position-relative">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial1.png" alt="Rapid Plumbing Van" />
                                        <div class="position-absolute end-0 bottom-0 mb-n0_5 me-n0_5">
                                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/google.png" alt="Rapid Plumbing Van" />
                                        </div>
                                    </div>
                                    <p class="fs-24 fw-700 lh-1 mt-2_5">Lorraine C.</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stars.png" class="d-inline-block" alt="Rapid Plumbing Van" />

                                    <hr class="border-dark my-2">
                                </article>
                                <article class="text-darkblue fs-18">
                                    <p>”Our HWS decided to fail us on a Friday Evening when we were expecting house guests for the weekend. A phone call made to them on friday night (after hours) saw us with our old system replced by a new one in no time. Thanks Rapid Plumbing... you saved us from what could have been a disastrous weekend. I’ll spread the word to my friends.”</p>
                                </article>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="customers custom-bg-gradient text-white pt-xl-9 pb-xl-6 py-md-5 py-3 position-relative z-1 overflow-hidden">
            <div class="container">
                <div class="row gx-4 align-items-center">
                    <div class="col-auto">
                        <p class="fs-64 lh-1 fw-500 mb-0"><span class="text-primary">Why</span> hire us?</p>
                    </div>
                    <div class="col">
                        <div class="fs-18">
                            <p>When deciding on a plumber for all of your residential and commercial plumbing needs, you want to be sure the company you choose not only has the right qualifications, but also has your best interests at heart. Our team of professionals provides honest, high quality workmanship at a price you can agree on.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-3">
                        <div class="p-2 bg-darkblue h-100">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/family-owned.png" alt="Rapid Plumbing Van" />
                            <p class="fs-24 fw-700 lh-1 mt-1_5 mb-1_75">Family Owned and Operated</p>
                            <div>
                                <p>As a family owned and operated company, integrity is part of our core values. We only provide honest recommendations and will never push a service or product on you that you do not need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="p-2 bg-darkblue h-100">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/free-quote.png" alt="Rapid Plumbing Van" />
                            <p class="fs-24 fw-700 lh-1 mt-1_5 mb-1_75">Free <br>Quotes</p>
                            <div>
                                <p>Before we start any work, we always provide a quote free of charge so you always know what to expect. Our pricing is upfront and we charge by the job so you will never be faced with any unwanted surprises at the end of your service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="p-2 bg-darkblue h-100">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trained-technicians.png" alt="Rapid Plumbing Van" />
                            <p class="fs-24 fw-700 lh-1 mt-1_5 mb-1_75">Expertly Trained Technicians</p>
                            <div>
                                <p>We are proud to be leaders in our industry. All of our technicians are trained in the latest methods and equipment to ensure you enjoy the safest, most efficient installations and repairs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="p-2 bg-green h-100">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/brighte.png" alt="Rapid Plumbing Van" />
                            <p class="fs-24 fw-700 lh-1 mt-1_5 mb-1_75">Fix Now, <br>Pay Later</p>
                            <div>
                                <p>We at Rapid Plumbing Group understand you may not always be able to afford important plumbing services. Pay in installments with Brighte and get what you need exactly when you need it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="pricematching custom-bg-gradient text-white pt-xl-9 pt-md-5 pt-3 position-relative z-1 overflow-hidden">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/rapid-price-matching.png" alt="Rapid Plumbing Van" />
            </div>
            <div class="col-xl-6">
                <div class="pe-xl-15">
                    <p class="fs-64 lh-1 fw-500 mb-1_75">Rapid <span class="text-primary">Price Matching</span></p>
                    <div class="fs-18 mb-3_75">
                        <p><strong>Is your Plumber giving you the best deal? Let us be your FREE second opinion</strong></p>
                        <p>Experiencing a drainage, sewer or plumbing problem? Have you received an outrageous quote from another company? We offer FREE second opinions and will do our best to BEAT ANY competitors price!*</p>
                    </div>
                    <div class="row gx-1">
                        <div class="col-auto">
                            <a href="#" class="btn btn-white text-primary rounded-pill d-block py-0_75 px-2 fs-18 fw-700">Get Started</a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-outline-white rounded-pill d-block py-0_75 px-2 fs-18 fw-700">Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery bg-dark py-2">
        <div class="gallery-slider">
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img1.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img2.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img3.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img4.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img5.jpg" alt="Rapid Plumbing Van" /></div>
            <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img6.jpg" alt="Rapid Plumbing Van" /></div>
        </div>
    </section>
</main>

<?php
require 'inc/footer.php';
?>