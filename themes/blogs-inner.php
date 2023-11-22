<?php

if (isset($_GET['slug']) && !empty($_GET['slug']) && !is_numeric($_GET['slug'])) {
    $blogSlug = $_GET['slug'];
}

if ($blogSlug != '') {
    $serviceArray = array('where' => "`slug` = '" . $blogSlug . "'");
    $blog = blogs::get_data($blogArray);
    if (count($blog) > 0) {
        $page_content = $blog[0];
    } else {
        include('404.php');
        die();
    }
}

$blogs = array('orderBy' => 'dragSortOrder ASC');
$blogs = blogs::get_data($blogs);

/*  Meta data */
$meta_title         = $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/*  Banner details  Start*/
$banner_details['banner_title_heading_tag'] = _isset($page_content, 'banner_title_heading_tag');
$banner_details['banner_title'] = _isset($page_content, 'banner_title');
$banner_details['banner_subtitle'] = _isset($page_content, 'banner_subtitle');
$banner_details['banner_button_1_text'] = _isset($page_content, 'banner_button_1');
$banner_details['banner_button_1_link'] = _isset($page_content, 'banner_button_1_link');
$banner_details['banner_button_2_text'] = _isset($page_content, 'banner_button_2');
$banner_details['banner_button_2_link'] = _isset($page_content, 'banner_button_2_link');
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/serviceBanner.php';
?>

<main class="blogInnerPage">
    <section class="section_1 bg-white py-6 py-md-9">
        <div class="container">
            <div class="heroImage bg-grey-2 d-flex justify-content-center align-items-center">
                <?php
                if (count($page_content['section_1_image']) > 0) : ?>
                    <?= _imgSrc($page_content, 'section_1_image') ?>
                <?php else : ?>
                    <svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M103.569 0.426697H20.9232C15.4435 0.426697 10.1881 2.60353 6.31334 6.47831C2.43855 10.3531 0.261719 15.6084 0.261719 21.0882L0.261719 103.734C0.261719 109.214 2.43855 114.469 6.31334 118.344C10.1881 122.219 15.4435 124.396 20.9232 124.396H103.569C109.049 124.396 114.304 122.219 118.179 118.344C122.054 114.469 124.231 109.214 124.231 103.734V21.0882C124.231 15.6084 122.054 10.3531 118.179 6.47831C114.304 2.60353 109.049 0.426697 103.569 0.426697ZM41.5847 21.0882C43.628 21.0882 45.6253 21.6941 47.3242 22.8293C49.0231 23.9644 50.3472 25.5779 51.1291 27.4656C51.911 29.3533 52.1156 31.4304 51.717 33.4344C51.3184 35.4384 50.3345 37.2791 48.8897 38.7239C47.4449 40.1687 45.6041 41.1526 43.6002 41.5512C41.5962 41.9498 39.519 41.7453 37.6313 40.9633C35.7436 40.1814 34.1302 38.8573 32.995 37.1584C31.8599 35.4595 31.254 33.4622 31.254 31.419C31.254 28.6791 32.3424 26.0514 34.2798 24.114C36.2172 22.1766 38.8449 21.0882 41.5847 21.0882ZM99.7572 93.4035H28.0515C27.5209 93.4033 27.0032 93.2396 26.5689 92.9348C26.1346 92.63 25.8047 92.1988 25.6241 91.6999C25.4435 91.201 25.421 90.6586 25.5595 90.1464C25.6981 89.6342 25.991 89.1771 26.3985 88.8373L80.1805 44.0225C80.4941 43.7621 80.8649 43.5797 81.2626 43.4901C81.6603 43.4005 82.0735 43.4064 82.4685 43.5071C82.8635 43.6079 83.229 43.8007 83.5352 44.0699C83.8414 44.339 84.0795 44.6768 84.2301 45.0556L102.154 89.86C102.311 90.2519 102.37 90.6763 102.325 91.096C102.28 91.5158 102.132 91.9181 101.896 92.2678C101.659 92.6175 101.341 92.9038 100.968 93.1018C100.595 93.2998 100.179 93.4034 99.7572 93.4035Z" fill="white" />
                    </svg>
                <?php endif; ?>
            </div>
            <div class="bg-lighter">
                <article class="px-3 px-md-5 py-5 py-md-6 text-quaternary">
                    <h3 class="col-lg-8 fs-55 fw-700 lh-1 highlight-primary"><?= _isset($page_content, 'section_1_title') ?></h3>

                    <article class="fs-20 description column-count-2 pt-4 pt-md-5 lh-1_5">
                        <?= _isset($page_content, 'section_1_description') ?>
                    </article>
                </article>
            </div>
        </div>
    </section>

    <section class="section_2 py-6 py-md-9 bg-lighter">
        <div class="container">
            <div class="row">
                <article class="col-lg-6 text-quaternary">
                    <h3 class="fs-55 fw-700 lh-1 highlight-primary"><?= _isset($page_content, 'section_2_title') ?></h3>

                    <article class="fs-20 description pt-4 pt-md-5 lh-1_5">
                        <?= _isset($page_content, 'section_2_description') ?>
                    </article>
                </article>

                <div class="col-lg-6">
                    <div class="heroImage bg-grey-2 d-flex justify-content-center align-items-center h-100">
                        <?php
                        if (count($page_content['section_2_image']) > 0) : ?>
                            <?= _imgSrc($page_content, 'section__image') ?>
                        <?php else : ?>
                            <svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M103.569 0.426697H20.9232C15.4435 0.426697 10.1881 2.60353 6.31334 6.47831C2.43855 10.3531 0.261719 15.6084 0.261719 21.0882L0.261719 103.734C0.261719 109.214 2.43855 114.469 6.31334 118.344C10.1881 122.219 15.4435 124.396 20.9232 124.396H103.569C109.049 124.396 114.304 122.219 118.179 118.344C122.054 114.469 124.231 109.214 124.231 103.734V21.0882C124.231 15.6084 122.054 10.3531 118.179 6.47831C114.304 2.60353 109.049 0.426697 103.569 0.426697ZM41.5847 21.0882C43.628 21.0882 45.6253 21.6941 47.3242 22.8293C49.0231 23.9644 50.3472 25.5779 51.1291 27.4656C51.911 29.3533 52.1156 31.4304 51.717 33.4344C51.3184 35.4384 50.3345 37.2791 48.8897 38.7239C47.4449 40.1687 45.6041 41.1526 43.6002 41.5512C41.5962 41.9498 39.519 41.7453 37.6313 40.9633C35.7436 40.1814 34.1302 38.8573 32.995 37.1584C31.8599 35.4595 31.254 33.4622 31.254 31.419C31.254 28.6791 32.3424 26.0514 34.2798 24.114C36.2172 22.1766 38.8449 21.0882 41.5847 21.0882ZM99.7572 93.4035H28.0515C27.5209 93.4033 27.0032 93.2396 26.5689 92.9348C26.1346 92.63 25.8047 92.1988 25.6241 91.6999C25.4435 91.201 25.421 90.6586 25.5595 90.1464C25.6981 89.6342 25.991 89.1771 26.3985 88.8373L80.1805 44.0225C80.4941 43.7621 80.8649 43.5797 81.2626 43.4901C81.6603 43.4005 82.0735 43.4064 82.4685 43.5071C82.8635 43.6079 83.229 43.8007 83.5352 44.0699C83.8414 44.339 84.0795 44.6768 84.2301 45.0556L102.154 89.86C102.311 90.2519 102.37 90.6763 102.325 91.096C102.28 91.5158 102.132 91.9181 101.896 92.2678C101.659 92.6175 101.341 92.9038 100.968 93.1018C100.595 93.2998 100.179 93.4034 99.7572 93.4035Z" fill="white" />
                            </svg>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_3 bg-dark-grey py-6 py-md-9">
        <div class="container">
            <h3 class="fs-55 fw-700 lh-1"><?= _isset($page_content, 'section_3_title') ?></h3>

            <article class="fs-20 description column-count-2 pt-4 pt-md-5 lh-1_5">
                <?= _isset($page_content, 'section_3_description') ?>
            </article>
        </div>
    </section>

    <section class="section_4 bg-white py-6 py-md-9">
        <div class="container">
            <div class="heroImage bg-grey-2 d-flex justify-content-center align-items-center">
                <?php
                if (count($page_content['section_4_image']) > 0) : ?>
                    <?= _imgSrc($page_content, 'section_4_image') ?>
                <?php else : ?>
                    <svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M103.569 0.426697H20.9232C15.4435 0.426697 10.1881 2.60353 6.31334 6.47831C2.43855 10.3531 0.261719 15.6084 0.261719 21.0882L0.261719 103.734C0.261719 109.214 2.43855 114.469 6.31334 118.344C10.1881 122.219 15.4435 124.396 20.9232 124.396H103.569C109.049 124.396 114.304 122.219 118.179 118.344C122.054 114.469 124.231 109.214 124.231 103.734V21.0882C124.231 15.6084 122.054 10.3531 118.179 6.47831C114.304 2.60353 109.049 0.426697 103.569 0.426697ZM41.5847 21.0882C43.628 21.0882 45.6253 21.6941 47.3242 22.8293C49.0231 23.9644 50.3472 25.5779 51.1291 27.4656C51.911 29.3533 52.1156 31.4304 51.717 33.4344C51.3184 35.4384 50.3345 37.2791 48.8897 38.7239C47.4449 40.1687 45.6041 41.1526 43.6002 41.5512C41.5962 41.9498 39.519 41.7453 37.6313 40.9633C35.7436 40.1814 34.1302 38.8573 32.995 37.1584C31.8599 35.4595 31.254 33.4622 31.254 31.419C31.254 28.6791 32.3424 26.0514 34.2798 24.114C36.2172 22.1766 38.8449 21.0882 41.5847 21.0882ZM99.7572 93.4035H28.0515C27.5209 93.4033 27.0032 93.2396 26.5689 92.9348C26.1346 92.63 25.8047 92.1988 25.6241 91.6999C25.4435 91.201 25.421 90.6586 25.5595 90.1464C25.6981 89.6342 25.991 89.1771 26.3985 88.8373L80.1805 44.0225C80.4941 43.7621 80.8649 43.5797 81.2626 43.4901C81.6603 43.4005 82.0735 43.4064 82.4685 43.5071C82.8635 43.6079 83.229 43.8007 83.5352 44.0699C83.8414 44.339 84.0795 44.6768 84.2301 45.0556L102.154 89.86C102.311 90.2519 102.37 90.6763 102.325 91.096C102.28 91.5158 102.132 91.9181 101.896 92.2678C101.659 92.6175 101.341 92.9038 100.968 93.1018C100.595 93.2998 100.179 93.4034 99.7572 93.4035Z" fill="white" />
                    </svg>
                <?php endif; ?>
            </div>
            <div class="bg-lighter">
                <article class="px-3 px-md-5 py-5 py-md-6 text-quaternary">
                    <div class="row justify-content-between align-items-center gy-4">
                        <div class="col-lg-8">
                            <h3 class="fs-55 fw-700 lh-1 highlight-primary"><?= _isset($page_content, 'section_4_title') ?>?</h3>
                        </div>

                        <div class="col-auto">
                            <a href="tel:<?php echo preg_replace('/[^\d]/i', '', _isset($contact_info, 'phone_number')); ?>" class="btn btn-primary text-white fs-27 text-italic fw-700 gap-2">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/buzzing-phone.gif" width=38 height=38 alt="Phone" />
                                <?= _isset($contact_info, 'phone_number'); ?>
                            </a>
                        </div>
                    </div>

                    <article class="fs-20 description column-count-2 pt-4 pt-md-5 lh-1_5">
                        <?= _isset($page_content, 'section_4_description') ?>
                    </article>
                </article>
            </div>
        </div>
    </section>

    <section class="section_4 bg-lighter py-6 py-md-9">
        <div class="container">
            <h3 class="fs-55 fw-700 lh-1 highlight-primary text-quaternary text-center"><span>Explore</span> more of our blog</h3>
            <p class="text-quaternary fs-24 text-center pt-3"><?= _isset($page_content, 'blog_subtitle') ?></p>

            <div class="row g-4 pt-6 pt-md-8">
                <?php foreach ($blogs as $blog) { ?>
                    <div class="col-md-6 col-lg-4">
                        <article class="blogCard">
                            <div class="image">
                                <?= _imgSrc($blog, 'thumbnail'); ?>
                            </div>
                            <article class="content flex-grow-1 d-flex flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-24 fw-600"><?= _isset($blog, 'title') ?></h4>
                                    <div class="divider"></div>
                                    <p class="fs-14 fw-500 lh-1_5 pb-4"><?= _isset($blog, 'short_description') ?></p>
                                </div>
                                <div>
                                    <a href="<?= _isset($blog, 'slug') ?>" class="btn btn-outline-primary d-inline-flex border-1 text-white rounded-pill px-3 px-lg-4 fs-16 fw-700">Read More</a>
                                </div>
                            </article>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>

<?php require 'inc/footer.php'; ?>