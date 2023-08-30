<?php
/* menu single record start*/
$header_settings_Arr = array();
$header_settings = header_settings::get_data($header_settings_Arr);
$header_settings = $header_settings[0];
/* menu single record end */

/* menu single record start*/
$footer_settings_Arr = array();
$footer_settings = footer_settings::get_data($footer_settings_Arr);
$footer_settings = $footer_settings[0];
/* menu single record end */

/* SEO Info start */
$seo_common_variablesarr = array();
$seo_common_variables = seo_common_variables::get_data($seo_common_variablesarr);
$seo_common_variables = $seo_common_variables[0];
/* SEO Info End */
define('V_DEFAULT_IMG_ALT', $seo_common_variables['seo_default_image_alt_tag']);

$HomePageArr = array();
$HomePage = homepage_content::get_data($HomePageArr);
if (count($HomePage)) {
    $HomePage = $HomePage[0];
}

/* Assets Rates multi record end */

/*  Meta data */
$meta_title         = $HomePage['meta_title'];
$meta_description     = $HomePage['meta_description'];
$meta_keyword         = $HomePage['meta_keyword'];
$meta_image         = '';
$meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
/* Meta Data End */
?>


<?php
require 'inc/header.php';
require 'inc/nav.php';
?>

<div class="container">
    this is homepage
</div>

<?php
require 'inc/footer.php';
?>