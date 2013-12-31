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
            return new PDO("mysql:host=localhost;dbname=authme", "root", "kana2011");
        } catch (PDOException $e) {
            die("DATABASE ERROR! <br>Message:" . $e->getMessage());
        }
    }

    public function execDB($SQL) {
        $db = $this->connectDB();
        return $db->prepare($statement)->execute();
    }

}
