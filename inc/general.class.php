<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author kana2011th
 */

class cmsGeneral {
    private $general;

    public function isAjaxReq() {
        return ($_SERVER["HTTP_X_REQUESTED_WITH"] == "xmlhttprequest")? true:false;
    }
    
    public function getSVData($d){
        return $config["d"][$d];
    }
    public function getSaltSHA($d){
        $sha_info = explode("$", $d);
        if( $sha_info[1] === "SHA" ) {
            $result["salt"] = $sha_info[2];
            $result["password"] = $sha_info[3];
            return $result;
        }
    }
}
$cms->ge = new cmsGeneral();