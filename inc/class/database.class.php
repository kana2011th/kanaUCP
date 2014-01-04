<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class cmsDatabase {

    private $db;

    private function connectDB() {
        try {
            return new PDO(DB_DRIVER.":host=localhost;dbname=".DB_DATABASE, DB_USERNAME, DB_PASSWORD);
        } catch (PDOException $e) {
            die("DATABASE ERROR! <br>Message:" . $e->getMessage());
        }
    }

    public function execDB($SQL) {
        $db = $this->connectDB();
        $_db = $db->prepare($SQL);
        $_db->execute();
        return $_db;
    }

}
$cms->db = new cmsDatabase;