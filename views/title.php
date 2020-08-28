<?php
        include '../Models/getdata.php';
        $dt = new database;
        $id = $_GET['titleid'];
        $dt->select("SELECT title,descr,img FROM mydatabase where id='$id'");
        while($row = $dt->fetch()) {
        $title = $row['title'];
        $descr = $row['descr'];
        $img = $row['img'];
        }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-9">
        <?php
          echo "<h2>'$title'</h2>";
        ?>
        </div>
        <div class="col-sm-1">
        <button type="button" class="btn btn-light">Back</button>
        </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-4">
        <?php
        echo "<td><img src='$img' width='237' height='237' style='border: solid;width: 200px;height: 200px;margin-left: 237px;'></td> ";
        ?>
        
      </div>
      <div class="col-sm-6">
        <?php
        echo "<h3 style='border: solid;width: 700px;height: 500px;'>$descr</h3>";
        ?>

      </div>

    </div>
</body>
</html>
