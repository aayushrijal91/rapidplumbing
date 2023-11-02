<?php
$page_content_arr = array();
$page_content = renovation_plumber_content::get_data($page_content_arr);
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

<main class="renovationPlumbersServicePage">
    <section class="help">
        <section class="about pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <article class="callRapidCard primaryborder h-100 position-relative">
                            <img class="heroImage h-100 w-100 object-fit-cover" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/callRapid.jpg" alt="Remove drain blockages fast" />
                            <div class="overlay d-flex align-items-end h-100 w-100 top-0 position-absolute">
                                <p class="fw-800 lh-1">Call Rapid to Remove Drain Blockages Fast</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <h3 class="fs-36 highlight-primary lh-1 pt-4 text-capitalize">All Your plumbing needs <span class="fw-700">Satisfied 24/7</span></h3>
                        <p class="py-4 fw-700">Count on Rapid Plumbing for all your plumbing needs!</p>
                        <article class="description fs-18">
                            <p>Most people only think about plumbing when an inconvenience or emergency arises. But with vigilance and regular inspection, most of these plumbing problems could have been avoided in advance, saving money from repairs in the long run.</p>

                            <p>Rapid Plumbing Group offers a wide variety of day-to-day plumbing services, from maintenance and repairs to preventative services like water pressure detection and full plumbing inspections. We are available 24/7 for any emergencies, or just to match your busy schedule. If you need a plumber, we do it all!</p>
                        </article>
                        <a href="#" class="btn btn-primary text-white rounded-pill px-3 px-lg-5 fs-18 fw-700 d-inline-flex">Enquire</a>
                    </div>
                    <div class="col-md-4">
                        <article class="callRapidCard h-100 position-relative">
                            <img class="heroImage h-100 w-100 object-fit-cover" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/prevent-blocked-drains.jpg" alt="How to prevent blocked drains" />
                            <div class="overlay d-flex align-items-end h-100 w-100 top-0 position-absolute">
                                <p class="fw-800 lh-1">How Can You Prevent Blocked Drains?</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pb-9">
            <div class="row gy-4 pt-6">
                <div class="col-12">
                    <article class="aboutCard">
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
                    <article class="aboutCard">
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
                    <article class="aboutCard">
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

        <section class="serviceFaq">
            <div class="container">
                <h3 class="fs-60 fw-700 highlight-secondary text-center">Renovation Plumber Sydney FAQs</h3>
                <div class="hot-water-faq-slider pt-6 pt-lg-7 z-1">
                    <article class="box">
                        <p class="fs-26 fw-600">What does a hot water heater inspection involve?</p>
                        <article class="description fs-18 pt-3 lh-1_5">
                            <p>When we service a hot water system, we inspect and service everything from the ground up. Our comprehensive services include</p>
                            <ul>
                                <li>Corrosion inspection</li>
                                <li>Leak detection</li>
                                <li>Gas connection inspection</li>
                                <li>Complete flush</li>
                            </ul>
                        </article>
                    </article>
                    <article class="box">
                        <p class="fs-26 fw-600">What are some common problems with hot water systems?</p>
                        <article class="description fs-18 pt-3 lh-1_5">
                            <p>Hot water systems are essential to our daily lives, but are also delicate machines. Common ways they may break down include:</p>
                            <ul>
                                <li>Failing anode rod no longer dissolving rust in the tank</li>
                                <li>Bacterial infection causing foul smell in water</li>
                            </ul>
                        </article>
                    </article>
                    <article class="box">
                        <p class="fs-26 fw-600">What do I do when my hot water heater stops working?</p>
                        <article class="description fs-18 pt-3 lh-1_5">
                            <p>It's time to call in a certified plumber to take a look and make the right repairs. Rapid Plumbing Group's staff are well-trained and highly professional. We work 24/7 and are efficient at any job, so you can be sure that we'll get your hot water systems up and running in no time at all.</p>
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
            </div>
        </section>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>

<?php require 'inc/footer.php'; ?>