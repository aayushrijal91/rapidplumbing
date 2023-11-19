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

if (isset($Explode[0]) && !empty($Explode[0])) {
    $serviceArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $service = blocked_drains_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $Explode[0];
        $filepagename =  'blocked-drains-inner';
        include('blocked-drains-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0])) {
    $serviceArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $service = gas_plumbing_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $Explode[0];
        $filepagename =  'gas-plumbing-inner';
        include('gas-plumbing-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0])) {
    $serviceArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $service = hot_water_services_list::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $Explode[0];
        $filepagename =  'hot-water-services-inner';
        include('hot-water-services-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0])) {
    $serviceArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $service = taps_toilets_services_list::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $Explode[0];
        $filepagename =  'taps-toilets-inner';
        include('taps-toilets-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0])) {
    $serviceArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $service = general_plumbing_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $Explode[0];
        $filepagename =  'general-plumbing-inner';
        include('general-plumbing-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0])) {
    $serviceArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $service = leak_detection_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $Explode[0];
        $filepagename =  'leak-detection-inner';
        include('leak-detection-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0])) {
    $serviceArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $service = rainwater_tanks_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $Explode[0];
        $filepagename =  'rainwater-tanks-inner';
        include('rainwater-tanks-inner.php');
        $no_page_exist = false;
        exit();
    }
}

if (isset($Explode[0]) && !empty($Explode[0])) {
    $serviceArray = array('where' => "`slug` = '" . $Explode[0] . "'");
    $service = roofing_guttering_services::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $Explode[0];
        $filepagename =  'roofing-guttering-inner';
        include('roofing-guttering-inner.php');
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

if ($no_page_exist) :
?>

    <?php
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