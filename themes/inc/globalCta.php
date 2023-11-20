<section class="globalCta">
    <div class="container">
        <div class="row gy-4">
            <?php if (!empty($page_content['service_1_title'])) : ?>
                <div class="col-lg-6">
                    <article class="ctaWrapper">
                        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/24-hr-service-cta.jpg" class="heroImage" alt="24 hour emergency service" />

                        <article class="content">
                            <div class="seemorebtn btn btn-white d-inline-flex rounded-pill text-grey fw-700 gap-2">
                                <span class="text">See more</span>
                                <svg class="arrow-icon" width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.605 12.0098L10.2358 3.64062L1.8667 12.0098" stroke="#00AEEF" stroke-width="4" />
                                </svg>
                            </div>
                            <article>
                                <p class="fs-20 fw-700 text-capitalize"><?= _isset($page_content, 'service_1_title') ?></p>

                                <article class="text-light fs-18 py-3 description"><?= _isset($page_content, 'service_1_content') ?></article>

                                <a href="<?= _issetUrl($page_content, 'service_1_button_link') ?>" class="btn btn-primary rounded-0 fs-18 fw-700 text-white mt-4">Learn More</a>
                            </article>
                        </article>
                    </article>
                </div>
            <?php endif; ?>

            <div class="col-lg-6 h-inherit">
                <div class="row h-inherit align-items-between gy-2_5">
                    <div class="col-12">
                        <article class="ctaWrapper">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/local-expert-cta.jpg" alt="24 hour emergency service" />
                            <!-- <?= _imgSrc($page_content, 'service_2_image', 'heroImage'); ?> -->

                            <article class="content">
                                <div class="seemorebtn btn btn-white d-inline-flex rounded-pill text-grey fw-700 gap-2"><span class="text">See more</span> <svg class="arrow-icon" width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.605 12.0098L10.2358 3.64062L1.8667 12.0098" stroke="#00AEEF" stroke-width="4" />
                                    </svg>
                                </div>
                                <article>
                                    <p class="fs-20 fw-700 text-capitalize"><?= _isset($page_content, 'service_2_title') ?></p>

                                    <article class="text-light fs-18 py-3 description"><?= _isset($page_content, 'service_2_content') ?></article>

                                    <a href="<?= _issetUrl($page_content, 'service_2_button_link') ?>" class="btn btn-primary rounded-0 fs-18 fw-700 text-white mt-4">Learn More</a>
                                </article>
                            </article>
                        </article>
                    </div>
                    <div class="col-12">
                        <article class="ctaWrapper">
                            <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/licensed-insured-cta.jpg" alt="24 hour emergency service" />
                            <!-- <?= _imgSrc($page_content, 'service_3_image', 'heroImage'); ?> -->

                            <article class="content">
                                <a href="#" class="seemorebtn btn btn-white d-inline-flex rounded-pill text-grey fw-700 gap-2"><span class="text">See more</span> <svg class="arrow-icon" width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.605 12.0098L10.2358 3.64062L1.8667 12.0098" stroke="#00AEEF" stroke-width="4" />
                                    </svg>
                                </a>
                                <article>
                                    <p class="fs-20 fw-700 text-capitalize"><?= _isset($page_content, 'service_3_title') ?></p>

                                    <article class="text-light fs-18 py-3 description"><?= _isset($page_content, 'service_3_content') ?></article>
                                    
                                    <a href="<?= _issetUrl($page_content, 'service_3_button_link') ?>" class="btn btn-primary rounded-0 fs-18 fw-700 text-white mt-4">Learn More</a>
                                </article>
                            </article>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>