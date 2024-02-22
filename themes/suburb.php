<?php

$SUBURB = '';


if (isset($_GET['slug']) && !empty($_GET['slug']) && !is_numeric($_GET['slug'])) {
    $suburbSlug = $_GET['slug'];
}

if ($suburbSlug != '') {
    $suburbQuery = array('where' => "`slug` = '" . $suburbSlug . "'");
    $suburb = suburb_list::get_data($suburbQuery);

    if (count($suburb) > 0) {
        $SUBURB = $suburb[0]['title'];
    } else {
        include(V_ROOT_THEME . '404.php');
        die();
    }
}

$pageContentArr = array();
$page_content = suburb_inner_content::get_data($pageContentArr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$cta_list = array('orderBy' => 'dragSortOrder ASC');
$cta_list = cta_list::get_data($cta_list);

/*  Meta data */
$meta_title         =  $SUBURB . ' - ' . $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $page_content['banner_video_image'];
// $banner_details['mobile_background_image'] = $page_content['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $page_content['banner_title_heading_tag'];
$banner_details['banner_title'] = !empty($page_content['banner_title']) ? $page_content['banner_title'] : $SUBURB;
$banner_details['banner_subtitle'] = $page_content['banner_subtitle'];
$banner_details['banner_button_1_text'] = $page_content['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $page_content['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $page_content['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $page_content['banner_button_2_link'];
/*  Banner Array End */

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="suburbInnerPage">
    <div class="bg-quaternary py-7">
        <section class="introduction">
            <div class="container">
                <div class="hero-image bg-grey-2 d-flex justify-content-center align-items-center">
                    <?php
                    if (count($page_content['introduction_hero_image']) > 0) : ?>
                        <?= _imgSrc($page_content, 'introduction_hero_image', 'h-100 w-100 object-fit-cover'); ?>
                    <?php else : ?>
                        <svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M103.569 0.426697H20.9232C15.4435 0.426697 10.1881 2.60353 6.31334 6.47831C2.43855 10.3531 0.261719 15.6084 0.261719 21.0882L0.261719 103.734C0.261719 109.214 2.43855 114.469 6.31334 118.344C10.1881 122.219 15.4435 124.396 20.9232 124.396H103.569C109.049 124.396 114.304 122.219 118.179 118.344C122.054 114.469 124.231 109.214 124.231 103.734V21.0882C124.231 15.6084 122.054 10.3531 118.179 6.47831C114.304 2.60353 109.049 0.426697 103.569 0.426697ZM41.5847 21.0882C43.628 21.0882 45.6253 21.6941 47.3242 22.8293C49.0231 23.9644 50.3472 25.5779 51.1291 27.4656C51.911 29.3533 52.1156 31.4304 51.717 33.4344C51.3184 35.4384 50.3345 37.2791 48.8897 38.7239C47.4449 40.1687 45.6041 41.1526 43.6002 41.5512C41.5962 41.9498 39.519 41.7453 37.6313 40.9633C35.7436 40.1814 34.1302 38.8573 32.995 37.1584C31.8599 35.4595 31.254 33.4622 31.254 31.419C31.254 28.6791 32.3424 26.0514 34.2798 24.114C36.2172 22.1766 38.8449 21.0882 41.5847 21.0882ZM99.7572 93.4035H28.0515C27.5209 93.4033 27.0032 93.2396 26.5689 92.9348C26.1346 92.63 25.8047 92.1988 25.6241 91.6999C25.4435 91.201 25.421 90.6586 25.5595 90.1464C25.6981 89.6342 25.991 89.1771 26.3985 88.8373L80.1805 44.0225C80.4941 43.7621 80.8649 43.5797 81.2626 43.4901C81.6603 43.4005 82.0735 43.4064 82.4685 43.5071C82.8635 43.6079 83.229 43.8007 83.5352 44.0699C83.8414 44.339 84.0795 44.6768 84.2301 45.0556L102.154 89.86C102.311 90.2519 102.37 90.6763 102.325 91.096C102.28 91.5158 102.132 91.9181 101.896 92.2678C101.659 92.6175 101.341 92.9038 100.968 93.1018C100.595 93.2998 100.179 93.4034 99.7572 93.4035Z" fill="white" />
                        </svg>
                    <?php endif; ?>
                </div>
                <div class="bg-dark-blue py-4 py-md-6 px-2 px-md-5">
                    <p class="text-primary fs-55 fw-700">Reliable Emergency <?= $SUBURB ?> Plumber</p>

                    <div class="description fs-24 lh-1_67 pt-4 pt-md-5">
                        <p>At Rapid Plumbing Group Pty Ltd, you can count on our team of dedicated <?= $SUBURB ?> plumbing technicians to deliver outstanding plumbing repair and installation services designed to restore the flow of water to your home. Our expert plumber <?= $SUBURB ?> offers fast and effective service, including burst pipe repair emergency solutions, water heater installation and repair, septic tank plumbing, and much more, so make sure to work with a team who always puts your needs and comfort first and call for service today.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="about mt-6 mt-md-9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="text-primary fs-55 fw-700 pb-4"><?= _isset($page_content, 'service_list_title') ?></p>

                        <div class="description">
                            <?= _isset($page_content, 'service_list') ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="h-100 rounded-20 overflow-hidden bg-grey-2 d-flex justify-content-center align-items-center">
                            <?php
                            if (count($page_content['service_list_image']) > 0) : ?>
                                <?= _imgSrc($page_content, 'service_list_image', 'h-100 w-100 object-fit-cover'); ?>
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
    </div>

    <div class="container py-7">
        <p class="fs-55 fw-700 lh-1 text-capitalize">Your local Plumber <?= $SUBURB ?> Solutions</p>

        <div class="description fs-24 pt-4 pt-md-5 lh-1_5 column-count-2">
            <p>Whether you need whole-house repiping services to solve ongoing leaks and problems with your plumbing system; slab leak services designed to locate the source of your slab leak and prevent it from causing structural damage to your home’s foundation, or clog removal services to restore your drains and toilets to proper working order, you can count on our team.</p>
            <p>We provide fast and efficient plumbing repair and installation solutions and can replace and upgrade a variety of plumbing equipment and fixtures.</p>
            <p>We offer bathroom remodeling services to help you give your bathroom a facelift and install new, efficient fixtures safety and according to local code standards.No matter when plumbing issues rear their ugly heads, whether it’s in the middle of the night or the middle of your workweek, you can count on the experts at Rapid Plumbing Group Pty Ltd to deliver fast and reliable plumbing solutions.</p>
            <p>Our Plumber <?= $SUBURB ?> is equipped with hands-on knowledge, certification, and skills to deliver a wide variety of professional plumbing installation and repair solutions, so why wait? Give us a call and restore your pipes to the perfect working order as soon as possible.</p>
        </div>
    </div>

    <div class="bg-quaternary py-7">
        <div class="container">
            <section class="introduction">
                <div class="hero-image bg-grey-2 d-flex justify-content-center align-items-center">
                    <?php
                    if (count($page_content['block_drains_services_image']) > 0) : ?>
                        <?= _imgSrc($page_content, 'block_drains_services_image', 'h-100 w-100 object-fit-cover'); ?>
                    <?php else : ?>
                        <svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M103.569 0.426697H20.9232C15.4435 0.426697 10.1881 2.60353 6.31334 6.47831C2.43855 10.3531 0.261719 15.6084 0.261719 21.0882L0.261719 103.734C0.261719 109.214 2.43855 114.469 6.31334 118.344C10.1881 122.219 15.4435 124.396 20.9232 124.396H103.569C109.049 124.396 114.304 122.219 118.179 118.344C122.054 114.469 124.231 109.214 124.231 103.734V21.0882C124.231 15.6084 122.054 10.3531 118.179 6.47831C114.304 2.60353 109.049 0.426697 103.569 0.426697ZM41.5847 21.0882C43.628 21.0882 45.6253 21.6941 47.3242 22.8293C49.0231 23.9644 50.3472 25.5779 51.1291 27.4656C51.911 29.3533 52.1156 31.4304 51.717 33.4344C51.3184 35.4384 50.3345 37.2791 48.8897 38.7239C47.4449 40.1687 45.6041 41.1526 43.6002 41.5512C41.5962 41.9498 39.519 41.7453 37.6313 40.9633C35.7436 40.1814 34.1302 38.8573 32.995 37.1584C31.8599 35.4595 31.254 33.4622 31.254 31.419C31.254 28.6791 32.3424 26.0514 34.2798 24.114C36.2172 22.1766 38.8449 21.0882 41.5847 21.0882ZM99.7572 93.4035H28.0515C27.5209 93.4033 27.0032 93.2396 26.5689 92.9348C26.1346 92.63 25.8047 92.1988 25.6241 91.6999C25.4435 91.201 25.421 90.6586 25.5595 90.1464C25.6981 89.6342 25.991 89.1771 26.3985 88.8373L80.1805 44.0225C80.4941 43.7621 80.8649 43.5797 81.2626 43.4901C81.6603 43.4005 82.0735 43.4064 82.4685 43.5071C82.8635 43.6079 83.229 43.8007 83.5352 44.0699C83.8414 44.339 84.0795 44.6768 84.2301 45.0556L102.154 89.86C102.311 90.2519 102.37 90.6763 102.325 91.096C102.28 91.5158 102.132 91.9181 101.896 92.2678C101.659 92.6175 101.341 92.9038 100.968 93.1018C100.595 93.2998 100.179 93.4034 99.7572 93.4035Z" fill="white" />
                        </svg>
                    <?php endif; ?>
                </div>
                <div class="bg-white py-4 py-md-6 px-2 px-md-5">
                    <div class="row justify-content-between gy-4">
                        <div class="col-xl-9">
                            <p class="text-quaternary fs-55 fw-600">Blocked Drain <?= $SUBURB ?> Service</p>
                        </div>

                        <div class="col-auto">
                            <a href="tel:<?php echo preg_replace('/[^\d]/i', '', _isset($contact_info, 'phone_number')); ?>" class="btn btn-primary text-white fs-27 text-italic fw-700 gap-2">
                                <img src="<?= V_CDN_URL . V_THEME_DIR ?>_assets/images/icons/buzzing-phone.gif" width=38 height=38 alt="Phone" />
                                <?= _isset($contact_info, 'phone_number'); ?>
                            </a>
                        </div>

                        <div class="description fs-24 lh-1_67 pt-3 pt-md-5 text-quaternary column-count-2">
                            <p>At Rapid Plumbing Group Pty Ltd, you can count on our team of dedicated <?= $SUBURB ?> plumbing technicians to deliver outstanding plumbing repair and installation services designed to restore the flow of water to your home. Our expert plumber <?= $SUBURB ?> offers fast and effective service, including burst pipe repair emergency solutions, water heater installation and repair, septic tank plumbing, and much more, so make sure to work with a team who always puts your needs and comfort first and call for service today.</p>
                        </div>
                    </div>
            </section>

            <section class="content mt-4 mt-md-6 py-5 px-2 p-md-5 bg-darkest-blue">
                <div class="row gy-5">
                    <div class="col-lg-6 order-1">
                        <div class="h-100 d-flex align-items-center">
                            <div>
                                <p class="fs-55 fw-700 text-capitalize lh-1">Hot Water Heater Repair <?= $SUBURB ?></p>

                                <div class="description fs-18 pt-4 lh-1_5">
                                    <p>Has your water heater been failing to deliver consistently hot water as it once did? If you have noticed that your water heater has been failing to maintain the same level of warm water that it used to, or if your hot water seems to run out faster than it did before, contact us for hot water heater repair services. Take a look at this list of common warning signs and then give us a call:</p>
                                    <ul class="lh-2">
                                        <li>Inconsistent hot water, or no hot water at all.</li>
                                        <li>Icy cold ‘stings’ of water in an otherwise hot stream of water from your faucets and fixtures.</li>
                                        <li>Cracks in the reservoir tank which holds and heats your water.</li>
                                        <li>Puddles are appearing underneath your tank.</li>
                                    </ul>
                                    <p>Contact us today and enjoy high-quality water heater repair and installation solutions for your home. Our plumbers can quickly diagnose the cause of your issue and can provide effective hot water system repair solutions to solve the problem and ensure that your home has hot water whenever you need it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-2">
                        <div class="h-100 overflow-hidden content-image">
                            <?= _imgSrc($page_content, 'content_1_image', 'h-100 w-100 object-fit-cover'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content mt-4 mt-md-6 py-5 px-2 p-md-5 bg-darkest-blue">
                <div class="row gy-5">
                    <div class="col-lg-6 order-1 order-md-2">
                        <div class="h-100 d-flex align-items-center">
                            <div>
                                <p class="fs-55 fw-700 text-capitalize lh-1">Commercial and Strata Plumbing in <?= $SUBURB ?></p>

                                <div class="description fs-18 pt-4 lh-1_5">
                                    <p>It is very important for a building to have a mandated plumber in order to ensure that there is a trustworthy person available in an emergency. During a plumbing emergency, damage can quickly occur if not repaired immediately. With the use of our expert strata services, you can have the peace of mind that comes from reliable and long-lasting repair, installation, and maintenance services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-2 order-md-1">
                        <div class="h-100 overflow-hidden content-image">
                            <?= _imgSrc($page_content, 'content_2_image', 'h-100 w-100 object-fit-cover'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content mt-4 mt-md-6 py-5 px-2 p-md-5 bg-darkest-blue">
                <div class="row gy-5">
                    <div class="col-lg-6 order-1">
                        <div class="h-100 d-flex align-items-center">
                            <div>
                                <p class="fs-55 fw-700 text-capitalize lh-1">Reasons to Choose our Plumber in <?= $SUBURB ?></p>

                                <div class="description fs-18 pt-4 lh-1_5">
                                    <p>There’s more to finding the right team of plumbing experts to solve your issues than just calling around; it’s important to pay attention to all that your plumbing service provider has to offer. When you choose our team, you can also enjoy:</p>
                                    <ul class="lh-2">
                                        <li>Affordable, upfront pricing on all services; never worry about surprises with us</li>
                                        <li>We always arrive on time, clean, and ready to solve your issues</li>
                                        <li>We’ll beat any reasonable written competitor’s quote</li>
                                        <li>We’re a family-owned and operated, local plumbing business</li>
                                        <li>We offer high-quality service with every visit</li>
                                        <li>Enjoy a lifetime guarantee on labour</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-2">
                        <div class="h-100 overflow-hidden content-image">
                            <?= _imgSrc($page_content, 'content_3_image', 'h-100 w-100 object-fit-cover'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-center py-8">
                <p class="fs-55 text-primary fw-700">Over 20 Years of Plumbing Experience</p>

                <div class="description fs-24 lh-1_5 pt-5">
                    <p>Rapid Plumbing Group Pty Ltd was founded in 2006, which means that we have over a decade’s worth of hands-on experience solving plumbing issues in your community. Our <?= $SUBURB ?> plumber is equipped with the training, certification, and experience working in the field to quickly diagnose the cause of your plumbing issue, and can deliver fast and effective services designed to resolve the problem as quickly as possible.</p>
                    <p>Working with our team of dedicated plumbing experts means that you can feel confident in the level of customer service that we bring to each job that we do. We know that repeat business is based on exceptional service, which is why we’ll always be “There in a Flush” whenever you need us.</p>
                </div>
            </section>

            <div class="row gy-4">
                <?php foreach ($cta_list as $cta) : ?>
                    <div class="col-12">
                        <article class="aboutCard bg-darkest-blue">
                            <div class="row h-100">
                                <div class="col-lg-6">
                                    <?= _imgSrc($cta, 'image', 'h-100 w-100'); ?>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                    <article class="pt-5 pb-3 px-3 p-md-5 px-lg-3 p-xl-5">
                                        <h3 class="fs-60 fw-600 lh-1"><?= _isset($cta, 'title') ?></h3>
                                        <p class="fs-18 pt-3 lh-1_5 description">
                                            <?= _isset($cta, 'content') ?>
                                        </p>
                                    </article>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</main>

<?php require 'inc/footer.php'; ?>