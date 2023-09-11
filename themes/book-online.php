<?php
$BookOnlinePageArr = array();
$BookOnlinePageArr = book_online_content::get_data($BookOnlinePageArr);
if (count($BookOnlinePageArr)) {
    $BookOnlinePageArr = $BookOnlinePageArr[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $BookOnlinePageArr['meta_title'];
$meta_description     = $BookOnlinePageArr['meta_description'];
$meta_keyword         = $BookOnlinePageArr['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $BookOnlinePageArr['banner_video_image'];
// $banner_details['mobile_background_image'] = $BookOnlinePageArr['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $BookOnlinePageArr['banner_title_heading_tag'];
$banner_details['banner_title'] = $BookOnlinePageArr['banner_title'];
$banner_details['banner_subtitle'] = $BookOnlinePageArr['banner_subtitle'];
$banner_details['banner_button_1_text'] = $BookOnlinePageArr['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $BookOnlinePageArr['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $BookOnlinePageArr['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $BookOnlinePageArr['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="bookOnlinePage">
    <div class="container">
        <h2 class="text-center fs-64 text-capitalize fw-500">Book With Us Today</h2>
        <p class="text-center lh-1_5 fs-18 fw-300 pt-4">Finding a reliable plumber in Penrith, NSW shouldn't be a hassle. Rapid Plumbing Group Pty Ltd makes it easy</p>

        <form id="booking_form" class="needs-validation pt-8" method="POST" novalidate>
            <input type="hidden" name="recaptcha_response" class="g-recaptcha-response" value="6Lc_0cQiAAAAAPy9Shlbf3Sru6VxUYAvqeIWN_hD">
            <input type="hidden" name="request" value="booking_form_request">
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
                <div class="col-12">
                    <button type="submit" class="submit_btn btn btn-primary rounded-pill fs-18 fw-700 text-white px-5 px-lg-6 w-100">Book Today</button>
                </div>
            </div>
        </form>

        <section class="gallery pt-5 pt-lg-8">
            <div class="gallery-slider">
                <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img1.jpg" alt="Rapid Plumbing Van" /></div>
                <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img2.jpg" alt="Rapid Plumbing Van" /></div>
                <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img3.jpg" alt="Rapid Plumbing Van" /></div>
                <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img4.jpg" alt="Rapid Plumbing Van" /></div>
                <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img5.jpg" alt="Rapid Plumbing Van" /></div>
                <div class="item"><img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/gallery-img6.jpg" alt="Rapid Plumbing Van" /></div>
            </div>
        </section>
    </div>
</main>

<?php require 'inc/footer.php'; ?>