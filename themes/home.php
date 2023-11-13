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

    <?php require 'inc/contactForm.php'; ?>

    <div class="py-5 py-lg-9">
        <?php require 'inc/globalCta.php'; ?>
    </div>

    <section class="trusted position-relative z-1">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="trusted-main-slider">
                    <div>
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-img1.jpg" alt="Rapid Plumbing Van" />
                    </div>
                    <div>
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-img2.jpg" alt="Rapid Plumbing Van" />
                    </div>
                    <div>
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-img1.jpg" alt="Rapid Plumbing Van" />
                    </div>
                    <div>
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-img2.jpg" alt="Rapid Plumbing Van" />
                    </div>
                    <div>
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-img1.jpg" alt="Rapid Plumbing Van" />
                    </div>
                    <div>
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-img2.jpg" alt="Rapid Plumbing Van" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <article class="px-3 py-6 p-md-7 pe-md-10 d-flex flex-column gap-1_5">
                    <p class="fs-70 fw-500 lh-1">Your <span class="text-primary">Trusted</span> <br>Penrith <span class="text-primary">Plumber.</span></p>

                    <p class="fs-20 py-4 col-xl-9 description">We pride ourselves on our reputation for fast, friendly service, and all of our staff is fully trained to uphold our high standards in everything they do.</p>
                    <div class="trusted-thumbnail-slider pt-md-4">
                        <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-thumbnail1.jpg" alt="Rapid Plumbing Van" /></div>
                        <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-thumbnail2.jpg" alt="Rapid Plumbing Van" /></div>
                        <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-thumbnail3.jpg" alt="Rapid Plumbing Van" /></div>
                        <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-thumbnail4.jpg" alt="Rapid Plumbing Van" /></div>
                        <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-thumbnail5.jpg" alt="Rapid Plumbing Van" /></div>
                        <div><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-thumbnail6.jpg" alt="Rapid Plumbing Van" /></div>
                    </div>
                </article>
            </div>
        </div>
        <div class="trusted-bg position-absolute bottom-0 end-0 mt-12 z-n1">
            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trusted-bg.png" alt="Rapid Plumbing Van" />
        </div>
    </section>

    <section class="blue-gradient overflow-hidden">
        <section class="welcome position-relative">
            <div class="container position-relative">
                <h3 class="fs-64 fw-500 text-md-center lh-1 highlight-primary"><span>Welcome</span> to Rapid Plumbing Group</h3>

                <p class="fs-20 text-md-center pt-4 pt-md-5">Your commercial preventative & reactive maintenance specialists</p>

                <div class="text-center py-6 d-none d-md-block">
                    <a href="#" class="btn btn-primary d-inline-flex text-white rounded-pill py-1 px-4 fs-18 fw-700">More About Us</a>
                </div>

                <div class="row justify-content-center pt-5 pt-md-0">
                    <div class="col-xl-9">
                        <div class="row gx-3" id="awards-slider">
                            <div class="col-6 col-md">
                                <article class="awardCard mt-md-7">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-awards.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2018</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col-6 col-md">
                                <article class="awardCard mt-md-5">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-awards.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2019</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col-6 col-md">
                                <article class="awardCard mt-md-9">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-awards.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2020</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col-6 col-md">
                                <article class="awardCard">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-business-awards.png" alt="Rapid Plumbing Van" />
                                    <hr class="w-25 mx-auto border-2">
                                    <p class="fs-18 fw-600 lh-1">2021</p>
                                    <p class="fs-12 py-1">Local Business Awards</p>
                                    <p class="fs-14 fw-600">Finalists</p>
                                </article>
                            </div>
                            <div class="col-6 col-md">
                                <article class="awardCard mt-md-7">
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

                <div class="text-center pt-5 d-md-none">
                    <a href="#" class="btn btn-primary d-inline-flex text-white rounded-pill py-1 px-4 fs-18 fw-700">More About Us</a>
                </div>
            </div>

            <div class="welcome-bg welcome-bg1 position-absolute start-0 top-50 translate-middle-y mt-5 z-n1"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg1.png" alt="Rapid Plumbing Van" /></div>
            <div class="welcome-bg welcome-bg2 position-absolute end-0 top-50 translate-middle-y mt-5 z-n1"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/welcome-bg2.png" alt="Rapid Plumbing Van" /></div>
            <div class="circle-gradient circle-gradient-1"></div>
        </section>

        <section class="help">
            <div class="container position-relative z-1">
                <h3 class="fs-64 fw-500 text-md-center lh-1">How can we <span class="text-primary">help</span> you?</h3>
                <div class="row pt-5 pt-md-8 gy-3">
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
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/help-img1.jpg" alt="Rapid Plumbing Van" />
                            <div class="overlay">
                                <p class="title">Hot water system repair & replacement</p>
                                <a href="#" class="btn btn-primary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700">ENQUIRE</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3">
                        <article class="helpCard">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/help-img1.jpg" alt="Rapid Plumbing Van" />
                            <div class="overlay">
                                <p class="title">Gas Fitting Services</p>
                                <a href="#" class="btn btn-primary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700 ">ENQUIRE</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3">
                        <article class="helpCard">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/help-img1.jpg" alt="Rapid Plumbing Van" />
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
            <div class="container position-relative z-1">
                <h3 class="fs-70 fw-500 text-md-center lh-1 highlight-primary">The <span>rapid</span> 3-step process</h3>
                <div class="row justify-content-center pt-5 pt-md-8">
                    <div class="col-xl-9">
                        <div class="row gy-4">
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

        <section class="expect position-relative">
            <div class="container position-relative z-1">
                <div class="row align-items-center gy-4">
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
            <div class="expect-slider pt-5 pt-md-7 position-relative z-1">
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
            <div class="circle-gradient circle-gradient-2"></div>
        </section>

        <section class="project">
            <div class="container">
                <div class="main">
                    <div class="row align-items-center gx-xl-8">
                        <div class="col-xl-6">
                            <article class="ps-md-1_75">
                                <h4 class="fs-48 lh-1 fw-500 text-center text-md-start">Have a project in mind?</h4>

                                <p class="fs-18 pt-4 pb-4 pb-md-6 text-center text-md-start description">We offer professional, onsite quotes for only $49 - which is credited to your job, if you go ahead with us! All plumbing quotes are no-obligation and hassle-free!</p>

                                <div class="d-flex justify-content-center justify-content-md-start">
                                    <a href="#" class="btn btn-white text-primary rounded-pill px-lg-5 px-5 px-md-3 fs-18 fw-700 d-inline-flex">Enquire</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-auto col-xl-6 d-none d-md-block">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/project-in-mind.jpg" class="rounded-10 overflow-hidden" alt="Rapid Plumbing Van" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="customers">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-5">
                    <div class="col-xl-4">
                        <p class="fs-64 lh-1 fw-500"><span class="text-primary">See what our</span> customers <span class="text-primary">have to say</span></p>
                        <div class="row pt-6 d-none d-md-flex">
                            <div class="col-6">
                                <a href="#" class="btn btn-primary text-white rounded-pill fs-18 fw-700">Leave A Review</a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn border-white border-2 text-white rounded-pill fs-18 fw-700">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="testimonials-slider d-inline-flex">
                            <div class="testimonial">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial-quote.png" class="quote" alt="Rapid Plumbing Van" />
                                <article class="text-center">
                                    <div class="d-inline-block position-relative">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial1.png" alt="Rapid Plumbing Van" />

                                        <div class="position-absolute end-0 bottom-0 mb-n0_5 me-n0_5">
                                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/google.png" alt="Rapid Plumbing Van" />
                                        </div>
                                    </div>
                                    <p class="fs-24 fw-700 lh-1 mt-2_5 mb-3">Lorraine C.</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stars.png" class="d-inline-block" alt="Rapid Plumbing Van" />
                                    <hr class="border-dark">
                                    <p class="text-primary-light fs-18 text-start">”Our HWS decided to fail us on a Friday Evening when we were expecting house guests for the weekend. A phone call made to them on friday night (after hours) saw us with our old system replced by a new one in no time. Thanks Rapid Plumbing... you saved us from what could have been a disastrous weekend. I’ll spread the word to my friends.”</p>
                                </article>
                            </div>

                            <div class="testimonial">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial-quote.png" class="quote" alt="Rapid Plumbing Van" />
                                <article class="text-center">
                                    <div class="d-inline-block position-relative">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial2.png" alt="Rapid Plumbing Van" />

                                        <div class="position-absolute end-0 bottom-0 mb-n0_5 me-n0_5">
                                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/facebook.png" alt="Rapid Plumbing Van" />
                                        </div>
                                    </div>
                                    <p class="fs-24 fw-700 lh-1 mt-2_5 mb-3">Lorraine C.</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stars.png" class="d-inline-block" alt="Rapid Plumbing Van" />
                                    <hr class="border-dark">
                                    <p class="text-primary-light fs-18 text-start">”Our HWS decided to fail us on a Friday Evening when we were expecting house guests for the weekend. A phone call made to them on friday night (after hours) saw us with our old system replced by a new one in no time. Thanks Rapid Plumbing... you saved us from what could have been a disastrous weekend. I’ll spread the word to my friends.”</p>
                                </article>
                            </div>

                            <div class="testimonial">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial-quote.png" class="quote" alt="Rapid Plumbing Van" />
                                <article class="text-center">
                                    <div class="d-inline-block position-relative">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial3.png" alt="Rapid Plumbing Van" />

                                        <div class="position-absolute end-0 bottom-0 mb-n0_5 me-n0_5">
                                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/somebox.png" alt="Rapid Plumbing Van" />
                                        </div>
                                    </div>
                                    <p class="fs-24 fw-700 lh-1 mt-2_5 mb-3">Lorraine C.</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stars.png" class="d-inline-block" alt="Rapid Plumbing Van" />
                                    <hr class="border-dark">
                                    <p class="text-primary-light fs-18 text-start">”Our HWS decided to fail us on a Friday Evening when we were expecting house guests for the weekend. A phone call made to them on friday night (after hours) saw us with our old system replced by a new one in no time. Thanks Rapid Plumbing... you saved us from what could have been a disastrous weekend. I’ll spread the word to my friends.”</p>
                                </article>
                            </div>

                            <div class="testimonial">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial-quote.png" class="quote" alt="Rapid Plumbing Van" />
                                <article class="text-center">
                                    <div class="d-inline-block position-relative">
                                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/testimonial3.png" alt="Rapid Plumbing Van" />

                                        <div class="position-absolute end-0 bottom-0 mb-n0_5 me-n0_5">
                                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/google.png" alt="Rapid Plumbing Van" />
                                        </div>
                                    </div>
                                    <p class="fs-24 fw-700 lh-1 mt-2_5 mb-3">Lorraine C.</p>
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/stars.png" class="d-inline-block" alt="Rapid Plumbing Van" />
                                    <hr class="border-dark">
                                    <p class="text-primary-light fs-18 text-start">”Our HWS decided to fail us on a Friday Evening when we were expecting house guests for the weekend. A phone call made to them on friday night (after hours) saw us with our old system replced by a new one in no time. Thanks Rapid Plumbing... you saved us from what could have been a disastrous weekend. I’ll spread the word to my friends.”</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-6 d-md-none">
                    <div class="col-6">
                        <a href="#" class="btn btn-primary text-white rounded-pill fs-18 fw-700">Leave A Review</a>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn border-white border-2 text-white rounded-pill fs-18 fw-700">Read More</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="whyUs position-relative">
            <div class="container position-relative z-1">
                <div class="row gx-lg-5 align-items-center gy-4">
                    <div class="col-md-auto">
                        <h3 class="fs-64 lh-1 fw-500 mb-0"><span class="text-primary">Why</span> hire us?</h3>
                    </div>
                    <div class="col-md">
                        <p class="fs-18">When deciding on a plumber for all of your residential and commercial plumbing needs, you want to be sure the company you choose not only has the right qualifications, but also has your best interests at heart. Our team of professionals provides honest, high quality workmanship at a price you can agree on.</p>
                    </div>
                </div>
                <div class="row mt-5 gy-3">
                    <div class="col-xl-3">
                        <article class="whyusCard">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/family-owned.png" alt="Rapid Plumbing Van" />
                            <p class="fs-24 fw-700 lh-1 py-4">Family Owned and Operated</p>
                            <p class="text-primary-light">As a family owned and operated company, integrity is part of our core values. We only provide honest recommendations and will never push a service or product on you that you do not need.</p>
                        </article>
                    </div>
                    <div class="col-xl-3">
                        <div class="whyusCard">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/free-quote.png" alt="Rapid Plumbing Van" />
                            <p class="fs-24 fw-700 lh-1 py-4">Free <br>Quotes</p>
                            <p class="text-primary-light">Before we start any work, we always provide a quote free of charge so you always know what to expect. Our pricing is upfront and we charge by the job so you will never be faced with any unwanted surprises at the end of your service.</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="whyusCard">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/trained-technicians.png" alt="Rapid Plumbing Van" />
                            <p class="fs-24 fw-700 lh-1 py-4">Expertly Trained Technicians</p>
                            <p class="text-primary-light">We are proud to be leaders in our industry. All of our technicians are trained in the latest methods and equipment to ensure you enjoy the safest, most efficient installations and repairs.</p>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="whyusCard bg-brighte-green">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/brighte.png" alt="Rapid Plumbing Van" />
                            <p class="fs-24 fw-700 lh-1 py-4">Fix Now, <br>Pay Later</p>
                            <p class="text-white">We at Rapid Plumbing Group understand you may not always be able to afford important plumbing services. Pay in installments with Brighte and get what you need exactly when you need it.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="circle-gradient circle-gradient-3"></div>
        </section>

        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/background/homepage-dots.svg" class="position-relative" alt="Rapid Plumbing Van" />
    </section>

    <section class="pricematching position-relative z-1 overflow-hidden">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/rapid-price-matching.png" alt="Rapid Plumbing Van" />
            </div>
            <div class="col-xl-6">
                <div class="pe-xl-15">
                    <h3 class="fs-64 lh-1 fw-500">Rapid <span class="text-primary">Price Matching</span></h3>
                    <article class="fs-18 description py-5">
                        <p><strong>Is your Plumber giving you the best deal? Let us be your FREE second opinion</strong></p>
                        <p>Experiencing a drainage, sewer or plumbing problem? Have you received an outrageous quote from another company? We offer FREE second opinions and will do our best to BEAT ANY competitors price!*</p>
                    </article>
                    <div class="row">
                        <div class="col-auto">
                            <a href="#" class="btn btn-white text-primary rounded-pill px-3 px-lg-5 fs-18 fw-700">Get Started</a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-outline-white rounded-pill px-3 px-lg-5 fs-18 border-2 fw-700">Conditions</a>
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