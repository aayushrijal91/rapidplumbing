<?php

$sitename = 'admin';
$dbhost = 'localhost';
$dbname = 'angle';
$dbuser = 'root';
$dbpass = '';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset('utf8');

$file = fopen("assets.txt", "r");
if (!$file) {
    die("Failed to open assets.txt");
}

$arrState = array();
while (($data = fgetcsv($file)) !== false) {
    $data = array_map('trim', $data); // Trim whitespace from each element

    if (count($data) >= 7) {
        $title = $data[0];
        $primary = $data[1];
        $propertyBacked = $data[2];
        $abnAge = $data[3];
        $gstRegistration = $data[4];
        $endOfTerm = $data[5];
        $rate = $data[6];

        // Check if title and rate are not empty
        if (!empty($title) && !empty($rate)) {
            $arrState[] = array(
                'title' => $title,
                'primary' => $primary,
                'propertyBacked' => $propertyBacked,
                'abnAge' => $abnAge,
                'gstRegistration' => $gstRegistration,
                'endOfTerm' => $endOfTerm,
                'rate' => $rate
            );
        }
    }
}

fclose($file);

$num = 1;
foreach ($arrState as $state) {
    $title = $state['title'];
    $primary = $state['primary'];
    $propertyBacked = $state['propertyBacked'];
    $abnAge = $state['abnAge'];
    $gstRegistration = $state['gstRegistration'];
    $endOfTerm = $state['endOfTerm'];
    $rate = $state['rate'];

    echo $num . ' -- ' . $title . '<br>';

    $Insert = "INSERT INTO `vital_assets_rates_list_content` ";
    $Insert .= "(`createdDate`, `createdByUserNum`, `updatedDate`, `updatedByUserNum`, ";
    $Insert .= "`dragSortOrder`, `title`, `asset_type`, `property_backed`, `abn_age`, `gst_registration`, `end_of_term`, `rate`) ";
    $Insert .= "VALUES (";
    $Insert .= "'" . date('Y-m-d H:i:s') . "', ";
    $Insert .= "0, ";
    $Insert .= "'" . date('Y-m-d H:i:s') . "', ";
    $Insert .= "0, ";
    $Insert .= "1, ";
    $Insert .= "'" . $conn->real_escape_string($title) . "', ";
    $Insert .= "'" . $conn->real_escape_string($primary) . "', ";
    $Insert .= "'" . $conn->real_escape_string($propertyBacked) . "', ";
    $Insert .= "'" . $conn->real_escape_string($abnAge) . "', ";
    $Insert .= "'" . $conn->real_escape_string($gstRegistration) . "', ";
    $Insert .= "'" . $conn->real_escape_string($endOfTerm) . "', ";
    $Insert .= "'" . $conn->real_escape_string($rate) . "'";
    $Insert .= ")";

    if ($conn->query($Insert) === TRUE) {
        echo "Record inserted successfully<br>";
    } else {
        echo "Error inserting record: " . $conn->error . "<br>";
    }

    $num++;
}

$conn->close();

?>