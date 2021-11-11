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
echo "<pre>";
var_dump($_POST);

$queryDelete = $_POST;

$result = $scheldwoorden->delete($queryDelete["id"]);

?>

<form action="http://localhost:8888/jaar_2/periode_5/Programmeren/eindopdracht/crud/delete.php" method="post">
    <input type="id" name="id" id="id" placeholder="id scheldwoord">
    <input type="submit" value="Verzenden">
</form>