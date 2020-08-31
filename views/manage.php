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
            $item = $_GET['item'];
            if(isset($_POST['page'])){
                $item = $_POST['numpage'];
            }
            // $item = $plus + $_GET['item'] -     1;
            $dt->select("SELECT COUNT(*) FROM mydatabase");
            $row = $dt->fetch();
            $tong = $row['COUNT(*)'];
            // xac dinh so trang
            $sotrang = ceil($tong/$item);
            //xac dinh so trang hien tai!!
            
            if(isset($_GET['page']) >= 1 && $_GET['page'] <= $sotrang){
                $page = $_GET['page'];
            }
            else{
                $page=1;
            }
            $start = ($page-1)*$item;
            $dt -> select("SELECT * FROM mydatabase LIMIT $start, $item");
            while($r = $dt->fetch()){
            $id = $r['id'];
                    $title = $r['title'];
                    $descr = $r['descr'];
                    $img = $r['img'];
                    $stt = $r['stt'];
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
            }
            ?>
        </tbody>
    </table>


</body>
<?php
include "footer.php";
echo "<center><ul class='nav' style='
margin-left: 270px;
'>";
//nut prev
if($page > 1){
    $prev = $page - 1;
    echo "<li><a href='index_controll.php?act=manage&page=$prev&item=$item'>Prev</a></li>";
    
}
// nut so
for($i=1;$i<$sotrang;$i++){
    if($page != $i){
        echo "<li><a href='index_controll.php?act=manage&page=$i&item=$item'>$i</a></li>";
    }
    else{
        echo "<li class='current'>$i</li>";
    }
}
// nut next
if($page < $sotrang){
    $next = $page +1;
    echo "<li><a href='index_controll.php?act=manage&page=$next&item=$item'>Next</a></li>";
    
}
echo "</ul></center>";
?>
</html>