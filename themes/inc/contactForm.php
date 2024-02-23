<?php

$global_cta = array();
$global_cta = global_cta::get_data($global_cta);

if (count($global_cta)) {
    $global_cta = $global_cta[0];
}

?>

<section class="contactForm">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-xl-6 d-flex flex-column align-items-center">
                <div class="title">
                    <article>
                        <p class="text-1">Enquire</p>
                        <p class="text-2">with us</p>
                        <p class="text-3">Today</p>
                    </article>
                </div>
                <a href="tel:<?php echo preg_replace('/[^\d]/i', '', _isset($contact_info, 'phone_number')); ?>" class="btn btn-primary text-white fs-27 text-italic fw-700 gap-2 mt-5">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/buzzing-phone.gif" width=38 height=38 alt="" />
                    <?= _isset($contact_info, 'phone_number'); ?>
                </a>
            </div>
            <div class="col-xl-6">
                <form id="contact_us_form" class="needs-validation" method="POST" novalidate>
                    <input type="hidden" name="recaptcha_response" class="g-recaptcha-response" value=<?= V_RECAPTCHA_CLIENT_SECRET ?>>
                    <input type="hidden" name="request" value="contact_us_form">

                    <div class="row gy-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="firstName">First Name</label>
                                <input type="text" name="firstName" id="firstName" class="form-control required" placeholder="E.g. John" />
                                <span class="text-danger fs-12 error">Error</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input type="text" name="lastName" id="lastName" class="form-control required" placeholder="E.g. Smith" />
                                <span class="text-danger fs-12 error">Error</span>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="emailAddress">Email</label>
                                <input type="email" name="emailAddress" id="emailAddress" class="form-control required" placeholder="E.g. johnsmith@gmail.com" />
                                <span class="text-danger fs-12 error">Error</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="phoneNumber">Number</label>
                                <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control required" placeholder="E.g. 0400 000 000" />
                                <span class="text-danger fs-12 error">Error</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="suburb">Suburb</label>
                                <input type="text" name="suburb" id="suburb" class="form-control required" placeholder="E.g. Parramatta" />
                                <span class="text-danger fs-12 error">Error</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="postcode">Postcode</label>
                                <input type="text" name="postcode" id="postcode" class="form-control required" placeholder="E.g. 2000" />
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
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="service" id="service9" value="Others">
                                            <label class="form-check-label" for="service9">
                                                Others
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

<section class="globalCta py-5 py-lg-9">
    <div class="container">
        <div class="row gy-4">
            <?php if (!empty($global_cta['cta_1_title'])) : ?>
                <div class="col-lg-6">
                    <article class="ctaWrapper">
                        <?= _imgSrc($global_cta, 'cta_1_image', 'heroImage h-100 w-100') ?>

                        <article class="content">
                            <div class="seemorebtn btn btn-white d-inline-flex rounded-pill text-grey fw-700 gap-2">
                                <span class="text">See more</span>
                                <svg class="arrow-icon" width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.605 12.0098L10.2358 3.64062L1.8667 12.0098" stroke="#00AEEF" stroke-width="4" />
                                </svg>
                            </div>
                            <article>
                                <p class="fs-20 fw-700 text-capitalize"><?= _isset($global_cta, 'cta_1_title') ?></p>

                                <article class="text-light fs-18 py-3 description"><?= _isset($global_cta, 'cta_1_content') ?></article>

                                <a href="<?= _issetUrl($global_cta, 'cta_1_button_link') ?>" class="btn btn-primary rounded-0 fs-18 fw-700 text-white mt-4">Learn More</a>
                            </article>
                        </article>
                    </article>
                </div>
            <?php endif; ?>

            <div class="col-lg-6 h-inherit">
                <div class="row h-inherit align-items-between gy-2_5">
                    <div class="col-12">
                        <article class="ctaWrapper">
                            <?= _imgSrc($global_cta, 'cta_2_image', 'heroImage h-100 w-100'); ?>

                            <article class="content">
                                <div class="seemorebtn btn btn-white d-inline-flex rounded-pill text-grey fw-700 gap-2"><span class="text">See more</span> <svg class="arrow-icon" width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.605 12.0098L10.2358 3.64062L1.8667 12.0098" stroke="#00AEEF" stroke-width="4" />
                                    </svg>
                                </div>
                                <article>
                                    <p class="fs-20 fw-700 text-capitalize"><?= _isset($global_cta, 'cta_2_title') ?></p>

                                    <article class="text-light fs-18 py-3 description"><?= _isset($global_cta, 'cta_2_content') ?></article>

                                    <a href="<?= _issetUrl($global_cta, 'cta_2_button_link') ?>" class="btn btn-primary rounded-0 fs-18 fw-700 text-white mt-4">Learn More</a>
                                </article>
                            </article>
                        </article>
                    </div>
                    <div class="col-12">
                        <article class="ctaWrapper">
                            <?= _imgSrc($global_cta, 'cta_3_image', 'heroImage h-100 w-100'); ?>

                            <article class="content">
                                <a href="#" class="seemorebtn btn btn-white d-inline-flex rounded-pill text-grey fw-700 gap-2"><span class="text">See more</span> <svg class="arrow-icon" width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.605 12.0098L10.2358 3.64062L1.8667 12.0098" stroke="#00AEEF" stroke-width="4" />
                                    </svg>
                                </a>
                                <article>
                                    <p class="fs-20 fw-700 text-capitalize"><?= _isset($global_cta, 'cta_3_title') ?></p>

                                    <article class="text-light fs-18 py-3 description"><?= _isset($global_cta, 'cta_3_content') ?></article>
                                    
                                    <a href="<?= _issetUrl($global_cta, 'service_3_button_link') ?>" class="btn btn-primary rounded-0 fs-18 fw-700 text-white mt-4">Learn More</a>
                                </article>
                            </article>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>