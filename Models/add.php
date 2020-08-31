<?php
include 'getdata.php';
$dt = new database;
include "../views/addnew.php";


        
if(isset($_POST['submit'])){
        if($_FILES['upload']['error'] > 0){
            echo "<br>Co loi trong viec upload file";
        }
        else{
            move_uploaded_file($_FILES['upload']['tmp_name'],
            'upload/'.$_FILES['upload']['name']);
            $img = 'upload/'.$_FILES['upload']['name'];
        }

    $title = $_POST['title'];
    $des = $_POST['des'];
    $stt = $_POST['status'];
    $time = date("Y/m/d");
    $dt->command("INSERT INTO mydatabase (title, descr, img, stt, create_at)
    VALUES ('$title', '$des',  '$img','$stt', '$time')");

header('location:../controllers/index_controll.php?act=manage&page=1&item=10');
}
?>