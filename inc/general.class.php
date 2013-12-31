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
}
