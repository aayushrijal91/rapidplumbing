<?php
$page_content_arr = array();
$page_content = schools_content::get_data($page_content_arr);
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

<main class="schoolsServicePage">
    <section class="introduction">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <article>
                        <h3 class="fs-64 fw-700 lh-1 text-capitalize">School Plumbing Contractor Sydney</h3>
                        <p class="fw-700 text-primary text-capitalize fs-20 pt-4">Proper water flow for students and teachers</p>
                        <article class="fs-18 description pt-4 fw-300 lh-1_67">
                            <p>Rapid Plumbing Group is happy to help any school with all plumbing issues!</p>

                            <p>Between students, staff and visitors, school plumbing systems are often under huge strain, putting them in risk of failing. Everyone studying or working at schools deserves proper hygiene, and that starts with well-done plumbing.</p>

                            <p>Get Rapid Plumbing Group as the plumber for your school! We are always willing to work with schools, whether it’s short term for singular jobs or long-term as a contractor. We are available 24/7 and resolve any emergency on the same day, so we can come in even during school hours to quickly patch up any immediate issues. We also can help upgrade your school’s plumbing to allow it to handle large amounts of users better. Call Rapid Plumbing Group today to learn more!</p>
                        </article>
                        
                        <button class="bg-transparent rounded-pill mt-4">
                            <a href="#" class="btn btn-primary text-white d-inline-flex rounded-pill px-3 px-lg-5 fs-18 fw-700">Enquire</a>
                        </button>
                    </article>
                </div>
                <div class="col-lg-6">
                    <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/schools.jpg" class="rounded-xl" alt="Plumber Left" />
                </div>
            </div>
        </div>
    </section>

    <section class="help">
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
                <h3 class="fs-60 fw-700 highlight-secondary text-center">Strata Plumbing Sydney FAQs</h3>
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