<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account
 *
 * @author kana2011th
 */


class cmsAccount {

    public function login($user, $pass) {
        include_once 'database.class.php';
        $cms->db = new cmsDatabase;
        $res = $cms->db->execDB("SELECT * FROM `authme` WHERE username='" . $user . "'");
        if ($res) {
            $_userdata = $res->fetch(PDO::FETCH_ASSOC);
            //check user and pass
            if ($_userdata["username"] == $user && $this->checkPassword($pass, $_userdata["password"])) {
                //if true
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    private function checkPassword($trypass, $realpass) {
        $parts = explode('$', $realpass);
        $salt = $parts[2];
        $hashed = hash("sha256", hash("sha256", $trypass).$salt);
        $hashed = '$SHA$' . $salt . "$" . $hashed;
        return $hashed == $realpass ? true : false;
    }
    
    private function createUserData(){
        
    }
}

$cms->ac = new cmsAccount();
