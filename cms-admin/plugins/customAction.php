<?php
/*
Plugin Name: Custom Action
Plugin URI:
Description: Hero Plumbing Site Manage
Author:
Version: 1.0
Author URI:
*/
/* admin footer custom code add */
addFilter('admin_footer', 'plugin_custom_js');

function plugin_custom_js()
{
    global $CURRENT_USER;
    if (isset($_GET['menu']) && in_array($_GET['menu'], array(
        'blocked_drains_services',
        'gas_plumbing_services',
        'hot_water_services_list',
        'taps_toilets_services_list',
        'general_plumbing_services',
        'leak_detection_services',
        'roofing_guttering_services',
        'rainwater_tanks_services',
        'blogs'
    )) && isset($_GET['action']) && in_array($_GET['action'], array('add', 'edit'))) { ?>
        <script>
            $(document).ready(function() {
                var _tmpObj = {
                    'blocked_drains_services ': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'gas_plumbing_services ': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'hot_water_services_list ': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'taps_toilets_services_list ': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'general_plumbing_services ': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'leak_detection_services ': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'roofing_guttering_services ': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'rainwater_tanks_services': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                    'blogs': {
                        'title': 'input[name="title"]',
                        'slug': 'input[name="slug"]'
                    },
                };
                var url = new URL(window.location.href);
                var _menu = url.searchParams.get("menu");

                if (_tmpObj[_menu]) {
                    $(_tmpObj[_menu]['title']).keyup(function() {
                        var _slug = ($(this).val()).toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-');
                        console.log(_slug);
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
