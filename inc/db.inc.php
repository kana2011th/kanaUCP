<?php

try {
    $db = new PDO(DB_DRIVER.":host=".DB_HOST.";dbname=".DB_DATABASE, DB_USERNAME, DB_PASSWORD);
} catch (PDOException $e) {
    die("DATABASE ERROR! <br>Message:" . $e->getMessage());
}
?>
