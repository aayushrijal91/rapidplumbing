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
    $service = services_list::get_data($serviceArray);

    if (count($service) > 0) {
        $service = $service[0];
        $_GET['slug'] = $Explode[0];
        $filepagename =  'service-page';
        include('inner-service.php');
        $no_page_exist = false;
        //	exit();
    }
}

if ($no_page_exist) :
?>

    <?php
    require 'inc/header.php';
    require 'inc/nav.php';
    ?>

    <!-- Inner Banner Normal -->
    <section class="py-10">
        <div class="container">
            <h1 class="text-center fs-64 text-grey">404 Page not Found...</h1>
        </div>
    </section>

    <!-- End -->
<?php
    require 'inc/footer.php';
endif;
?>