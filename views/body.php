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
    <title>SHOW</title>
</head>

<body>
    <h1>
        SHOW
    </h1>
    </form>
        </div>

    </div>
    
    
   
    <table class=" table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Title</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $dt->select("SELECT * FROM mydatabase");
                        $i = 0;
                        while ($r=$dt->fetch()) {
                            $i++;
                            $id = $r['id'];
                            $title = $r['title'];
                            $img = $r['img'];
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td><img src='$img' width='50' height='50'></td> ";
                            echo "<td><a href='index_controll.php?titleid=$id' >$title</td> ";
                            echo "</tr>";
                        }
                    
                    ?>
                </tbody>
                </table>


</body>

</html>
