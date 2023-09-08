<?php
$ServicesPageArr = array();
$ServicesPage = services_content::get_data($ServicesPageArr);
if (count($ServicesPage)) {
    $ServicesPage = $ServicesPage[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $ServicesPage['meta_title'];
$meta_description     = $ServicesPage['meta_description'];
$meta_keyword         = $ServicesPage['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $ServicesPage['banner_video_image'];
// $banner_details['mobile_background_image'] = $ServicesPage['mobile_banner_image'];
$banner_details['banner_title_heading_tag'] = $ServicesPage['banner_title_heading_tag'];
$banner_details['banner_title'] = $ServicesPage['banner_title'];
$banner_details['banner_subtitle'] = $ServicesPage['banner_subtitle'];
$banner_details['banner_button_1_text'] = $ServicesPage['banner_button_1_text'];
$banner_details['banner_button_1_link'] = $ServicesPage['banner_button_1_link'];
$banner_details['banner_button_2_text'] = $ServicesPage['banner_button_2_text'];
$banner_details['banner_button_2_link'] = $ServicesPage['banner_button_2_link'];
/*  Banner Array End */

// Get Projects
$services_list = array('orderBy' => 'dragSortOrder ASC');
$services_list = services_list::get_data($services_list);

require 'inc/header.php';
require 'inc/nav.php';
require 'inc/banner.php';
?>

<main class="servicesPage">
    <section class="how-can-we-help">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5">
                    <h2 class="fs-64 text-primary lh-1">How can we <span class="text-white">help you</span> today?</h2>
                </div>
                <div class="col-7">
                    <article class="description fs-18">
                        <p>Homeowners, as well as our industrial and commercial clients enjoy a full range of plumbing services.</p>

                        <p>From blocked drain repair to hot water heater replacement, there’s no job too big or too small for us to handle.</p>
                    </article>
                </div>
            </div>

            <div class="row pt-6 pt-lg-8 g-3">
                <?php foreach ($services_list as $service) : ?>
                    <div class="col serviceHelpCardRow">
                        <a href="">
                            <article class="serviceHelpCard">
                                <?= _imgSrc($service, 'image'); ?>
                                <div class="overlay">
                                    <p class="title"><?= $service['title'] ?></p>
                                </div>
                            </article>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="why-hire-us">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-9">
                    <article class="col-lg-6">
                        <p class="fs-165 text-white fw-700 text-end lh-0_7">Why</p>
                        <p class="fs-109 text-primary fw-700 lh-1">hire us?</p>
                    </article>

                    <div class="row g-3 pt-6">
                        <div class="col-4">
                            <article class="whyHireUsCard">
                                <div class="row">
                                    <div class="col-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="85" height="62" viewBox="0 0 85 62" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0561 1.16673C9.12646 2.57219 4.55419 11.3579 7.92306 18.7162C11.7587 27.0941 22.5512 28.7694 28.6913 21.9401C31.8522 18.4241 32.7742 13.5563 31.1285 9.06858C30.0737 6.19205 26.5681 2.65746 23.9262 1.80662C21.4827 1.01955 19.1244 0.800078 17.0561 1.16673ZM40.1537 8.97924C35.9454 11.082 33.9687 14.3301 33.9598 19.157C33.9531 22.6512 34.7862 24.721 37.1492 27.0841C39.5501 29.4853 41.5658 30.2791 45.2616 30.2791C48.0618 30.2791 48.6342 30.1564 50.3982 29.1795C54.196 27.0759 56.4085 23.4935 56.44 19.3958C56.4701 15.5398 55.462 13.2052 52.6927 10.715C50.4252 8.67672 48.1715 7.84961 44.8842 7.84961C42.873 7.84961 41.9944 8.05944 40.1537 8.97924ZM68.4326 16.0173C65.2843 16.4759 62.2128 18.8764 60.9241 21.8856C60.0981 23.8153 60.1708 27.3202 61.0787 29.3563C62.7029 32.9977 65.8916 35.0538 69.9155 35.0538C73.9206 35.0538 77.0703 33.0184 78.739 29.3522C79.6614 27.3251 79.74 23.832 78.907 21.8856C77.1704 17.8305 72.7995 15.3818 68.4326 16.0173ZM15.3845 29.9024C8.44765 31.4117 2.99747 36.8333 1.33732 43.8758C0.951385 45.5122 0.782701 48.3261 0.778994 53.1887C0.773433 60.0962 0.781218 60.1648 1.68359 61.0668L2.59337 61.9769H12.6203H22.6468L22.6598 55.5818C22.6676 51.7406 22.8837 48.0024 23.2011 46.2211C23.8654 42.4907 26.0249 38.0534 28.5489 35.2317C29.9536 33.6613 30.3058 33.0485 29.9625 32.773C28.7706 31.8161 25.282 30.3558 23.0661 29.8861C20.0835 29.254 18.3474 29.2577 15.3845 29.9024ZM40.8517 34.0172C36.0989 35.2951 32.2674 38.5146 30.1015 43.0491L28.7639 45.85V53.4382V61.026L29.6908 61.4961C30.3681 61.8394 33.2357 61.9673 40.3494 61.9714L50.0812 61.9769V55.878C50.0812 52.5236 50.2655 48.8952 50.4909 47.8145C51.0433 45.1656 52.6975 41.7519 54.5656 39.4055C56.3285 37.1914 56.347 37.2356 52.8617 35.4045C49.1043 33.4311 44.8561 32.9402 40.8517 34.0172ZM65.3106 38.4675C61.5536 39.8303 58.1161 43.118 56.701 46.7019C55.9978 48.4833 55.8439 49.7026 55.7216 54.4536C55.5766 60.0847 55.5773 60.0921 56.5194 61.0342L57.4622 61.9769H69.9155H82.3689L83.318 61.0279L84.2671 60.0788L84.1069 54.4473C83.91 47.5324 83.3072 45.6446 80.2379 42.3295C77.3165 39.1741 74.9946 38.1424 70.4716 37.9911C67.9213 37.9055 66.4973 38.0371 65.3106 38.4675Z" fill="#F0C324" />
                                        </svg>
                                    </div>
                                    <div class="col-8">
                                        <p class="fs-24 fw-700">Family Owned and Operated</p>
                                    </div>
                                </div>
                                <p class="pt-4 text-primary-light lh-1_5">As a family owned and operated company, integrity is part of our core values. We only provide honest recommendations and will never push a service or product on you that you do not need.</p>
                            </article>
                        </div>
                        <div class="col-4">
                            <article class="whyHireUsCard">
                                <div class="row">
                                    <div class="col-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="83" height="62" viewBox="0 0 83 62" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6697 1.05301C18.0282 1.22876 16.0437 1.82631 14.4769 2.61637C7.39879 6.18582 1.61091 15.4544 0.786284 24.5403C0.728181 25.1806 0.697774 31.7624 0.69752 43.7457L0.697266 61.9771H18.484H36.2707V44.1904V26.4037H26.0938H15.9169L15.9741 25.1377C16.219 19.7096 17.7557 15.8023 20.5692 13.4542C22.0715 12.2004 23.8411 11.4099 25.6249 11.1962L26.1169 11.1372L28.653 6.06564L31.189 0.994141L25.5776 1.00769C22.4913 1.01515 19.8328 1.03556 19.6697 1.05301ZM65.407 1.05301C63.7654 1.22876 61.7809 1.82631 60.2141 2.61637C53.136 6.18582 47.3481 15.4544 46.5235 24.5403C46.4654 25.1806 46.435 31.7624 46.4347 43.7457L46.4345 61.9771H64.2212H82.0079V44.1904V26.4037H71.831H61.6541L61.7113 25.1377C61.9563 19.7096 63.493 15.8023 66.3064 13.4542C67.8087 12.2004 69.5784 11.4099 71.3621 11.1962L71.8541 11.1372L74.3902 6.06564L76.9262 0.994141L71.3149 1.00769C68.2285 1.01515 65.57 1.03556 65.407 1.05301Z" fill="#F0C324" />
                                        </svg>
                                    </div>
                                    <div class="col-8">
                                        <p class="fs-24 fw-700">Free<br /> Quotes</p>
                                    </div>
                                </div>
                                <p class="pt-4 text-primary-light lh-1_5">Before we start any work, we always provide a quote free of charge so you always know what to expect. Our pricing is upfront and we charge by the job so you will never be faced with any unwanted surprises at the end of your service.</p>
                            </article>
                        </div>
                        <div class="col-4">
                            <article class="whyHireUsCard">
                                <div class="row">
                                    <div class="col-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="62" viewBox="0 0 75 62" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.32828 1.21127C3.0008 1.83808 1.27604 3.67791 0.843485 5.99505C0.650378 7.02974 0.647651 46.7894 0.840615 47.9677C1.25064 50.4718 3.43106 52.5555 6.03543 52.9321C6.53297 53.004 8.27969 53.0643 9.91708 53.0658L12.894 53.0687V48.2158V43.363L12.5283 43.0194C11.5454 42.096 10.4849 39.935 10.0999 38.0711C8.79889 31.7726 14.0162 25.5129 20.5566 25.5254C22.3319 25.5289 23.6284 25.8277 25.1605 26.5868C27.5191 27.7553 29.0622 29.3028 30.1804 31.6203C30.9335 33.1814 31.2579 34.5637 31.2579 36.2113C31.2579 38.566 30.4375 40.8964 28.9724 42.7039L28.245 43.6013V48.335V53.0687L48.0794 53.0658C59.2496 53.0643 68.309 53.0057 68.8185 52.9321C71.4229 52.5555 73.6033 50.4718 74.0133 47.9677C74.2081 46.7774 74.2034 7.02486 74.0081 5.99577C73.5566 3.61492 71.8629 1.82876 69.4642 1.2041C68.2617 0.890909 6.49208 0.897796 5.32828 1.21127ZM64.9727 17.8475V19.3539H37.427H9.88121V17.8475V16.3411H37.427H64.9727V17.8475ZM64.9727 27.0294V28.5358H51.1998H37.427V27.0294V25.523H51.1998H64.9727V27.0294ZM18.7237 28.7633C16.8976 29.2053 14.8964 30.7318 13.9403 32.4118C12.6735 34.6382 12.6375 37.3427 13.8426 39.7498C14.2585 40.5807 15.5621 42.0048 16.4374 42.5845C19.3592 44.5199 23.4199 44.098 25.9186 41.5994C27.3676 40.1503 28.0561 38.6514 28.1957 36.6417C28.3488 34.4393 27.6065 32.4969 25.9803 30.8442C24.0575 28.8902 21.3763 28.1213 18.7237 28.7633ZM64.9727 36.2113V37.7177H55.7908H46.6089V36.2113V34.7049H55.7908H64.9727V36.2113ZM16.0503 53.4473V60.8865L18.3088 58.6281L20.5674 56.3695L22.8997 58.6987L25.2322 61.0279V53.5166V46.0054L24.9094 46.0994C22.703 46.7417 22.3718 46.7966 20.6413 46.8077C18.9577 46.8186 17.5782 46.5945 16.2938 46.1015C16.0667 46.0144 16.0503 46.51 16.0503 53.4473Z" fill="#F0C324" />
                                        </svg>
                                    </div>
                                    <div class="col-8">
                                        <p class="fs-24 fw-700">Family Owned and Operated</p>
                                    </div>
                                </div>
                                <p class="pt-4 text-primary-light lh-1_5">As a family owned and operated company, integrity is part of our core values. We only provide honest recommendations and will never push a service or product on you that you do not need.</p>
                            </article>
                        </div>
                    </div>

                    <div class="row justify-content-end pt-5">
                        <div class="col-lg-10">
                            <p class="text-primary-light fs-18 lh-1_5">When deciding on a plumber for all of your residential and commercial plumbing needs, you want to be sure the company you choose not only has the right qualifications, but also has your best interests at heart. Our team of professionals provides honest, high quality workmanship at a price you can agree on.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require 'inc/gallery.php'; ?>
</main>

<?php
require 'inc/footer.php';
?>