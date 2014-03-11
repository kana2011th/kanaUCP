<?php
error_reporting(E_ERROR);
include '/inc/inc/include.inc.php';
if($cms->ge->isAjaxReq()){
    if($_POST){
        if($_POST["Method"]){
            
        }
    }   
}else{
    die ("THIS FILE REQUIRED POST METHOD (Such as AJAX)");
}