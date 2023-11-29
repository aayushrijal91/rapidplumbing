<?php
$BlogsPageArr = array();
$page_content = blogs_content::get_data($BlogsPageArr);
if (count($page_content)) {
    $page_content = $page_content[0];
}

$BlogsArr = array('orderBy' => 'dragSortOrder ASC');
$BlogsArr = blogs::get_data($BlogsArr);

$blog_category = array('orderBy' => 'dragSortOrder ASC');
$blog_category = blog_category::get_data($blog_category);

if (!empty($_POST) && isset($_POST['category'])) {
    $selectedCategory = $_POST['category'];
    var_dump($_POST);
}

$cat_1 = array_filter($BlogsArr, function ($blogs) {
    return $blogs['category:label'] == 'Category One';
});

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

<main class="blogsPage bg-white py-8 text-dark">
    <div class="container">
        <div class="bg-light row mb-5">
            <div class="col-2">
                <select id="blogCategory" class="mx-4 py-4 bg-transparent border-0 text outline-none shadow-none">
                    <option selected disabled>Select Blog Category</option>
                    <?php foreach ($blog_category as $cat) { ?>
                        <option data-category="<?= _isset($cat, 'title') ?>"><?= _isset($cat, 'title') ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-auto">
                <div class="divider"></div>
            </div>
            <div class="col">
                <div class="row h-100 align-items-center">
                    <div class="col-auto">
                        <p class="text-grey-3">Selected Filters</p>
                    </div>
                    <div class="col-auto">
                        <p class="text-white rounded-pill bg-grey-3 px-3 py-2">All</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="blogListContainer" class="row g-4"></div>
    </div>
</main>

<script>
    var blogs = <?= json_encode($BlogsArr); ?>;
    var cdnUrl = "<?= V_CDN_URL ?>";
    var blogsContainer = document.getElementById('blogListContainer');
    blogsContainer.innerHTML = '';

    blogs.forEach(function(blog) {
        let main = `<div class="col-md-6 col-lg-4">
                         <article class="blogCard">
                             <div class="image">
                               <img src="${cdnUrl+blog.thumbnail[0].urlPath}" alt="${blog.thumbnail[0].info1}" title="${blog.thumbnail[0].info2}" width="${blog.thumbnail[0].width}" height="${blog.thumbnail[0].height}">

                             </div>
                             <article class="content flex-grow-1 d-flex flex-column">
                                 <div class="flex-grow-1">
                                     <h4 class="fs-24 fw-600">${blog.title}</h4>
                                     <div class="divider"></div>
                                     <p class="fs-14 fw-500 lh-1_5 pb-4">${blog.short_description}</p>
                                 </div>
                                 <div>
                                     <a href="${blog.slug}" class="btn btn-outline-primary d-inline-flex border-1 text-white rounded-pill px-3 px-lg-4 fs-16 fw-700">Read More</a>
                                 </div>
                             </article>
                         </article>
                     </div>`;

        blogsContainer.insertAdjacentHTML('beforeend', main);
    });
</script>

<?php require 'inc/footer.php'; ?>