<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// database connection will be here
// include database and object files
include_once '../config/connect.php';
include_once '../crud.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$scheldwoorden = new Scheldwoorden($db);
// create product here
// query products


// $insertArray = [
//     "naam" => "Mountain Dew",
//     "beschrijving" => "lekker drankje USA",
//     "prijs" => 2.49
// ];

echo "<pre>";
var_dump($_POST);

$insertArray = $_POST;
if (isset($_POST['woord'])) {
    $result = $scheldwoorden->create($insertArray);
}

?>

<form action="http://localhost/Jaar%202/PHP/eindopdracht/crud/create.php" method="post">
    <input type="text" name="woord" id="woord" placeholder="Scheldwoord" required>
    <input type="text" name="goedgekeurd" id="goedgekeurd" placeholder="Goedgekeurd?" required>
    <input type="number" name="gradatie" id="gradatie" placeholder="Gradatie" required>
    <input type="submit" value="Verzenden">
</form>