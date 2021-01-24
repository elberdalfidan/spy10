<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=ieeebaun','root','');
}catch (PDOException $e){
    die($e->getMessage());
}
?>