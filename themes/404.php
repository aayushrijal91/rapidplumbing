<?php
$Explode = explode("/", trim($_SERVER['REQUEST_URI'], '/'));
$no_page_exist = true;

if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1') {
    $Explode[0] =  $Explode[1];
    if (isset($Explode[2]) && !empty($Explode[2])) {
        $Explode[1] = $Explode[2];
    }
    if (isset($Explode[3]) && !empty($Explode[3])) {
        $Explode[2] = $Explode[3];
    }
}

if (isset($Explode[0]) && !empty($Explode[0]) && isset($Explode[1]) && !empty($Explode[1])) {
    $slug = '/' . $Explode[0] . '/' . $Explode[1];
    $serviceArray = array('where' => "`slug` = '" . $slug . "'");
    $service = blocked_drains_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $slug;
        $filepagename =  'blocked-drains-inner';
        include('penrith-plumber/blocked-drains-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0]) && isset($Explode[1]) && !empty($Explode[1])) {
    $slug = '/' . $Explode[0] . '/' . $Explode[1];
    $serviceArray = array('where' => "`slug` = '" . $slug . "'");
    $service = gas_plumbing_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $slug;
        $filepagename =  'gas-plumbing-inner';
        include('penrith-plumber/gas-plumbing-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0]) && isset($Explode[1]) && !empty($Explode[1])) {
    $slug = '/' . $Explode[0] . '/' . $Explode[1];
    $serviceArray = array('where' => "`slug` = '" . $slug . "'");
    $service = hot_water_services_list::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $slug;
        $filepagename =  'hot-water-services-inner';
        include('penrith-plumber/hot-water-services-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0]) && isset($Explode[1]) && !empty($Explode[1])) {
    $slug = '/' . $Explode[0] . '/' . $Explode[1];
    $serviceArray = array('where' => "`slug` = '" . $slug . "'");
    $service = taps_toilets_services_list::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $slug;
        $filepagename =  'taps-toilets-inner';
        include('penrith-plumber/taps-toilets-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0]) && isset($Explode[1]) && !empty($Explode[1])) {
    $slug = '/' . $Explode[0] . '/' . $Explode[1];
    $serviceArray = array('where' => "`slug` = '" . $slug . "'");
    $service = general_plumbing_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $slug;
        $filepagename =  'general-plumbing-inner';
        include('penrith-plumber/general-plumbing-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0]) && isset($Explode[1]) && !empty($Explode[1])) {
    $slug = '/' . $Explode[0] . '/' . $Explode[1];
    $serviceArray = array('where' => "`slug` = '" . $slug . "'");
    $service = leak_detection_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $slug;
        $filepagename =  'leak-detection-inner';
        include('penrith-plumber/leak-detection-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0]) && isset($Explode[1]) && !empty($Explode[1])) {
    $slug = '/' . $Explode[0] . '/' . $Explode[1];
    $serviceArray = array('where' => "`slug` = '" . $slug . "'");
    $service = rainwater_tanks_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $slug;
        $filepagename =  'rainwater-tanks-inner';
        include('penrith-plumber/rainwater-tanks-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0]) && isset($Explode[1]) && !empty($Explode[1])) {
    $slug = '/' . $Explode[0] . '/' . $Explode[1];
    $serviceArray = array('where' => "`slug` = '" . $slug . "'");
    $service = roofing_guttering_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $slug;
        $filepagename =  'roofing-guttering-inner';
        include('penrith-plumber/roofing-guttering-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0])) {
    $blogArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $blogs = blogs::get_data($blogArray);
    if (count($blogs) > 0) {
        $_GET['slug'] = $Explode[0];
        $filepagename =  'blogs-inner';
        include('blogs-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0])) {
    $suburbArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $suburbs = suburb_list::get_data($suburbArray);

    if (count($suburbs) > 0) {
        $_GET['slug'] = $Explode[0];
        $filepagename =  'suburb';
        include('suburb.php');
        $no_page_exist = false;
        exit();
    }
}

$RedirectUrlArr = array('orderBy' => 'num ASC', 'where' => "`title` = '" . $_SERVER['REQUEST_URI'] . "' ");
$RedirectUrl = redirects_url::get_data($RedirectUrlArr);
if (count($RedirectUrl)) {
    $RedirectUrl = $RedirectUrl[0];
    header("HTTP/1.1 301 Moved Permanently");
    header("Location:" . $RedirectUrl['action_data'] . "");
    exit();
}

if ($no_page_exist) :
    $meta_title         = '404 | Rapid Plumbing Group';
    $meta_description     = "Looking for a plumber you can trust? Call Rapid Plumbing Group Pty Ltd at 1800 172 743 and get reliable and professional plumbing solutions for your home in no time!";
    $meta_keyword         = "Rapid Plumbing";
    $meta_image         = '';
    $meta_url             = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    require 'inc/header.php';
    require 'inc/nav.php';
?>

    <section class="py-10">
        <div class="container">
            <h1 class="text-center fs-64 text-grey">404 Page not Found...</h1>
        </div>
    </section>
<?php
    require 'inc/footer.php';
endif;
?>