<?php
$CareersPageArr = array();
$page_content = careers_content::get_data($CareersPageArr);

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

<main class="careersPage">
    <div class="container">
        <h2 class="fs-64 fw-800 text-center"><?= _isset($page_content, 'introduction_title') ?></h2>
        <p class="fs-18 fw-300 text-center py-3 col-lg-9 mx-auto"><?= _isset($page_content, 'introduction_description') ?></p>
        <div class="text-center pt-4">
            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/career-pipeline.png" alt="Rapid Plumbing Van" />
        </div>

        <div class="careerForm mt-6 mt-lg-9">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6">
                    <h3 class="fs-55 fw-700 lh-1"><?= _isset($page_content, 'form_title') ?></h3>

                    <p class="py-4 fw-300"><?= _isset($page_content, 'form_description') ?></p>

                    <h4 class="fs-30 fw-800">Job benefits</h4>

                    <article class="pt-4 description">
                        <?= _isset($page_content, 'job_benefits') ?>
                    </article>
                </div>

                <div class="col-lg-6">
                    <form id="careers_form" class="needs-validation" method="POST" novalidate enctype="multipart/form-data">
                        <input type="hidden" name="recaptcha_response" class="g-recaptcha-response" value=<?= V_RECAPTCHA_CLIENT_SECRET ?>>
                        <input type="hidden" name="request" value="careers_form">

                        <div class="row gy-4 gy-md-5">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="firstName">Full Name</label>
                                    <input type="text" name="fullName" id="fullName" class="form-control required" placeholder="E.g. John" />
                                    <span class="text-danger fs-12 error">Error</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="phoneNumber">Phone</label>
                                    <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control required" placeholder="E.g. 0400 000 000" />
                                    <span class="text-danger fs-12 error">Error</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="emailAddress">Email</label>
                                    <input type="email" name="emailAddress" id="emailAddress" class="form-control required" placeholder="E.g. johnsmith@gmail.com" />
                                    <span class="text-danger fs-12 error">Error</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="address">Your Address</label>
                                    <input type="text" name="address" id="address" class="form-control required" placeholder="123 Street Name, Some State, 2571" />
                                    <span class="text-danger fs-12 error">Error</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group d-flex align-items-center gap-4 gap-xl-5">
                                    <label class="form-label m-0" for="employedDesired">Employed Desired</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="employedDesired" id="employment1" value="Full Time" checked>
                                            <label class="form-check-label" for="employment1">
                                                Full Time
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="employedDesired" id="employment2" value="Part Time">
                                            <label class="form-check-label" for="employment2">
                                                Part Time
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group upload">
                                    <label for="fileUpload" class="my-0 w-100 text-white text-center gap-3 d-flex justify-content-center fw-300">
                                        <svg width="31" height="29" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.6172 23.853H2.61719C1.95415 23.853 1.31826 24.0989 0.849421 24.5364C0.38058 24.974 0.117188 25.5675 0.117188 26.1864C0.117188 26.8052 0.38058 27.3987 0.849421 27.8363C1.31826 28.2739 1.95415 28.5197 2.61719 28.5197H27.6172C28.2802 28.5197 28.9161 28.2739 29.385 27.8363C29.8538 27.3987 30.1172 26.8052 30.1172 26.1864C30.1172 25.5675 29.8538 24.974 29.385 24.5364C28.9161 24.0989 28.2802 23.853 27.6172 23.853Z" fill="white" />
                                            <path d="M13.8659 19.1864H16.3659C16.6974 19.1864 17.0154 19.0635 17.2498 18.8447C17.4842 18.6259 17.6159 18.3292 17.6159 18.0197V12.1864H23.8659C24.1059 12.1862 24.3407 12.1215 24.5423 12.0001C24.744 11.8786 24.9039 11.7056 25.003 11.5016C25.1021 11.2977 25.1363 11.0714 25.1013 10.8498C25.0664 10.6282 24.9638 10.4207 24.8059 10.2521L16.0559 0.918745C15.9353 0.798953 15.7897 0.703487 15.628 0.63823C15.4663 0.572973 15.2921 0.539307 15.1159 0.539307C14.9398 0.539307 14.7655 0.572973 14.6038 0.63823C14.4422 0.703487 14.2965 0.798953 14.1759 0.918745L5.42592 10.2521C5.26802 10.4207 5.16547 10.6282 5.13052 10.8498C5.09557 11.0714 5.12969 11.2977 5.22881 11.5016C5.32793 11.7056 5.48786 11.8786 5.68949 12.0001C5.89113 12.1215 6.12595 12.1862 6.36592 12.1864H12.6159V18.0197C12.6159 18.3292 12.7476 18.6259 12.982 18.8447C13.2165 19.0635 13.5344 19.1864 13.8659 19.1864Z" fill="white" />
                                        </svg>

                                        <span id="file-label">Attach supporting files</span>
                                    </label>
                                    <input id="fileUpload" class="form-control rounded-0" type="file" name="uploadedFile">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="submit_btn btn btn-white rounded-pill fs-18 fw-700 text-primary w-100 px-5 px-lg-6">Apply</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'inc/footer.php'; ?>