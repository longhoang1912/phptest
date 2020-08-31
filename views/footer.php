<?php
  // include "../Models/getdata.php";
  // $dt = new database;
  $dt->select("SELECT COUNT(*) FROM mydatabase");
  $row = $dt->fetch();
  $sumitems = $row['COUNT(*)'];
?>
<div class="row">
  <div class="col-sm-3">
  <form method="POST">
<select id="status" name="numpage" class="custom-select" style="
    width: 20%;
">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value=<?php echo "'$sumitems'";?>>show all</option>
                      </select>
  <br><br>
  <input type="submit" value="SHOW ITEM" name='page'>
  </div>

</form>