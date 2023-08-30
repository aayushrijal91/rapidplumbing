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

    if (count($data) >= 2) {
        $title = $data[0];
        $productType = $data[1];
        $accept = isset($data[2]) ? $data[2] : ''; // Check if accept exists
        $content = isset($data[3]) ? $data[3] : ''; // Check if content exists

        // Check if title and productType are not empty
        if (!empty($title) && !empty($productType)) {
            $arrState[] = array(
                'title' => $title,
                'productType' => $productType,
                'accept' => $accept,
                'content' => $content
            );
        }
    }
}

fclose($file);

$num = 1;
foreach ($arrState as $state) {
    $title = $state['title'];
    $productType = $state['productType'];
    $accept = $state['accept'];
    $content = $state['content'];

    echo $num . ' -- ' . $title . '<br>';

    $Insert = "INSERT INTO `vital_assets_list_content` ";
    $Insert .= "(`createdDate`, `createdByUserNum`, `updatedDate`, `updatedByUserNum`, ";
    $Insert .= "`dragSortOrder`, `title`, `content`, `product_type`, `accept`) ";
    $Insert .= "VALUES (";
    $Insert .= "'" . date('Y-m-d H:i:s') . "', ";
    $Insert .= "0, ";
    $Insert .= "'" . date('Y-m-d H:i:s') . "', ";
    $Insert .= "0, ";
    $Insert .= "1, ";
    $Insert .= "'" . $conn->real_escape_string($title) . "', ";
    $Insert .= "'" . $conn->real_escape_string($content) . "', ";
    $Insert .= "'" . $conn->real_escape_string($productType) . "', ";
    $Insert .= "'" . $conn->real_escape_string($accept) . "'";
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