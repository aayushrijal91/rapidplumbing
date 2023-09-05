<section class="banner py-5 d-flex align-items-center position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php $htmltag = html_tag($banner_details, 'banner_title_heading_tag', ''); ?>
                <<?= $htmltag ?> class="banner__heading font-serpentine">
                    <?= _isset($banner_details, 'banner_title'); ?>
                </<?= $htmltag ?>>
                <?php if (!empty($banner_details['banner_subtitle'])) { ?>
                    <p class="banner__content fs-20 pt-4 col-lg-8 fw-500">
                        <?= _isset($banner_details, 'banner_subtitle'); ?>
                    </p>
                <?php } ?>

                <div class="row pt-5">
                    <div class="col-auto">
                        <a href="#" class="btn btn-secondary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700">Get Started</a>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn btn-outline-white border-2 rounded-pill px-3 px-lg-5 fs-18 fw-700">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= _imgSrc($banner_details, 'banner_image', 'position-absolute bottom-0 end-0'); ?>
</section>