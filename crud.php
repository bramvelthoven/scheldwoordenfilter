<?php
class Scheldwoorden
{
   // database connectie en tabel-naam
   private $conn;
   private $table_name = "scheldwoorden_filter";
   // object properties
   public $id;
   // constructor with $db as database connection
   public function __construct($db)
   {
       $this->conn = $db;
   }
   // read products
   public function read()
   {
       // select all query
       $query = "SELECT * FROM " . $this->table_name;
       $result = $this->conn->query($query);
       return $result;
   }
   
   // create products
   public function create($insertArray)
   {
        var_dump($insertArray);
       
        echo "<br>";

       // select all query
       $insertQuery = "INSERT INTO `scheldwoorden_filter` (`woord`, `goedgekeurd`, `gradatie`) VALUES ('".$insertArray['woord']."', '".$insertArray['goedgekeurd']."', '".$insertArray['gradatie']."');";

       echo $insertQuery;

       //exit();

       //$query = "SELECT * FROM " . $this->table_name;
       $result = $this->conn->query($insertQuery);

       var_dump($result);
       return $result;
   }

   //delete
   public function delete($queryDelete)
   {
       // select all query
       $queryDelete = "DELETE FROM `scheldwoorden_filter` WHERE `id` = $queryDelete";
       $resultDelete = $this->conn->query($queryDelete);
       return $resultDelete;
   }


   //update 
   public function update($queryUpdate)

    {
        $woord = $queryUpdate["woord"];
        $goedgekeurd = $queryUpdate["goedgekeurd"];
        $gradatie = $queryUpdate["gradatie"];
        $id = $queryUpdate["id"];

        // select all query

        // $queryUpdate = "UPDATE " . $this->table_name . " SET `woord` = $queryUpdate['woord'], `goedgekeurd` = $queryUpdate['goedgekeurd'], `gradatie` = $queryUpdate['gradatie'] WHERE id = $queryUpdate['id']";
        $sql = "UPDATE `scheldwoorden_filter` SET `woord` = '$woord', `goedgekeurd` = '$goedgekeurd', `gradatie` = '$gradatie' WHERE `scheldwoorden_filter`.`id` = '$id'";
        $resultUpdate = $this->conn->query($sql);
        return $resultUpdate;

    }
}