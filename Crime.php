<?php
    //class to handle the different crimes in the city
    class Crime{
        private $db;

        //create database instance
        public function __construct(){
            $this->db = new Database;
        }

        //get all crimes
        public function getAllCrimes(){
            $this->db->query("SELECT * FROM crimes");
        }
    }
?>