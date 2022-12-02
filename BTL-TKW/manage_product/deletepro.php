<?php
    include "../Database_connect/database.php";
    $db = new Database();
    $id = $_GET['id'];
    $db->deletepro($id);
?>