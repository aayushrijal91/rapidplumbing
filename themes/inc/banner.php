<section class="banner d-flex align-items-center position-relative">
    <?php if (!empty($banner_details['banner_image'])) : ?>
        <?= _imgSrc($banner_details, 'banner_image', 'position-absolute bottom-0 end-0 d-none d-xl-block h-100'); ?>
    <?php else : ?>
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/background/banner.png" alt="" class="position-absolute h-100 bottom-0 end-0 d-none d-xl-block" />
    <?php endif; ?>

    <div class="container position-relative py-5">
        <div class="row">
            <div class="col-lg-8 col-xl-6">
                <?php $htmltag = html_tag($banner_details, 'banner_title_heading_tag', ''); ?>
                <<?= $htmltag ?> class="banner__heading font-serpentine lh-1">
                    <?= _isset($banner_details, 'banner_title'); ?>
                </<?= $htmltag ?>>
                <?php if (!empty($banner_details['banner_subtitle'])) { ?>
                    <p class="banner__content pt-4 col-xl-8 fw-500">
                        <?= _isset($banner_details, 'banner_subtitle'); ?>
                    </p>
                <?php } ?>

                <div class="row pt-4 pt-md-5">
                    <?php if (!empty($banner_details['banner_button_1_text']) && !empty($banner_details['banner_button_1_link'])) : ?>
                        <div class="col-6 col-md-auto">
                            <a href="<?= _issetUrl($banner_details, 'banner_button_1_link'); ?>" class="btn btn-secondary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($banner_details, 'banner_button_1_text'); ?></a>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($banner_details['banner_button_2_text']) && !empty($banner_details['banner_button_2_link'])) : ?>
                        <div class="col-6 col-md-auto">
                            <a href="<?= _issetUrl($banner_details, 'banner_button_2_link'); ?>" class="btn btn-outline-white border-2 rounded-pill px-3 px-lg-5 fs-18 fw-700"><?= _isset($banner_details, 'banner_button_2_text'); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>