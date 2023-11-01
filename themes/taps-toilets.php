<?php
$page_content_arr = array();
$page_content = taps_toilets_content::get_data($page_content_arr);
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

<main class="tapsAndToiletsServicePage">
    <section class="introduction position-relative overflow-hidden">
    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/tapstoilets-introduction.png" class="plumber-right position-absolute top-0 end-0" alt="Plumber Left" />

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <article>
                        <h3 class="fs-64 fw-500 lh-1 text-capitalize"><strong>Keep the water running</strong> perfectly in your home</h3>
                        <p class="fw-700 text-primary text-capitalize fs-20 pt-4">Rapid Plumbing group handles all your tap and toilet needs!</p>
                        <article class="fs-18 description pt-4 fw-300">
                            <p>Without taps, we wouldn't have access to clean drinking water. And without toilets, managing waste would be absolutely unbearable. Yet, they often go ignored until they stop working properly. A leaking tap or clogged toilet can not only be annoying and disruptive, but it can also lead to serious damage if left unaddressed.</p>
                            <p>Rapid Plumbing Group has experts in tap and toilet repairs and installation, who can handle everything from simple leaky taps to installing new fixtures. We also offer preventative maintenance services to help detect any issues before they turn into costly problems. Call Rapid Plumbing Group for fast, efficient solutions.</p>
                        </article>

                        <button class="bg-transparent rounded-pill mt-4">
                            <a href="#" class="btn btn-primary text-white d-inline-flex rounded-pill px-3 px-lg-5 fs-18 fw-700">Enquire</a>
                        </button>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="help">
        <div class="services pb-6">
            <div class="container">
                <h3 class="fs-64 fw-400">Services</h3>
                <p class="fs-18 py-5">
                    Rapid Plumbing Group is a fully licensed and insured business that offers an impressive total plumbing, drainage and gas fitting services to our domestic, industrial, and commercial clients. Our services range from small maintenance jobs to large multi level developments within the area. No issue is ever too big or too small for our experts to handle.
                </p>
            </div>

            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-xl-11 ps-7">
                        <div class="tapstoiltesservices-slider position-relative z-1">
                            <article class="box">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/tapstoilets-service-1.jpg" alt="Taps and Toilets" />
                                <div class="overlay">
                                    <p>Bidet Installation / Repairs</p>
                                </div>
                                <a class="button text-white px-5 py-3 fw-600" href="#">Enquire</a>
                            </article>
                            <article class="box">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/tapstoilets-service-1.jpg" alt="Taps and Toilets" />
                                <div class="overlay">
                                    <p>Leaking Taps / Toilets</p>
                                </div>
                                <a class="button text-white px-5 py-3 fw-600" href="#">Enquire</a>
                            </article>
                            <article class="box">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/tapstoilets-service-1.jpg" alt="Taps and Toilets" />
                                <div class="overlay">
                                    <p>Tap Installation / Repairs</p>
                                </div>
                                <a class="button text-white px-5 py-3 fw-600" href="#">Enquire</a>
                            </article>
                            <article class="box">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/tapstoilets-service-1.jpg" alt="Taps and Toilets" />
                                <div class="overlay">
                                    <p>Toilet Installation / Repairs</p>
                                </div>
                                <a class="button text-white px-5 py-3 fw-600" href="#">Enquire</a>
                            </article>
                            <article class="box">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/tapstoilets-service-1.jpg" alt="Taps and Toilets" />
                                <div class="overlay">
                                    <p>Unblock Toilets</p>
                                </div>
                                <a class="button text-white px-5 py-3 fw-600" href="#">Enquire</a>
                            </article>
                            <article class="box">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/tapstoilets-service-1.jpg" alt="Taps and Toilets" />
                                <div class="overlay">
                                    <p>Unblock Toilets</p>
                                </div>
                                <a class="button text-white px-5 py-3 fw-600" href="#">Enquire</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
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

        <section class="serviceFaq pt-8">
            <div class="container">
                <h3 class="fs-60 fw-700 highlight-secondary text-center">Taps &amp; Toilets Sydney FAQs</h3>
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