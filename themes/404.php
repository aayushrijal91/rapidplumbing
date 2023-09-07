<?php
$Explode = explode("/", $_SERVER['REQUEST_URI']);

// if (isset($Explode[0]) && !empty($Explode[0])) {

//     $serviceArray = array('where' => "`slug` = '" . $Explode[0] . "'");

//     $service = services_lists_content::get_data($serviceArray);

//     if (count($service) > 0) {

//         $service = $service[0];

//         $_GET['slug'] = $Explode[0];

//         $filepagename =  'service-page';

//         include('service.php');

//         $no_page_exist = 'false';

//         //  exit();

//     }
// }
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
?>