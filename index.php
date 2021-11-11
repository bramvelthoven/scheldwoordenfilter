<?php

require 'config/connect.php';
$db = new Database;
$conn = $db -> getConnection();
$sql = 'SELECT woord FROM scheldwoorden_filter';

$result = $conn->query($sql);
if (isset($_POST['text'])) {
    # code...

$text_to_filter = $_POST['text'];

$array_to_filter = explode(' ', $text_to_filter);

for ($count = 0; $count < count($array_to_filter); $count++) {
    // echo $count;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // echo $row['woord'];
            $array_to_filter[$count] = str_replace(
                $row['woord'],
                "*",
                $array_to_filter[$count]
            );
        }
    }
}

$text_to_filter = implode(' ', $array_to_filter);

echo $text_to_filter;

echo '<br>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['woord'] . '<br>';
    }
} else {
    echo 'Niks in de database';
}}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Scheldwoorden Filter</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="text" id="text">
        <input type="submit" value="Submit">
    </form>
</body>
</html>