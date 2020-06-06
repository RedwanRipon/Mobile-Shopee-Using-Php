<?php

//use to fetch product data
class Blog
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    //fetch product data using getData Method
    public function getData($table = 'blog'){
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();

        //fetch data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }

}