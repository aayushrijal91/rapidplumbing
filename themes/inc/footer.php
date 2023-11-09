<?php
// Footer menu
$footer_menu_Arr = array();
$footer_menu = footer_menu::get_data($footer_menu_Arr);
?>

<footer class="bg-dark-grey text-white py-3 py-lg-6">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <a href="<?php echo V_SITE_URL; ?>"><?= _imgSrc($header_settings, 'site_logo', 'header__logo'); ?></a>
                <?php if (!empty($footer_menu)) : ?>
                    <div class="footer-menu mt-5">
                        <ul class="list-unstyled fs-20 fst-italic fw-700 d-flex flex-column gap-3">
                            <?php foreach ($footer_menu as $footer) : ?>
                                <li><a href="<?= _issetUrl($footer, 'link') ?>" class="text-white"><?= _isset($footer, 'title') ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-xl-9">
                <div class="d-flex flex-column h-100 justify-content-between">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <p class="fst-italic lh-1 fw-700">Plumbing</p>
                            <div class="services-menu pt-5">
                                <ul class="list-unstyled d-flex flex-column gap-2">
                                    <li><a href="#" class="text-grey">Plumbing</a></li>
                                    <li><a href="#" class="text-grey">Plumbing</a></li>
                                    <li><a href="#" class="text-grey">PlumbingPlumbing</a></li>
                                    <li><a href="#" class="text-grey">Plumbing</a></li>
                                    <li><a href="#" class="text-grey">PlumbingPlumbing</a></li>
                                    <li><a href="#" class="text-grey">Plumbing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="fst-italic lh-1 fw-700">Blocked Drains</p>
                            <div class="services-menu pt-5">
                                <ul class="list-unstyled d-flex flex-column gap-2">
                                    <li><a href="#" class="text-grey">Blocked Drains</a></li>
                                    <li><a href="#" class="text-grey">Blocked Drains</a></li>
                                    <li><a href="#" class="text-grey">Blocked DrainsDrains</a></li>
                                    <li><a href="#" class="text-grey">Blocked Drains</a></li>
                                    <li><a href="#" class="text-grey">Blocked DrainsDrains</a></li>
                                    <li><a href="#" class="text-grey">Blocked Drains</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="fst-italic lh-1 fw-700">Hot Water</p>
                            <div class="services-menu pt-5">
                                <ul class="list-unstyled d-flex flex-column gap-2">
                                    <li><a href="#" class="text-grey">Hot Water</a></li>
                                    <li><a href="#" class="text-grey">Hot Water</a></li>
                                    <li><a href="#" class="text-grey">Hot WaterWater</a></li>
                                    <li><a href="#" class="text-grey">Hot Water</a></li>
                                    <li><a href="#" class="text-grey">Hot WaterWater</a></li>
                                    <li><a href="#" class="text-grey">Hot Water</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="fst-italic lh-1 fw-700">Gas Fitting</p>
                            <div class="services-menu pt-5">
                                <ul class="list-unstyled d-flex flex-column gap-2">
                                    <li><a href="#" class="text-grey">Gas Fitting</a></li>
                                    <li><a href="#" class="text-grey">Gas Fitting</a></li>
                                    <li><a href="#" class="text-grey">Gas Fitting</a></li>
                                    <li><a href="#" class="text-grey">Gas Fitting</a></li>
                                    <li><a href="#" class="text-grey">Gas Fitting</a></li>
                                    <li><a href="#" class="text-grey">Gas Fitting</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="copyright mt-7">
                        <div class="row gx-0_5 gy-2 align-items-center justify-content-between">
                            <div class="col-auto">
                                <p class="text-grey fs-14 fw-500 lh-1 mb-0">Copyright <?php echo date("Y"); ?> <span class="px-1_25">/</span> <span class="px-1_25">/</span> All Rights Reserved</p>
                            </div>
                            <div class="col-auto">
                                <div class="social d-flex flex-row gap-4 align-items-center">
                                    <a href="#" target="_blank">
                                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.87041 10.7765L9.39841 7.27762H6.33601V5.02028C6.33601 4.23021 6.75841 3.32727 8.13121 3.32727H9.50401V0.392726C9.50401 0.392726 8.23681 0.166992 6.96961 0.166992C4.43521 0.166992 2.7456 1.86 2.7456 4.79454V7.39049H0V10.8894H2.8512V19.1287C3.3792 19.2415 4.01281 19.2415 4.64641 19.2415C5.28001 19.2415 5.80801 19.2415 6.44161 19.1287V10.7765H8.87041Z" fill="#00AEEF" />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.5233 3.55273C14.8519 3.55273 14.4043 4.00422 14.4043 4.68144C14.4043 5.35867 14.8519 5.81015 15.5233 5.81015C16.1947 5.81015 16.6423 5.35867 16.6423 4.68144C16.6423 4.00422 16.0828 3.55273 15.5233 3.55273Z" fill="#00AEEF" />
                                            <path d="M10.6004 5.01855C8.02674 5.01855 5.90063 7.16364 5.90063 9.76031C5.90063 12.357 8.02674 14.5021 10.6004 14.5021C13.1741 14.5021 15.3002 12.357 15.3002 9.76031C15.1883 7.05074 13.1741 5.01855 10.6004 5.01855ZM10.6004 12.6957C8.92194 12.6957 7.57914 11.3409 7.57914 9.64741C7.57914 7.95393 8.92194 6.71204 10.6004 6.71204C12.2789 6.71204 13.6217 8.06683 13.6217 9.76031C13.6217 11.4538 12.167 12.6957 10.6004 12.6957Z" fill="#00AEEF" />
                                            <path d="M14.2931 19.244H6.68393C3.55074 19.244 0.977051 16.6474 0.977051 13.4864V5.92259C0.977051 2.76158 3.55074 0.165039 6.68393 0.165039H14.2931C17.4263 0.165039 20 2.76158 20 5.92259V13.4864C20 16.7603 17.4263 19.244 14.2931 19.244ZM6.68393 1.85844C4.55784 1.85844 2.76744 3.66473 2.76744 5.8097V13.4864C2.76744 15.6314 4.55784 17.4377 6.68393 17.4377H14.2931C16.4192 17.4377 18.2096 15.6314 18.2096 13.4864V5.92259C18.2096 3.77762 16.4192 1.97133 14.2931 1.97133H6.68393V1.85844Z" fill="#00AEEF" />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.5691 4.85579C21.5691 2.23305 19.4789 0.0625 16.9533 0.0625H5.02201C2.49641 0.0625 0.40625 2.23305 0.40625 4.85579V10.5535C0.40625 13.1762 2.49641 15.3468 5.02201 15.3468H16.8662C19.3918 15.3468 21.5691 12.9753 21.5691 10.3525V5.12584V4.85579ZM14.6019 8.11161L9.28942 10.8248C9.11524 10.9152 8.33143 10.8248 8.33143 10.5535V4.94623C8.33143 4.67491 9.02815 4.58447 9.28942 4.67491L14.3406 7.56897C14.6019 7.65941 14.7761 8.02117 14.6019 8.11161Z" fill="#00AEEF" />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.237772 5.90181H3.5412V16.9182H0.237772V5.90181ZM1.93668 0.490234C2.9749 0.490234 3.82436 1.35995 3.82436 2.42294C3.82436 3.48593 2.9749 4.35565 1.93668 4.35565C0.898461 4.35565 0.0490072 3.48593 0.0490072 2.42294C-0.0453765 1.35995 0.898461 0.490234 1.93668 0.490234Z" fill="#00AEEF" />
                                            <path d="M5.71265 5.9003H8.92164V7.44642C9.39355 6.57672 10.4317 5.70703 12.0362 5.70703C15.434 5.70703 16.0003 8.02621 16.0003 10.9252V16.9164H12.6969V11.6016C12.6969 10.3454 12.6969 8.70264 10.998 8.70264C9.29916 8.70264 9.01601 10.0555 9.01601 11.505V16.9164H5.71265V5.9003Z" fill="#00AEEF" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-auto col-2">
                                <a href="https://www.aiims.com.au/like-our-work/">
                                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/aiims-logo.png" alt="Aiims Group" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="<?php echo V_CDN_URL . V_THEME_DIR; ?>_assets/scripts/vendor.min.js?v=1.1"></script>
<script src="<?php echo V_CDN_URL . V_THEME_DIR; ?>_assets/scripts/scripts.min.js?v=1.2"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<script>
    var SITE_URL = "<?php echo V_CDN_URL; ?>";
</script>

<?php if (isset($authentication_area['footer']) && !empty($authentication_area['footer'])) {
    echo str_replace(array('<br>', '</br>'), array("", ""), $authentication_area['footer']);
} ?>
</body>

</html>