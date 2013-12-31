<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=authme", "root", "kana2011");
} catch (PDOException $e) {
    die("DATABASE ERROR! <br>Message:" . $e->getMessage());
}
?>