<?php

class Report_model{

    private $db;
    private $table;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function reportList(){
        $this->db->query('SELECT * FROM vassetdata');
        return $this->db->resultSet();
    }
}