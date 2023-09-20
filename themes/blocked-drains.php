<?php
$page_content_arr = array();
$page_content = blocked_drains_content::get_data($page_content_arr);
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
    'banner_subtitle' => _isset($page_content, 'banner_subtitle'),
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

<main class="blockedDrainServicesPage">
    <section class="restore position-relative overflow-hidden">
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/plumber-left.png" class="plumber-left position-absolute bottom-0 start-0" alt="Plumber Left" />
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/plumber-right.png" class="plumber-right position-absolute bottom-0 end-0" alt="Plumber Right" />

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 d-flex flex-column align-items-center">
                    <article class="d-flex justify-content-center col-lg-7">
                        <article>
                            <h2 class="fs-100 fw-500 lh-1">Restore</h2>
                            <h2 class="fs-100 fw-500 lh-1 text-end">the flow</h2>
                            <h3 class="text-primary fs-70 lh-1">of water to your</h3>
                            <h3 class="text-primary fs-70 lh-1 text-end">home today!</h3>
                        </article>
                    </article>
                    <article class="text-center fs-18 description pt-5 fw-300">
                        <p class="fw-700">Is a blocked drain preventing water from flowing out of your home?</p>

                        <p>Rapid Plumbing Group Pty Ltd offers a full range of cleaning, preventative maintenance and plumbing repair solutions. When homeowners ignore poor water pressure, reduced performance from fixtures and appliances, or other major plumbing issues it often results in the need for professional services and solutions.</p>

                        <p>Read on to learn more about water jetting and how it may improve the function of your utilities and reduce the risk of developing future blocked drain problems.</p>
                    </article>

                    <button class="bg-transparent rounded-pill mt-5">
                        <a href="#" class="btn btn-primary text-white d-inline-flex rounded-pill px-3 px-lg-5 fs-18 fw-700">Enquire</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="innerServices py-6 py-lg-10">
        <div class="container position-relative z-1">
            <h3 class="fs-70 fw-500 lh-1 highlight-primary"><span>Blocked Drains</span> services</h3>
        </div>
        <div class="expect-slider pt-7 position-relative z-1">
            <article class="box">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img1.jpg" alt="Rapid Plumbing Van" />
                <p class="overlay">24 Hour Emergency Service</p>
            </article>
            <article class="box">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img2.jpg" alt="Rapid Plumbing Van" />
                <p class="overlay">Septic Tank Services</p>
            </article>
            <article class="box">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img3.jpg" alt="Rapid Plumbing Van" />
                <p class="overlay">Rain Water Tanks & Pumps</p>
            </article>
            <article class="box">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img4.jpg" alt="Rapid Plumbing Van" />
                <p class="overlay">Sewer & Stormwater</p>
            </article>
            <article class="box">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img5.jpg" alt="Rapid Plumbing Van" />
                <p class="overlay">Backflow Testing & Certification</p>
            </article>
            <article class="box">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img6.jpg" alt="Rapid Plumbing Van" />
                <p class="overlay">Broken Pipe Repair</p>
            </article>
            <article class="box">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img7.jpg" alt="Rapid Plumbing Van" />
                <p class="overlay">Bathroom Renovations</p>
            </article>
            <article class="box">
                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/expect-img8.jpg" alt="Rapid Plumbing Van" />
                <p class="overlay">Water Jetting</p>
            </article>
        </div>
    </section>

    <section class="about py-8">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <article class="callRapidCard h-100 position-relative">
                        <img class="heroImage h-100 w-100 object-fit-cover" src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/callRapid.jpg" alt="Remove drain blockages fast" />
                        <div class="overlay d-flex align-items-end h-100 w-100 top-0 position-absolute">
                            <p class="fw-800 lh-1">Call Rapid to Remove Drain Blockages Fast</p>
                        </div>
                    </article>
                </div>
                <div class="col-4">
                    <h3 class="fs-36 highlight-primary lh-1 py-4">Call Rapid <span>to Remove Drain Blockages Fast</span></h3>
                    <article class="description fs-18 pt-4">
                        <p>When it comes to taking care of blocked drains, you will find that early vigilance is key. When you are running water in the sink, or when you are taking a shower, keep track of the water level. If the water level is not running down as quickly as it should, you need to look for a fix.</p>

                        <p>On a regular basis, run hot water down the drain to clear away grease or soap sediment. Make sure that you use traps to prevent debris from going down the drain, and teach your children not to stick things down the drain, even if it looks like fun.</p>

                        <p>Preventing drain blockages is something that just takes a bit of time and effort. Remember that old drain traps should be replaced.</p>

                        <p>New drain traps are much better at keeping things from going down the sink than older ones that might be frayed or that have less of a good seal.</p>
                    </article>
                </div>
                <div class="col-4">
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

    <section class="water-jetting py-8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <article class="col-10">
                        <h2 class="fs-128 fw-400 lh-1 text-primary text-start">Water</h2>
                        <h2 class="fs-128 fw-400 lh-1 text-white text-end">Jetting</h2>
                        <div class="text-center pt-5">
                            <a href="#" class="btn btn-primary d-inline-flex text-white rounded-pill px-3 px-lg-5 fs-18 fw-700">Enquire</a>
                        </div>
                    </article>
                </div>
                <div class="col-6">
                    <div class="row gy-3">
                        <div class="col-12">
                            <article class="waterJettingCard bg-dark-blue position-relative py-5 ps-8 pe-4 d-flex align-items-center">
                                <svg class="svg position-absolute" width="55" height="72" viewBox="0 0 55 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M39.6641 68.6583C41.7065 67.518 43.6505 66.0483 45.4337 64.2751C50.8995 58.8458 54.1038 51.612 54.2156 44.4201C54.3139 38.5201 53.4022 33.5877 49.6347 29.5497C46.551 26.2388 42.8863 24.5494 36.7457 22.6664L36.4687 22.6193L36.196 22.5199C20.0536 16.7611 13.3722 8.17263 10.7444 0.970215C2.54352 14.988 -0.960272 28.08 0.304491 40.0003C1.94019 55.378 11.303 63.5742 11.3969 63.6527L11.5354 63.7678L11.6784 63.9142C19.4994 71.9012 30.4845 73.7685 39.6686 68.6635L39.6641 68.6583Z" fill="#00AEEF" />
                                </svg>
                                <p class="number position-absolute fs-32 fw-700">1</p>

                                <p class="text-white highlight-primary fs-24 fw-700">What <span>is Water Jetting?</span></p>
                            </article>
                        </div>
                        <div class="col-12">
                            <article class="waterJettingCard bg-dark-blue position-relative py-5 ps-8 pe-4 d-flex align-items-center">
                                <svg class="svg position-absolute" width="55" height="72" viewBox="0 0 55 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M39.6641 68.6583C41.7065 67.518 43.6505 66.0483 45.4337 64.2751C50.8995 58.8458 54.1038 51.612 54.2156 44.4201C54.3139 38.5201 53.4022 33.5877 49.6347 29.5497C46.551 26.2388 42.8863 24.5494 36.7457 22.6664L36.4687 22.6193L36.196 22.5199C20.0536 16.7611 13.3722 8.17263 10.7444 0.970215C2.54352 14.988 -0.960272 28.08 0.304491 40.0003C1.94019 55.378 11.303 63.5742 11.3969 63.6527L11.5354 63.7678L11.6784 63.9142C19.4994 71.9012 30.4845 73.7685 39.6686 68.6635L39.6641 68.6583Z" fill="#00AEEF" />
                                </svg>
                                <p class="number position-absolute fs-32 fw-700">2</p>

                                <p class="text-white highlight-primary fs-24 fw-700">When <span>Do You Need Water Jetting Services?</span></p>
                            </article>
                        </div>
                        <div class="col-12">
                            <article class="waterJettingCard bg-dark-blue position-relative py-5 ps-8 pe-4 d-flex align-items-center">
                                <svg class="svg position-absolute" width="55" height="72" viewBox="0 0 55 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M39.6641 68.6583C41.7065 67.518 43.6505 66.0483 45.4337 64.2751C50.8995 58.8458 54.1038 51.612 54.2156 44.4201C54.3139 38.5201 53.4022 33.5877 49.6347 29.5497C46.551 26.2388 42.8863 24.5494 36.7457 22.6664L36.4687 22.6193L36.196 22.5199C20.0536 16.7611 13.3722 8.17263 10.7444 0.970215C2.54352 14.988 -0.960272 28.08 0.304491 40.0003C1.94019 55.378 11.303 63.5742 11.3969 63.6527L11.5354 63.7678L11.6784 63.9142C19.4994 71.9012 30.4845 73.7685 39.6686 68.6635L39.6641 68.6583Z" fill="#00AEEF" />
                                </svg>
                                <p class="number position-absolute fs-32 fw-700">3</p>

                                <p class="text-white highlight-primary fs-24 fw-700"><span>Water Jetting for Drain and Sewer Line</span> Issues</p>
                            </article>
                        </div>
                        <div class="col-12">
                            <article class="waterJettingCard bg-dark-blue position-relative py-5 ps-8 pe-4 d-flex align-items-center">
                                <svg class="svg position-absolute" width="55" height="72" viewBox="0 0 55 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M39.6641 68.6583C41.7065 67.518 43.6505 66.0483 45.4337 64.2751C50.8995 58.8458 54.1038 51.612 54.2156 44.4201C54.3139 38.5201 53.4022 33.5877 49.6347 29.5497C46.551 26.2388 42.8863 24.5494 36.7457 22.6664L36.4687 22.6193L36.196 22.5199C20.0536 16.7611 13.3722 8.17263 10.7444 0.970215C2.54352 14.988 -0.960272 28.08 0.304491 40.0003C1.94019 55.378 11.303 63.5742 11.3969 63.6527L11.5354 63.7678L11.6784 63.9142C19.4994 71.9012 30.4845 73.7685 39.6686 68.6635L39.6641 68.6583Z" fill="#00AEEF" />
                                </svg>
                                <p class="number position-absolute fs-32 fw-700">4</p>

                                <p class="text-white highlight-primary fs-24 fw-700"><span>Working with the Right</span> Professionals</p>
                            </article>
                        </div>
                        <div class="col-12">
                            <p class="text-primary-light text-center fs-18 px-lg-4 pt-4">Looking for first-rate Penrith water jetting and blocked drain specialists who can fix your problem fast? <span class="text-white fw-700">Call Rapid Plumbing Group at <a href="tel:<?= _isset($contact_info, 'phone_number'); ?>" class="text-white"><?= _isset($contact_info, 'phone_number'); ?></a></span> to request an immediate appointment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>

<?php require 'inc/footer.php'; ?>