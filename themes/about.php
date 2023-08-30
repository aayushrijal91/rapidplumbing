<?php
$AboutPageArr = array();
$AboutPage = about_content::get_data($AboutPageArr);
if (count($AboutPage)) {
    $AboutPage = $AboutPage[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $AboutPage['meta_title'];
$meta_description     = $AboutPage['meta_description'];
$meta_keyword         = $AboutPage['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */

require 'inc/header.php';
require 'inc/nav.php';
?>

<div class="container">
    this is about page
</div>

<?php
require 'inc/footer.php';
?>