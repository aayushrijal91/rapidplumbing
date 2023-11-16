<?php
/*
Plugin Name: Custom Action
Plugin URI:
Description: Hero Plumbing Site Manage
Author:
Version: 1.0
Author URI:
*/

/* table data save or update */
addFilter('record_postsave', 'plugin_date_update', null, 1);

/* table data remove */
addFilter('record_preerase', 'plugin_date_update', null, 1);

/* table list drag sort */
addFilter('record_postlistdragsort_vtl', 'plugin_date_update', null, 1);


/* table data presave sort */
addFilter('record_postsave', 'plugin_slug_update');

/* admin footer custom code add */
addFilter('admin_footer', 'plugin_custom_js');

/* admin footer custom code add */
addFilter('section_preDispatch', 'plugin_section_preDispatch');

/* admin footer custom code add 
addFilter('userSectionAccess', 'plugin_login_content');

//
function plugin_login_content($data) {
//	print_r($data);
	
}*/


/* admin Webp converter */
addFilter('upload_save', 'plugin_webpconvert');
addFilter('upload_thumbnail_save', 'plugin_webpconvert_thumb');
addFilter('upload_removeFilePath', 'plugin_webpconvert_remove');

//
function plugin_date_update($defaultOutput)
{

    /* table CRUD change then last date put on this file */
    $date_modify_file = '../content_modified.txt';
    if (file_exists($date_modify_file)) {
        file_put_contents($date_modify_file, date('Y-m-d H:i:s'));
    }
}

function plugin_custom_js()
{
    global $CURRENT_USER;
    if (isset($_GET['menu']) && in_array($_GET['menu'], array('services_lists_content', 'blogs_list_content', 'areas_categories_content', 'suburbs_content', 'pest_lists_content', 'termites_content')) && isset($_GET['action']) && in_array($_GET['action'], array('add', 'edit'))) { ?>
        <script>
            $(document).ready(function() {
                var _tmpObj = {
                    'services_lists_content': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'blogs': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'areas_categories_content': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'suburbs_content': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'pest_lists_content': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'termites_content': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                };
                var url = new URL(window.location.href);
                var _menu = url.searchParams.get("menu");
                if (_tmpObj[_menu]) {
                    $(_tmpObj[_menu]['title']).keyup(function() {
                        var _slug = ($(this).val()).toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-');
                        $(_tmpObj[_menu]['slug']).val(_slug);
                    });
                }
            });
        </script>
    <?php
    }
    // Select Related page in services CTA	
    if (isset($_GET['menu']) && in_array($_GET['menu'], array('inner_services_cta_list')) && isset($_GET['services_listNum']) && isset($_GET['action']) && in_array($_GET['action'], array('add', 'edit'))) { ?>
        <script>
            $(document).ready(function() {
                $('select[name="related_services_name"]').val('<?= $_GET['services_listNum'] ?>');
            });
        </script>
    <?php
    }
    if (isset($_GET['menu']) && in_array($_GET['menu'], array('inner_services_cta_list')) && isset($_GET['action']) && in_array($_GET['action'], array('add', 'edit'))) { ?>
        <script>
            $(document).ready(function() {
                $('select[name="related_services_name"]').parents(".form-group").hide();
            });
        </script>
    <?php
    }
    // Heading Tag Style Change
    ?>
    <script>
        $(document).ready(function() {
            $("select.form-control").each(function(index) {
                if ($(this).attr('name').indexOf('heading_tag') >= 0) {
                    if ($(this).val() == '') {
                        $(this).val('h2');
                    }
                    $(this).parents('.form-group').addClass('heading-tag');
                }
            });
        });
    </script>
    <style>
        @media screen and (min-width: 1366px) {
            .heading-tag {
                display: inline-block;
                width: 42%;
                clear: both;
                top: -5rem;
                position: relative;
                left: 60%;
                margin-bottom: -2rem;
            }
        }
    </style>
    <?php
    if (($CURRENT_USER['isAdmin'] == 0) && isset($_GET['menu']) && in_array($_GET['menu'], array('services_list')) && isset($_GET['action']) && in_array($_GET['action'], array('add', 'edit'))) {
    ?>
        <script>
            $(document).ready(function() {
                $('select[name="page_layout"]').parents('.form-group').hide();
            });
        </script>
<?php
    }
}

function plugin_section_preDispatch($table, $action)
{
    /* if action found in selected action then date update function call */
    if (in_array($action, array('listDragSort', 'uploadErase', 'uploadForm', 'uploadModify'))) {
        /* call date update function */
        plugin_date_update($table);
    }
}


function plugin_slug_update($table, $action, $data, $num)
{
    if ($table == 'services_list') {
        // $update = array('service_page'=> $_POST['slug']);
        // $arrWhereAnd = array('service_page'=> $data['slug']);
        // $query = "UPDATE `vital_megamenu` SET `service_page` = '".mysql_escape( $_POST['slug'])."'  WHERE `service_page` = '".mysql_escape($data['slug'])."'";
        // $query2 =  "UPDATE `vital_area_services_list` SET `link` = '".mysql_escape( $_POST['slug'])."'  WHERE `link` = '".mysql_escape($data['slug'])."'";
        // $query3 =  "UPDATE `vital_home_services_list` SET `service_link` = '".mysql_escape( $_POST['slug'])."'  WHERE `service_link` = '".mysql_escape($data['slug'])."'";
        // $query4 =  "UPDATE `areas_services_content` SET `title_link` = '".mysql_escape( $_POST['slug'])."'  WHERE `title_link` = '".mysql_escape($data['slug'])."'";
        // mysqli()->query($query2);
        // mysqli()->query($query3);
        // mysqli()->query($query4);
        // return mysqli()->query($query);
    }
}

function plugin_webpconvert($array)
{
    $source = $array[2];
    webpImage($source, $quality = 80, false);
}

function plugin_webpconvert_thumb($array)
{
    $source = $array[3];
    webpImage($source, $quality = 80, false);
}
function plugin_webpconvert_remove($dirpath)
{
    $s = ["uploads", ".png", ".jpg", ".jpeg", ".gif"];
    $r   = ["uploads-webp", ".webp", ".webp", ".webp", ".webp"];
    $file = str_replace($s, $r, $dirpath);
    if (file_exists($file)) {
        unlink($file);
    }
}

function webpImage($source, $quality = 100, $removeOld = false)
{
    $dir = pathinfo($source, PATHINFO_DIRNAME);
    $name = pathinfo($source, PATHINFO_FILENAME);
    $dir = str_replace('uploads', 'uploads-webp', $dir);
    $destination = $dir . DIRECTORY_SEPARATOR . $name . '.webp';
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    $info = getimagesize($source);
    $isAlpha = false;
    if ($info['mime'] == 'image/jpeg')
        $image = imagecreatefromjpeg($source);
    elseif ($isAlpha = $info['mime'] == 'image/gif') {
        $image = imagecreatefromgif($source);
    } elseif ($isAlpha = $info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
    } else {
        return $source;
    }
    if ($isAlpha) {
        imagepalettetotruecolor($image);
        imagealphablending($image, true);
        imagesavealpha($image, true);
    }
    imagewebp($image, $destination, $quality);

    if ($removeOld)
        unlink($source);

    return $destination;
}
