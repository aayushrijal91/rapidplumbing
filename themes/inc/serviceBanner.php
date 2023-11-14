<section class="serviceBanner py-5 d-flex align-items-center position-relative">
    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/there_in_a_flush.png" alt="there in a flush" class="there-in-a-flush" />
    <div class="container">
        <div class="row pt-8 pt-xxl-0">
            <div class="col-lg-6">
                <?php $htmltag = html_tag($banner_details, 'banner_title_heading_tag', ''); ?>
                
                <<?= $htmltag ?> class="banner__heading font-serpentine lh-1">
                    <?= _isset($banner_details, 'banner_title'); ?>
                </<?= $htmltag ?>>

                <?php if (!empty($banner_details['banner_subtitle'])) { ?>
                    <p class="banner__content fs-20 pt-4 col-lg-9 fw-500">
                        <?= _isset($banner_details, 'banner_subtitle'); ?>
                    </p>
                <?php } ?>

                <div class="row pt-5">
                    <?php if (!empty($banner_details['banner_button_1_text']) && !empty($banner_details['banner_button_1_link'])) : ?>
                        <div class="col-auto">
                            <a href="<?= _issetUrl($banner_details, 'banner_button_1_link'); ?>" class="btn btn-secondary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($banner_details, 'banner_button_1_text'); ?></a>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($banner_details['banner_button_2_text']) && !empty($banner_details['banner_button_2_link'])) : ?>
                        <div class="col-auto">
                            <a href="<?= _issetUrl($banner_details, 'banner_button_2_link'); ?>" class="btn btn-outline-white border-2 rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($banner_details, 'banner_button_2_text'); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>