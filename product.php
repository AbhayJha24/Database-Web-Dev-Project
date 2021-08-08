<?php

class Product
{
    protected $db = null;

    public function __construct(dbcontroller $db)
    {
        if (!isset($db->con)) return null;

        $this->db = $db;
    }

    public function getTableData($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultarray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultarray[] = $item;
        }

        return $resultarray;
    }
}


?>