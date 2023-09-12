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

<main class="innerServicePage">
    <section class="restore position-relative">
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/plumber-left.png" class="plumber-left" alt="Plumber Left" />
        <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/lib/plumber-right.png" class="plumber-right" alt="Plumber Right" />

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

    <section class="innerInnerService">

    </section>
</main>

<?php require 'inc/footer.php'; ?>