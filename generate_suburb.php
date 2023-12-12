<?php

$sitename = 'admin';
$dbhost = 'localhost';
$dbname = 'rapidplumbing';
$dbuser = 'root';
$dbpass = '';


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$conn->query("SET NAMES 'utf8'");

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}



function slugify2($text)
{
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    $text = preg_replace('~[^-\w]+~', '', $text);

    $text = trim($text, '-');

    $text = preg_replace('~-+~', '-', $text);

    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text . '-plumber';
}



$file = fopen("suburbs.txt", "r");

$arrState = array();

while (!feof($file)) {

    $subrub = fgets($file);

    if (!empty($subrub)) {

        $arrState[] = trim($subrub);
    }
}



fclose($file);

echo '<pre>';

//print_r($arrState);

echo '</pre>';

$num = 1;

foreach ($arrState as $state) {

    if (!empty($state)) {

        //echo $num.' -- '.$state.'<br>';

        $Insert = " INSERT INTO `cmsb_suburb_list` SET ";

        //$Insert.= " `num` = '9'";		

        $Insert .= " `createdDate` = '" . date('Y-m-d H:i:s') . "', ";

        $Insert .= " `createdByUserNum` = 1, ";

        $Insert .= " `updatedDate` = '" . date('Y-m-d H:i:s') . "', ";

        $Insert .= " `updatedByUserNum` = 1, ";

        $Insert .= " `dragSortOrder` = " . $num . ", ";

        $Insert .= " `title` = '" . $conn->escape_string($state) . "', ";

        $Insert .= " `slug` = '" . $conn->escape_string(slugify2($state)) . "' ";

        //print_r($Insert);die;

        $conn->query($Insert);

        ///error_log( $con->error );

        $num++;
    }
}

$querys = "  SELECT * FROM `cmsb_suburb_list`";

$result = mysqli_query($conn, $querys);

while ($row = mysqli_fetch_assoc($result)) {
    $thread_id = $row['title'];
}

echo "$thread_id";
