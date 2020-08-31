<?php
// include 'header.php';
include '../Models/getdata.php';
$dt = new database;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAGE</title>
</head>

<body>
    <div class="row">
        <div class="col-sm-2">
            <h1>MANAGE</h1>
        </div>
        <div class="col-sm-10">
            <a class="btn btn-primary" href="index_controll.php?act=add" role="button" style="
    margin-left: 88%;
">NEW</a>
        </div>

    </div>



    <table class=" table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Thumb</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $numpage = 0;
            if(isset($_POST['page'])){
                $numpage = $_POST['numpage'] - 1;
            }
            // if(isset($_POST['page'])){
            //     $numpage = $_POST['status'];
            $dt->select("SELECT * FROM mydatabase");
            $i = 0;
            while ($r = $dt->fetch()) {
                $i++;
                $id = $r['id'];
                $title = $r['title'];
                $descr = $r['descr'];
                $img = $r['img'];
                $stt = $r['stt'];
                //  $create_at = $row['create_at'];
                //  $update_at = $row['update_at']
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td><img src='$img' class='img-fluid' style='
                width: 150px;
                height: 100px;
            '></td> ";
                echo "<td>$title</td> ";
                echo "<td>$stt</td> ";
                echo "<td><a href='index_controll.php?titleid=$id'>Show</a>
                        | <a href='index_controll.php?&updateid=$id'>Edit</a> | 
                                  <a href='index_controll.php?deleteid=$id'>Delete</a><td>";
                echo "</tr>";
                if($i > $numpage){
                break;
                }
            }
            
            ?>
        </tbody>
    </table>


</body>
<?php
include "footer.php";
?>
</html>
