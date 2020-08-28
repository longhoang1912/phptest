<?php
include "../views/header.php";
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'manage':
            include "../views/manage.php";
            break;
        case 'about':
            include "../views/body.php";
        break;
        default:
            include "../views/body.php";
        break;
    }
    }

if(isset($_GET['titleid'])){
    $id = $_GET['titleid'];
    switch($id){
        case $id:
        include "../views/title.php";
        break;
    }

}
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    switch($id){
        case $id:
        include "../Models/delete.php";
        break;
    }

}
if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    switch($id){
        case $id:
        include "../Models/update.php";
        break;
    }

}
// if(isset($_GET['addnew'])){
//     $add = $_GET['updateid'];
//     switch($add){
//         case '1':
//         include "../views/addnew.php";
//         break;
//     }

// }
?>