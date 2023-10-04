<?php
$page_content_arr = array();
$page_content = emergency_plumbing_content::get_data($page_content_arr);
if (count($page_content)) {
    $page_content = $page_content[0];
}

/*  Meta data */
$meta_title         = $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/*  Banner details  Start*/
$banner_details = array(
    'banner_title_heading_tag' => _isset($page_content, 'banner_title_heading_tag'),
    'banner_title' => _isset($page_content, 'banner_title'),
    'banner_button_1_text' => _isset($page_content, 'banner_button_1_text'),
    'banner_button_1_link' => _isset($page_content, 'banner_button_1_link'),
    'banner_button_2_text' => _isset($page_content, 'banner_button_2_text'),
    'banner_button_2_link' => _isset($page_content, 'banner_button_2_link'),
);

/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/serviceBanner.php';
?>

<main class="emergencyPlumbingServicesPage">
    <section class="introduction">
        <div class="container">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <p class="font-serpentine fs-20 text-italic">Need Emergency Plumbing Sydney? Give Us A Call!</p>
                    <h2 class="font-serpentine py-3 text-capitalize fs-85 text-italic lh-1 highlight-secondary">
                        We can <span>Help You 24/7</span>
                    </h2>
                    <article class="description fs-18">
                        <p>Faced with a plumbing emergency on a Saturday night? Rapid Plumbing Group is available with a solution 24 hours a day, seven days a week, ready to get things done.</p>
                        <p>Blocked drains, burst pipes, leaking toilets, we handle it all for you fast and easy to get your life back on track. Call us at 1800 172 743 now!</p>
                    </article>
                    <div class="row pt-4">
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
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/emergency-plumbing-truck.png" class="position-absolute top-0 z-n1" alt="" />
    </section>

    <section class="trustworthy-plumbers py-5">
        <div class="container">
            <h2 class="text-center fs-64 highlight-secondary">Plumbers You <span class="fw-700">Can Trust</span></h2>
            <p class="fs-20 text-center col-lg-11 mx-auto py-4 lh-1_5">
                Plumbing issues plague households across Sydney every day, causing just as much grief as monetary damage. Every problem has a solution, however, and Rapid Plumbing Group is here to provide.
            </p>

            <div class="row gy-4 pt-6">
                <div class="col-12">
                    <article class="trustCard">
                        <div class="row h-100">
                            <div class="col-6">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/family-owned-and-run.png" alt="" class="mainImg" />
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <article class="p-5">
                                    <h3 class="fs-60 fw-600 lh-1">Family-Owned, Family-Run</h3>
                                    <p class="fs-18 pt-3 lh-1_5">
                                        We started as a family business with humble beginnings from Penrith, and have continued to grow both as a business and as people. Our team is family to us, and so is the local community. We take good care of our own, and that includes you and your needs.
                                    </p>
                                </article>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12">
                    <article class="trustCard">
                        <div class="row h-100">
                            <div class="col-6">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/speed.png" alt="" class="mainImg" />
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <article class="p-5">
                                    <h3 class="fs-60 fw-600 lh-1">Speed</h3>
                                    <p class="fs-18 pt-3 lh-1_5">
                                        Rapid Plumbing Group has worked on large-scale projects with big clients, such as NSW Fire Services, schools across the state, and various local councils. We have consistently exceeded expectations by outperforming KPIs and finishing well before deadlines. Naturally, you can expect the same speed on your demands.
                                    </p>
                                </article>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12">
                    <article class="trustCard">
                        <div class="row h-100">
                            <div class="col-6">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/quality-customer-service.png" alt="" class="mainImg" />
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <article class="p-5">
                                    <h3 class="fs-60 fw-600 lh-1">Quality Customer Service</h3>
                                    <p class="fs-18 pt-3 lh-1_5">
                                        Our services come at an upfront, affordable price, no surprise or hidden charges involved. We are perfectionists who are proud of our work. We strive to get everything done right the first time, and if someone doesn't agree, we always come back to fix it until everyone is happy, no extra charge. We’re COVID-certified and have been trained in the proper practices. As always, we value safety above all.
                                    </p>
                                </article>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="serviceFaq pt-8">
        <div class="container">
            <h3 class="fs-60 fw-700 highlight-secondary text-center"><span>Emergency Plumbing</span> Sydney FAQs</h3>
        </div>
        <div class="faq-slider pt-6 pt-lg-7 z-1">
            <article class="box">
                <p class="fs-26 fw-600">Can I unblock a drain myself?</p>
                <article class="description fs-18 pt-3 lh-1_5">
                    <p>If the drain is not shared and the blockage is minor, it is possible to resolve it with some home remedies.</p>
                    <ul>
                        <li>Baking soda and Vinegar</li>
                        <li>Warm water and Soap</li>
                    </ul>
                </article>
            </article>
            <article class="box">
                <p class="fs-26 fw-600">Should I pour boiling water down a blocked drain?</p>
                <article class="description fs-18 pt-3 lh-1_5">
                    <p>While it is possible that this can solve your problem, it is not recommended. Hot or boiling water can potentially damage or melt plastic bonding between pipes. In the case of PVC pipes, they may be directly damaged or melted too.</p>
                </article>
            </article>
            <article class="box">
                <p class="fs-26 fw-600">What causes burst pipes?</p>
                <article class="description fs-18 pt-3 lh-1_5">
                    <p>There are several common reasons why pipes burst, but usually blockages are the main culprit. Pressure built up inside a pipe due to a blockage will eventually cause the pipe to burst. Freezing can also cause pipes to rupture from the water within expanding.</p>
                </article>
            </article>
            <article class="box">
                <p class="fs-26 fw-600">What should I do first if I have a burst pipe?</p>
                <article class="description fs-18 pt-3 lh-1_5">
                    <p> The damaged section of pipe will have to be replaced. If you are not already well-versed in pipe repair, call in a professional plumber to handle it. In the meantime, turn off the water supply to stop further leakage.</p>
                </article>
            </article>
            <article class="box">
                <p class="fs-26 fw-600">Which pipes are most likely to burst?</p>
                <article class="description fs-18 pt-3 lh-1_5">
                    <p>Exposed pipes, old pipes and pipes affected by corrosion are most prone to bursting. This is why it is important to maintain healthy pipes. In cold weather, pipes situated in unheated areas are at more risk.</p>
                </article>
            </article>
            <article class="box">
                <p class="fs-26 fw-600">Can I unblock a drain myself?</p>
                <article class="description fs-18 pt-3 lh-1_5">
                    <p>If the drain is not shared and the blockage is minor, it is possible to resolve it with some home remedies.</p>
                    <ul>
                        <li>Baking soda and Vinegar</li>
                        <li>Warm water and Soap</li>
                    </ul>
                </article>
            </article>
        </div>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>

<?php require 'inc/footer.php'; ?>