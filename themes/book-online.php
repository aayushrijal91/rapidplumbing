<?php
$BookOnlinePageArr = array();
$page_content = book_online_content::get_data($BookOnlinePageArr);
if (count($page_content)) {
    $page_content = $page_content[0];
}

$gallery = array('orderBy' => 'dragSortOrder ASC');
$gallery = global_gallery::get_data($gallery);

/*  Meta data */
$meta_title         = $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $page_content['banner_video_image'];
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

<main class="bookOnlinePage">
    <div class="container">
        <h2 class="text-center fs-64 text-capitalize fw-500">Book With Us Today</h2>
        <p class="text-center lh-1_5 fs-18 fw-300 pt-4">Finding a reliable plumber in Penrith, NSW shouldn't be a hassle. Rapid Plumbing Group Pty Ltd makes it easy</p>

        <form id="contact_us_form" class="needs-validation pt-8" method="POST" novalidate>
            <input type="hidden" name="recaptcha_response" class="g-recaptcha-response" value=<?= V_RECAPTCHA_CLIENT_SECRET ?>>
            <input type="hidden" name="request" value="contact_us_form">

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
                        <label class="form-label">What can we help you with?</label>
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
                <?php foreach ($gallery as $val) : ?>
                    <div class="item">
                        <?= _imgSrc($val, 'image') ?>
                        <?php if (isset($val['slug'])) : ?>
                            <a href="<?= _isset($val, 'slug') ?>" class="btn btn-white linkBtn rounded-pill fw-800 px-4"><span class="pe-2"> See More</span> <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4062 8.99622L8.10324 2.69321L1.80023 8.99621" stroke="#00AEEF" stroke-width="3.0125" />
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>

<?php require 'inc/footer.php'; ?>