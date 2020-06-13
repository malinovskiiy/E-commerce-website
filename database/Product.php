<?php 
// Fetch products

class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->connection)) return null;

        $this->db = $db;
    }

    // Fetch product
    public function getDataFromTable($table)
    {
        $result = $this->db->connection->query("SELECT * FROM `{$table}`");

        $resultArray = array();
        
        // Fetch data from product table one by one
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

}