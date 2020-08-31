<?php
include 'getdata.php';
$dt = new database;
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $dt->command("DELETE FROM mydatabase WHERE id='$id'");
    header('location:../controllers/index_controll.php?act=manage&page=1&item=10');
}
?>