<?php
$SuburbPageArr = array();
$page_content = suburbs_content::get_data($SuburbPageArr);

if (count($page_content)) {
    $page_content = $page_content[0];
}

$suburb_list = array('orderBy' => 'dragSortOrder ASC');
$suburb_list = suburb_list::get_data($suburb_list);

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $page_content['meta_title'];
$meta_description     = $page_content['meta_description'];
$meta_keyword         = $page_content['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

/* Banner Array Start */
$banner_details['banner_image'] = $page_content['banner_video_image'];
$banner_details['banner_title_heading_tag'] = $page_content['banner_title_heading_tag'];
$banner_details['banner_title'] = $page_content['banner_title'];
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

<main class="suburbsPage">
    <section class="areatop py-7">
        <div class="container">
            <p class="fs-64 fw-700 lh-1 text-capitalize"><?= _isset($page_content, 'banner_title') ?></p>
            <p class="fs-24 py-4">Keep up the flow for your business and home</p>

            <div class="areas_droplist d-block d-md-none">
                <div class="caption">All</div>
                <div class="list">
                    <?php foreach (range('A', 'Z') as $char) {
                    ?>
                        <div class="areas_alphabet item" id="<?= $char ?>"><?= $char ?></div>
                    <?php } ?>
                </div>
            </div>

            <div class="alphbetwrap d-none d-md-flex flex-wrap gap-2">
                <div class="areas_allSearch active">ALL</div>
                <?php foreach (range('A', 'Z') as $char) {
                    $htm3[$char] = '';
                ?>
                    <div class="areas_alphabet"><?= $char ?></div>

                <?php foreach ($suburb_list as $item) :
                        if (strpos($item['title'], $char) === 0) {
                            $liclass = str_replace(' ', '-', strtolower($item['title']));
                            $htm3[$char] .= '<li class=" ' . $liclass . '"><a href="' . _isset($item, 'slug') . '">' . $item['title'] . '</a></li>';
                        }
                    endforeach;
                } ?>
            </div>
        </div>
    </section>

    <section class="areawrap section-space">
        <div class="container">
            <?php
            if (count($suburb_list) > 0) {
                $count = 0;
            ?>
                <div class="arealistwrap">
                    <div class="row">
                        <?php foreach (range('A', 'Z') as $char) {
                            if (isset($htm3[$char]) && $htm3[$char] != '') {
                        ?>
                                <div class="col-lg-4 col-md-6 arealist char<?= $char ?> <?php echo ($count > 5) ? 'arealisthide' : ''; ?> ">
                                    <h3 class="alphabet-title fw-700 text-white"><?= $char ?></h3>
                                    <ul class="ps-0 pt-5">
                                        <?php echo $htm3[$char]; ?>
                                    </ul>
                                    <div class="mbottom "></div>
                                </div>
                        <?php $count++;
                            }
                        } ?>
                    </div>
                </div>
                <div class="noresult">No Result Found.</div>
                <div class="areas_loadMoreWrap "><a href="javascript:void(0)" class="areas_loadMoreBtn">Load More</a></div>
            <?php } ?>
        </div>
    </section>
</main>

<?php require 'inc/footer.php'; ?>